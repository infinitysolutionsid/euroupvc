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
                                        {{ csrf_field() }}
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
                                                            class="form-control"
                                                            placeholder="Deskripsi Produk"></textarea>
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
                                            <form id="kategorinew" action="/admin/products/update/{{$products->id}}"
                                                method="POST">
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
                                                    <button form="kategorinew" type="submit"
                                                        class="btn btn-primary">Save changes</button>
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
                                    <form action="/admin/products/addnewkategorial" method="POST">
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
                                            <button type="submit" class="btn btn-primary">Save
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
                                    <th>Produk Induk</th>
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
                                    <td>{{$kategori->product_name}}</td>
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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Item Produk Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewitemproduk">Tambah item produk</button>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewitemproduk" tabindex="-1" role="dialog"
                            aria-labelledby="addnewitemproduk" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewitemproduk">Tambah Item Produk Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="productnew" action="/admin/products/addnewitemproduk"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Produk" name="nama_produk"
                                                            id="name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="katalog_id" class="custom-select form-control"
                                                            id="" required>
                                                            <option selected>Pilih katalog item produk:</option>
                                                            @foreach ($katalogItem as $kataIt)
                                                            <option value="{{$kataIt->id}}">{{$kataIt->product_name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="kategori_id" class="custom-select form-control"
                                                            id="" required>
                                                            <option selected>Pilih kategori item produk:</option>
                                                            @foreach ($kategoriItem as $katIt)
                                                            <option value="{{$katIt->id}}">{{$katIt->nama_kategori}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <small class="muted-text">Masukkan gambar pertama:</small>
                                                        <input type="file" name="fileimg" class="form-control" id="">
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
                                            <button form="productnew" type="submit" class="btn btn-primary">Save
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
                                    <th style="width: 100px;">Preview Item</th>
                                    <th>Nama Item</th>
                                    <th>Kategori</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$itemproduk->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($itemproduk as $itemproduk)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td><img src="{!!asset('media/product/item/'.$itemproduk->fileimg)!!}"
                                            alt="{!!$itemproduk->nama_item!!}" class="imgprev"></td>
                                    <td>{{$itemproduk->nama_item}}</td>
                                    <td>{{$itemproduk->nama_kategori}}</td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#viewproducts{{$itemproduk->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="" data-toggle="modal" data-target="#editproducts{{$itemproduk->id}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/products/itemtrash/{{$itemproduk->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal update products -->
                                <div class="modal fade" id="editproducts{{$itemproduk->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="editproducts{{$itemproduk->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editproducts{{$itemproduk->id}}">Update
                                                    produk
                                                    {{$itemproduk->nama_item}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/products/update/{{$itemproduk->id}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Produk"
                                                                    name="nama_item" id="name" class="form-control"
                                                                    required value="{{$itemproduk->nama_item}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea name="description" id="" cols="30" rows="10"
                                                                    class="form-control" placeholder="Deskripsi Produk"
                                                                    required>{{$itemproduk->description}}</textarea>
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
                                <div class="modal fade" id="viewproducts{{$itemproduk->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewproducts{{$itemproduk->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$itemproduk->id}}">View data produk
                                                    {{$itemproduk->nama_item}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama Produk: {{$itemproduk->nama_item}} <br>
                                                        Deskripsi Produk: <br>{!!$itemproduk->description!!} <br>
                                                    </p>
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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Color Product Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewcolor">Tambah Warna</button>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewcolor" tabindex="-1" role="dialog"
                            aria-labelledby="addnewcolor" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewcolor">Tambah Warna Kategori Produk</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/admin/products/addnewcolor" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Warna Produknya"
                                                            name="color_name" id="name" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="co">
                                                    <div class="form-group">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="file" name="file_color"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save
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
                                    <th>Informasi Warna</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$color->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($color as $color)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>
                                        <img class="colordashboard"
                                            src="{!!asset('media/product/color/'.$color->file_color)!!}"
                                            alt="{!!$color->color_name!!}">
                                        <strong>{{$color->color_name}}</strong>
                                    </td>
                                    <td>
                                        <a href="/admin/products/trashcolor/{{$color->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal view products -->
                                <div class="modal fade" id="viewcolor{{$color->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewcolor{{$color->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$color->id}}">View data warna produk
                                                    {{$color->color_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>

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
