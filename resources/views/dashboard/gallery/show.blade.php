@extends('dashboards')
@section('titledash','Gallery Managements')
@section('activegallery','active')
@section('contents')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-left">
            <button type="button" data-toggle="modal" data-target="#addnewblog" class="btn btn-outline-danger">Add new
                blog
                post</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addnewblog" tabindex="-1" role="dialog" aria-labelledby="addnewblog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewblog">Add new blog post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/blog/addnewblog" method="POST" enctype="multipart/form-data">
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
                                        <option value="Umum">Umum</option>
                                        <option value="Berita Update">Berita Update</option>
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
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal add new post --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <strong>Congratulations {{session()->get('name')}}!</strong> - You should check in on some of those
                fields
                below.
            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>
@endsection
