@extends('dashboards')
@section('titledash','User Managements')
@section('activeblog','active')
@section('contents')
<div class="container-fluid">
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
                            User Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewuser">Tambah User</button>
                        </div>
                        <!-- Modal Tambah user -->
                        <div class="modal fade" id="addnewuser" tabindex="-1" role="dialog" aria-labelledby="addnewuser"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewuser">Tambah User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="adduser" action="/admin/user/addnewuser" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Lengkap" name="name"
                                                            id="name" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" name="username" id="username"
                                                            class="form-control" placeholder="Username" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password"
                                                            class="form-control" placeholder="Password" required
                                                            pattern=".{8,}"
                                                            oninvalid="setCustomValidity('Minimal character password adalah 8 abjad/angka. ')"
                                                            onchange="try{setCustomValidity('')}catch(e){}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="password" name="verpassword" id="verpassword"
                                                            class="form-control" placeholder="Verify your password"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">Role Auth User</label>
                                                        <select name="role" id="role"
                                                            class="form-control custom-select">
                                                            <option value="Admin">Admin</option>
                                                            <option value="User">User</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button form="adduser" type="submit" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tablehover" class="table table-hover display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$getuser->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($getuser as $getuser)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{!!$getuser->name!!}</td>
                                    <td>@if($getuser->status == 'active') <span style="color:green;"><i
                                                class="fas fa-check-circle"></i></span>
                                        @elseif($getuser->status=='unactive') <span style="color:red;"><i
                                                class="fas fa-times-circle"></i></span> @else <span
                                            style="color:yellow;"><i
                                                class="fas fa-exclamation-triangle"></i></span>@endif</td>
                                    <td>{!!$getuser->role!!}</td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#viewuser{{$getuser->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="" data-toggle="modal" data-target="#edituser{{$getuser->id}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/user/trash/{{$getuser->id}}" class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                {{-- modal edit user --}}
                                <!-- Modal -->
                                <div class="modal fade" id="edituser{{$getuser->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="edituser{{$getuser->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="edituser{{$getuser->id}}">Update data user
                                                    {{$getuser->name}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/user/update/{{$getuser->id}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Lengkap"
                                                                    name="name" id="name" value="{{$getuser->name}}"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" name="username" id="username"
                                                                    class="form-control" value="{{$getuser->username}}"
                                                                    placeholder="Username" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="password" name="password" id="password"
                                                                    class="form-control"
                                                                    value="{{$getuser->unpassword}}"
                                                                    placeholder="Password" required pattern=".{8,}"
                                                                    oninvalid="setCustomValidity('Minimal character password adalah 8 abjad/angka. ')"
                                                                    onchange="try{setCustomValidity('')}catch(e){}">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="password" value="{{$getuser->unpassword}}"
                                                                    name="verpassword" id="verpassword"
                                                                    class="form-control"
                                                                    placeholder="Verify your password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Role Auth User</label>
                                                                <select name="role" id="role"
                                                                    class="form-control custom-select">
                                                                    <option value="Admin">Admin</option>
                                                                    <option value="User">User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal view user --}}
                                <!-- Modal -->
                                <div class="modal fade" id="viewuser{{$getuser->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewuser{{$getuser->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$getuser->id}}">View data user
                                                    {{$getuser->name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama lengkap: {{$getuser->name}} <br>
                                                        Role auth: {{$getuser->role}} <br>
                                                        Status: @if($getuser->status=='active') <span
                                                            style="color:green;"><i
                                                                class="fas fa-check-circle"></i></span> Aktif
                                                        @elseif($getuser->status=='unactive') <span
                                                            style="color:red;"><i
                                                                class="fas fa-times-circle"></i></span> Tidak aktif
                                                        @else <span style="color:yellow;"><i
                                                                class="fas fa-exclamation-triangle"></i></span> Tidak
                                                        ada kejelasan @endif
                                                    </p>
                                                    <h5>Informasi Rahasia</h5>
                                                    <p>
                                                        Username: {{$getuser->username}} <br>
                                                        Password: {{$getuser->unpassword}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">No Data Founded!</td>
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
