@extends('dashboards')
@section('titledash','Partner Managements')
@section('contents')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-left">
            <button type="button" data-toggle="modal" data-target="#addnewpartner" class="btn btn-outline-danger">Add
                new
                partner</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addnewpartner" tabindex="-1" role="dialog" aria-labelledby="addnewpartner"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewpartner">Tambah partner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="partneradd" action="/admin/partner/addnewpartner" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="title" id="judul" required placeholder="Nama Partner"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Partner Image</label><br>
                                    <input type="file" name="image" required>
                                    <small class="text-muted">Image must contain 200x67 pixels</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button form="partneradd" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal Tambah post --}}
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Partner Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewpartner">Add Partner</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tablehover" class="table table-hover display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 200px;">Preview</th>
                                    <th>Judul Foto</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$partner->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($partner as $partner)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td><img src="{!!asset('media/partner/'.$partner->image)!!}"
                                            alt="{{$partner->judul_foto}} - {{$partner->image}}"></td>
                                    <td>
                                        {{$partner->title}}
                                    </td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#viewphotos{{$partner->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-eye"></i></span>
                                        </a>
                                        <a href="/admin/partner/trash/{!!$partner->id!!}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                {{-- Modal view user --}}
                                <!-- Modal -->
                                <div class="modal fade" id="viewphotos{{$partner->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewphotos{{$partner->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$partner->id}}">View photos
                                                    {{$partner->judul_foto}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12 text-left">
                                                        <div class="text-left">
                                                            <img class="img-fluid"
                                                                src="{!!asset('media/partner/'.$partner->image)!!}"
                                                                alt="{{$partner->title}} - {{$partner->image}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 text-left">
                                                        <div class="text-left">
                                                            <p>{{$partner->title}} - {{$partner->image}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" class="text-center">No Data Founded!</td>
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
@endsection
