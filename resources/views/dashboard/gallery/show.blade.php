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
                    <h5 class="modal-title" id="addnewgallery">Tambah gallery</h5>
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
                                    <th>Keterangan Foto</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$gal->isEmpty())
                                <?php $no = 1; $getRole = session()->get('role'); ?>
                                @foreach ($galp as $gal)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td><a href="" data-toggle="modal" data-target="#viewphotos{{$gal->id}}"><img
                                                src="{!!asset('media/gallery/'.$gal->img)!!}"
                                                alt="{{$gal->judul_foto}} - {{$gal->img}}"></a></td>
                                    <td>
                                        <p style="margin-bottom: -15px;">
                                            <strong><a href="" style="color: #000;" data-toggle="modal"
                                                    data-target="#viewphotos{{$gal->id}}">{{$gal->judul_foto}}</a></strong>
                                        </p>
                                        <p style="margin-bottom: -15px;">
                                            Kategori: {!!$gal->product_name!!}
                                        </p>
                                        <small class="text-muted">Uploaded by:
                                            {{$gal->created_by}} |</small>
                                        <small class="text-muted">Created at:
                                            {{$gal->created_at}}</small>
                                        @if($gal->status=='approved')
                                        <div>
                                            <p style="margin-bottom: -15px;">
                                                <span style="color:green;"><i class="fa fa-circle"></i> Published</span>
                                            </p>
                                            <small class="text-muted">This image has already be published, see on our <a
                                                    href="/gallery"><strong>gallery homepage</strong></a></small>
                                        </div>
                                        @elseif($gal->status=='waiting')
                                        <div>
                                            <p style="margin-bottom:-15px;">
                                                <span style="color:rgb(219, 158, 25);"><i
                                                        class="fas fa-spinner fa-pulse"></i> In
                                                    Review...</span>
                                            </p>
                                            <small class="text-muted">Hi {{session()->get('name')}}, this image is
                                                already uploaded and waiting
                                                for approving from your head. Thank you for your patience.</small>
                                        </div>
                                        @else
                                        <div>
                                            <p style="margin-bottom:-15px;">
                                                <span style="color:red;"><i class="fa fa-circle"></i> Declined</span>
                                            </p>
                                            <small class="text-muted">Your image has been declined, maybe somethings is
                                                missed.</small>
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($getRole=='Directur' || $getRole=='Developer' || $getRole=='Head')
                                        <a href="/admin/gallery/verify/{!!$gal->id!!}"
                                            class="btn btn-success btn-rounded">
                                            <span><i class="fas fa-check"></i></span>
                                        </a>
                                        <a href="/admin/gallery/declined/{!!$gal->id!!}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-times"></i></span>
                                        </a>
                                        @else
                                        <a href="/admin/gallery/trash/{!!$gal->id!!}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                        @endif
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
                                                    {{$gal->judul_foto}} - {{$gal->img}}</h5>
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
