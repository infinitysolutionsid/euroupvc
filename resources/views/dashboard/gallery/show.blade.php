@extends('dashboards')
@section('titledash','Gallery Managements')
@section('activegallery','active')
@section('contents')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-left">
            <button type="button" data-toggle="modal" data-target="#addnewgallery" class="btn btn-outline-danger">Add
                new
                gallery</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addnewgallery" tabindex="-1" role="dialog" aria-labelledby="addnewgallery"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewgallery">Add new gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="galleryadd" action="/admin/gallery/addnewgallery" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="judul_foto" id="judul" required placeholder="Nama foto"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <select name="product_id" id="" class="form-control custom-select" required>
                                        <option>Pilih kategori blog</option>
                                        <option value="Umum">Umum</option>
                                        <option value="Berita Update">Berita Update</option>
                                        @foreach ($product as $product)
                                        <option value="{{$product->id}}">{{$product->product_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Cover Image</label><br>
                                    <input type="file" name="img" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button form="galleryadd" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal add new post --}}
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
                            Gallery Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewgallery">Add Photos</button>
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
                                    <th>Kategori</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$gal->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($galp as $gal)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td><img src="{!!asset('media/gallery/'.$gal->img)!!}"
                                            alt="{{$gal->judul_foto}} - {{$gal->img}}"></td>
                                    <td>
                                        {{$gal->judul_foto}}
                                    </td>
                                    <td>{!!$gal->product_name!!}
                                    </td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#viewphotos{{$gal->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-eye"></i></span>
                                        </a>
                                        <a href="/admin/gallery/trash/{{$gal->id}}" class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                {{-- Modal view user --}}
                                <!-- Modal -->
                                <div class="modal fade" id="viewphotos{{$gal->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewphotos{{$gal->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$gal->id}}">View photos
                                                    {{$gal->judul_foto}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <div class="text-center">
                                                            <img class="img-fluid"
                                                                src="{!!asset('media/gallery/'.$gal->img)!!}"
                                                                alt="{{$gal->judul_foto}} - {{$gal->img}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 text-left">
                                                        <div class="text-left">
                                                            <p>{{$gal->judul_foto}} - {{$gal->img}}</p>
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
