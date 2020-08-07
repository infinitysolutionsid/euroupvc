@extends('dashboards')
@section('titledash','Products Managements')
@section('activeproducts','active')
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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Katalog Product Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewproducts">Add New Katalog</button>
                        </div>
                        <!-- Modal add new products -->
                        <div class="modal fade" id="addnewproducts" tabindex="-1" role="dialog"
                            aria-labelledby="addnewproducts" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewproducts">Add New Products</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="productnew" action="/admin/products/addnewproduct" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Produk" name="product_name"
                                                            id="name" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea name="description" id="" cols="30" rows="10"
                                                            class="form-control" placeholder="Deskripsi Produk"
                                                            required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="productnew" class="btn btn-primary">Save
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
                        <table class="table table-hover display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$products->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($products as $products)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$products->product_name}}</td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#viewproducts{{$products->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="" data-toggle="modal" data-target="#editproducts{{$products->id}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/products/trash/{{$products->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal update products -->
                                <div class="modal fade" id="editproducts{{$products->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="editproducts{{$products->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editproducts{{$products->id}}">Update produk
                                                    {{$products->product_name}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/products/update/{{$products->id}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Produk"
                                                                    name="product_name" id="name" class="form-control"
                                                                    required value="{{$products->product_name}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea name="description" id="" cols="30" rows="10"
                                                                    class="form-control" placeholder="Deskripsi Produk"
                                                                    required>{{$products->description}}</textarea>
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
                                <!-- Modal view products -->
                                <div class="modal fade" id="viewproducts{{$products->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewproducts{{$products->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$products->id}}">View data produk
                                                    {{$products->product_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama Produk: {{$products->product_name}} <br>
                                                        Deskripsi Produk: <br>{!!$products->description!!} <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3" class="text-center">No Data Founded!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            Kategori
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h2>On Development</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
