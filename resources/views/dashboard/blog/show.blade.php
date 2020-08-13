@extends('dashboards')
@section('titledash','Blog Managements')
@section('activeblog','active')
@section('contents')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-left">
            <button type="button" data-toggle="modal" data-target="#addnewblog" class="btn btn-outline-danger">Tambah
                blog
                post</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addnewblog" tabindex="-1" role="dialog" aria-labelledby="addnewblog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewblog">Tambah blog post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="blogadd" action="/admin/blog/addnewblog" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="judul" id="judul" required placeholder="Judul blog"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <select name="kategori_produk" id="" class="form-control custom-select" required>
                                        <option>Pilih kategori blog</option>

                                        @foreach ($product as $product)
                                        <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Cover Image</label><br>
                                    <input type="file" name="coverimg" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Deskripsi Blog</label>
                                    <textarea name="isi" required id="" placeholder="Input your description here..."
                                        cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button form="blogadd" type="submit" class="btn btn-primary">Save changes</button>
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
        @if(!$blog->isEmpty())
        @foreach ($blog as $blog)
        <div class="col-lg-3">
            <div class="card">
                <img src="{!!asset('media/blog/'.$blog->coverimg)!!}" alt="Blog Projects"
                    class="card-img-top img-fluid">
                <div class="card-title p-t-10">
                    <h4>{{$blog->judul}}</h4><br>
                    <small class="text-muted">Kategori blog: {{$blog->kategori_produk}}</small>
                </div>
                <div class="card-body p-b-10">
                    {!!str_limit($blog->isi, 100)!!}
                </div>
                <div class="btn-group">
                    <a href="/blog/{{$blog->judul}}" target="_blank" class="btn btn-success"><span><i
                                class="far fa-eye"></i></span></a>
                    <a href="" data-toggle="modal" data-target="#updatedatablog{{$blog->id}}"
                        class="btn btn-warning"><span><i class="fas fa-pen"></i></span></a>
                    <a href="/admin/blog/trash/{{$blog->id}}" class="btn btn-danger"><span><i
                                class="fas fa-trash"></i></span></a>
                </div>
            </div>
        </div>
        <!-- Modal update blog -->
        <div class="modal fade" id="updatedatablog{{$blog->id}}" tabindex="-1" role="dialog"
            aria-labelledby="updatedatablog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updatedatablog">Update blog {{$blog->judul}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/admin/blog/update/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Judul blog</label>
                                        <input type="text" name="judul" id="judul" required placeholder="Judul blog"
                                            class="form-control" required value="{{$blog->judul}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Deskripsi Blog</label>
                                        <textarea name="isi" required id="" placeholder="Input your description here..."
                                            cols="30" rows="10" class="form-control">{!!$blog->isi!!}</textarea>
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
        @endforeach
        @else
        <div class="col-lg-12 text-center">
            <h4>No data founded!</h4>
        </div>
        @endif
    </div>
</div>
@endsection
