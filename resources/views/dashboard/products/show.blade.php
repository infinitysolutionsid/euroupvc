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
        {{-- Products Management --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Katalog Product Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewproducts">Tambah Katalog</button>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewproducts" tabindex="-1" role="dialog"
                            aria-labelledby="addnewproducts" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewproducts">Tambah Products</h5>
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
                                    <th>Katalog Produk</th>
                                    <th>Act.</th>
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

        {{-- Kategori Management --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Kategori Produk Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewkategori">Tambah kategori</button>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewkategori" tabindex="-1" role="dialog"
                            aria-labelledby="addnewkategori" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewkategori">Tambah Kategori Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="kategorinew" action="/admin/products/addnewkategori" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Kategori Produk"
                                                            name="nama_kategori" id="name" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <select name="product_id" id=""
                                                            class="form-control custom-select">
                                                            <option>Pilih produk induk</option>
                                                            @foreach ($productget as $productget)
                                                            <option value="{{$productget->id}}">
                                                                {{$productget->product_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea name="description" id="" cols="30" rows="10"
                                                            class="form-control" placeholder="Deskripsi Kategori Produk"
                                                            required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="kategorinew" class="btn btn-primary">Save
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
                                    <th>Kategori Produk</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$kategori->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($kategori as $kategori)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$kategori->nama_kategori}}</td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#viewkategori{{$kategori->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="" data-toggle="modal" data-target="#editkategori{{$kategori->id}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/kategori/trash/{{$kategori->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal view products -->
                                <div class="modal fade" id="viewkategori{{$kategori->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewkategori{{$kategori->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$kategori->id}}">View data kategori
                                                    {{$kategori->nama_kategori}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama Produk: {{$kategori->nama_kategori}} <br>
                                                        Kategori Induk Produk: {{$kategori->product_name}} <br>
                                                        Deskripsi Produk: <br>{!!$kategori->descriptionKat!!} <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal update products -->
                                <div class="modal fade" id="editkategori{{$kategori->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="editproducts{{$kategori->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editproducts{{$kategori->id}}">Update produk
                                                    {{$kategori->nama_kategori}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/products/update/{{$kategori->id}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Produk"
                                                                    name="nama_kategori" id="name" class="form-control"
                                                                    required value="{{$kategori->nama_kategori}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea name="description" id="" cols="30" rows="10"
                                                                    class="form-control" placeholder="Deskripsi Produk"
                                                                    required>{{$kategori->description}}</textarea>
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
    </div>

    {{-- Item produk --}}
    <div class="row">
        {{-- Item Produk Management --}}
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Item Produk Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewproduk">Tambah produk</button>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewproduk" tabindex="-1" role="dialog"
                            aria-labelledby="addnewproduk" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewproduk">Tambah Produk Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="productnew" action="/admin/products/addnewproduk" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Produk" name="nama_produk"
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
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$produk->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($produk as $produk)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$produk->nama_produk}}</td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#viewproducts{{$produk->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="" data-toggle="modal" data-target="#editproducts{{$produk->id}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/products/trash/{{$produk->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal update products -->
                                <div class="modal fade" id="editproducts{{$produk->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="editproducts{{$produk->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editproducts{{$produk->id}}">Update produk
                                                    {{$produk->nama_produk}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/products/update/{{$produk->id}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Produk"
                                                                    name="nama_produk" id="name" class="form-control"
                                                                    required value="{{$produk->nama_produk}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea name="description" id="" cols="30" rows="10"
                                                                    class="form-control" placeholder="Deskripsi Produk"
                                                                    required>{{$produk->description}}</textarea>
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
                                <div class="modal fade" id="viewproducts{{$produk->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewproducts{{$produk->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$produk->id}}">View data produk
                                                    {{$produk->nama_produk}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama Produk: {{$produk->nama_produk}} <br>
                                                        Deskripsi Produk: <br>{!!$produk->description!!} <br>
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
    </div>
</div>
@endsection
