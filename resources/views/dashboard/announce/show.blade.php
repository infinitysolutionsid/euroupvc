@extends('dashboards')
@section('titledash','Announcement Managements')
@section('activeannounce','active')
@section('contents')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-left">
            <button type="button" data-toggle="modal" data-target="#addnewannounces"
                class="btn btn-outline-danger">Tambah
                Pengumuman</button>
        </div>
    </div>
    @if(session('selamat'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <strong>Congratulations {{session()->get('name')}}!</strong> - {{session('selamat')}}
            </div>
        </div>
    </div>
    @endif
    <!-- Modal -->
    <div class="modal fade" id="addnewannounces" tabindex="-1" role="dialog" aria-labelledby="addnewannounces"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewannounces">Tambah Pengumuman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addannounce" action="/admin/announcement/addnewannouncement" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" required placeholder="Judul Pengumuman"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Isi Pesan</label>
                                    <textarea name="messages" required id="messages"
                                        placeholder="Input your messages here..." cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button form="addannounce" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal Tambah post --}}
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Isi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$ann->isEmpty())
                                @foreach ($ann as $ann)
                                <tr>
                                    <td>{{$ann->title}}</td>
                                    <td>{!!$ann->messages!!}</td>
                                    <td><span
                                            style="color:@if($ann->status=='Active')green @elseif($ann->status=='Unactive')red @else yellow @endif"><i
                                                class="fas fa-circle"></i></span></td>
                                    <td><a href="#editannounce{{$ann->id}}" data-toggle="modal"
                                            data-target="#editannounce{{$ann->id}}"
                                            class="btn btn-primary btn-rounded btn-sm"><span><i
                                                    class="fas fa-pencil-alt"></i></span></a></td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="editannounce{{$ann->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="editannounce{{$ann->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editannounce{{$ann->id}}">Edit Pengumuman
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/announcement/editannouncement/{{$ann->id}}"
                                                id="editannounce" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" name="title" id="title" required
                                                                    placeholder="Judul Pengumuman"
                                                                    value="{{$ann->title}}" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Isi Pesan</label>
                                                                <textarea name="messages" required id="messages"
                                                                    cols="30" rows="10"
                                                                    class="form-control">{!!$ann->messages!!}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <select name="status" id=""
                                                                    class="form-control custom-select">
                                                                    <option value="Active">Tayangkan</option>
                                                                    <option value="Jeda">Jeda</option>
                                                                    <option value="Unactive">Berhenti</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button onclick="form_submit()" form="editannounce" type="submit"
                                                        class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- end modal Tambah post --}}
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3" class="text-center">No data founded</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function form_submit() {
        document.getElementById("editannounce").submit();
    }

</script>
@endsection
