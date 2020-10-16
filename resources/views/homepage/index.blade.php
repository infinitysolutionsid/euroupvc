@extends('welcome')
@section('titlepage','Euro UPVC - The Best uPVC Quality, you can Trust.')
<?php $y = Date('Y'); ?>
@section('deschomepage','Beli UPVC terdekat di Medan dan di Jakarta berkualitas dengan harga murah terbaru '.$y.' di
euroupvc.co.id! Pembayaran mudah, pengiriman cepat, desain bisa custom!')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360" data-autoplay="3200" data-animate-in="fadeIn"
    data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
    <div class="slide" style="background-image:url('homepages/real-estate/images/5.jpg');">
        <div class="container">
            <div class="slide-captions">

                <h2 class="text-uppercase text-medium no-margin">Standard Europe<br>uPVC Profil</h2>
                <p class="lead">Produk yang berkualitas mengikuti<br> kualitas standard eropa. Memiliki <b>keunggulan
                        yang <br> lebih dari
                        6</b> menjadikan kami, selalu<br>unggul dalam hal uPVC.</p>

            </div>
        </div>
    </div>
    <div class="slide" style="background-image:url('homepages/real-estate/images/4.jpg');">
        <div class="container">
            <div class="slide-captions">
                <h3 class="text-uppercase text-medium">Perindah rumahmu <br>dengan upvc <br>
                    pilihan terbaik.
                </h3>
                <p class="lead">EuroUPVC memiliki motif yang beragam
                    <br> Sehingga kamu bisa memilih motif yang sesuai <br> dengan seleramu.</p>
            </div>
        </div>
    </div>
    <div class="slide" style="background-image:url('homepages/real-estate/images/3.jpg');">
        <div class="container">
            <div class="slide-captions">

                <h2 class="text-uppercase text-medium no-margin">Dynamic System <br> Designs</h2>
                <p class="lead">Kami memiliki <b>sistem yang flexible</b> dalam design
                    <br> Berikan refrensi design mu, dan kami <br>akan mencoba membuat seperti keinginanmu.</p>

            </div>
        </div>
    </div>
</div>

<section class="variouscolor">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading-text heading-section text-left">
                    <h2>Warna Bervariasi</h2>
                    <span class="lead">Untuk mengikuti perkembangan tren di era modern, kami menyediakan pilihan warna
                        yang bervariasi, sehingga memberi kenyamanan bagi customer.</span>
                </div>
            </div>
            <div class="col-lg-4 variouspall text-right">
                <img class="img-fluid" src="images/various.png" alt="Produk Euro UPVC Variasi Warna">
            </div>
        </div>
        <div class="row justify-content-center imgvarious m-t-50">
            @if(!$color->isEmpty())
            @foreach ($color as $color)
            <div class="col-lg-2 text-center">
                <a href="/product/details/color/{{$color->id}}">
                    <img src="{!!asset('media/product/color/'.$color->file_color)!!}"
                        alt="Warna variasi produk EURO uPVC - {{$color->color_name}}">
                    <h5>{{$color->color_name}}</h5>
                </a>
            </div>
            @endforeach
            @else
            <div class="col-lg-12 text-center">
                <h4>No data color founded!</h4>
            </div>
            @endif
        </div>
    </div>
</section>

<section class="p-t-150 p-b-100">
    <div class="container">
        <div class="col-lg-12 m-b-100 center">
            <div class="heading-text heading-section text-center">
                <h2>Apa yang menjadi keunggulan kami?</h2>
                <p>Kami memiliki banyak keunggulan yang terdapat pada produk uPVC kami.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><img src="{!!asset('images/kelebihan/profile.png')!!}" alt="Keunggulan Produk Euro uPVC"></a>
                    </div>
                    <h5>Profile Kuat</h5>
                    <p class="lead">Rangka profile yang diperkuat dengan besi galvanis.</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><i class="fas fa-lock"></i></a>
                    </div>
                    <h5>Multi Point Locking</h5>
                    <p class="lead">Sistem penguncian yang rapat dengan <strong>multi point locking</strong></p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><img src="{!!asset('images/kelebihan/kuat.png')!!}" alt="Keunggulan Produk Euro uPVC"></a>
                    </div>
                    <h5>Kuat, Kokoh, dan Tahan Lama</h5>
                    <p class="lead">uPVC yang memiliki daya kuat, daya yang kokoh dan tahan lama.</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><img src="{!!asset('images/kelebihan/eco.png')!!}" alt="Keunggulan Produk Euro uPVC"></a>
                    </div>
                    <h5>Ramah Lingkungan (Eco-Friendly)</h5>
                    <p class="lead">Produk yang ramah lingkungan yang dapat mengurangi pemakaian kayu untuk jendela &
                        pintu, dan membuat bumi lebih hijau.</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><img src="{!!asset('images/kelebihan/uv.png')!!}" alt="Keunggulan Produk Euro uPVC"></a>
                    </div>
                    <h5>UV Protection</h5>
                    <p class="lead">Mengandung pelindung sinar <i>Ultra Violet</i> (UV)</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><img src="{!!asset('images/kelebihan/cuaca.png')!!}" alt="Keunggulan Produk Euro uPVC"></a>
                    </div>
                    <h5>Weather Extreme Protection</h5>
                    <p class="lead">Tidak akan lapuk / keropos akibat air hujan yang asam / uap air laut.</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><i class="fas fa-temperature-high"></i></a>
                    </div>
                    <h5>Menjaga stabilitas suhu</h5>
                    <p class="lead">Menjaga stabilitas suhu dalam ruangan sehingga lebih hemat energi.</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><i class="fas fa-bug"></i></a>
                    </div>
                    <h5>Anti Rayap</h5>
                    <p class="lead">Menjaga ketahanan produk dengan bahan anti rayap.</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><i class="fas fa-volume-mute"></i></a>
                    </div>
                    <h5>Mengurangi kebisingan</h5>
                    <p class="lead">Memiliki rongga profil yang dapat mengatasi penambatan suara dari sisi luar ke sisi
                        dalam, dilengkapi dengan bahan yang lembut yang sangat baik untuk meredam suara.</p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="icon-box text-center effect border color">
                    <div class="icon">
                        <a><i class="fas fa-hand-holding-usd"></i></a>
                    </div>
                    <h5>Hemat biaya & Minim Perawatan</h5>
                    <p class="lead">Sudah lebih dari 10 tahun, uPVC kami bebas korosi & perubahan warna, sehingga tidak
                        memerlukan biaya dan perawatan berulang.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ourproduct">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="heading-text heading-section">
                    <h2>Katalog Produk Utama Kami</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 p-t-20 p-b-20">
                <a href="/catalog/door-system">
                    <img src="images/product/door.png" alt="Produk Katalog EURO uPVC - Door System">
                    <h4>Door System</h4>
                </a>
            </div>
            <div class="col-lg-3 p-t-20 p-b-20">
                <a href="/catalog/sliding-door-system">
                    <img src="images/product/sliding-door.png" alt="Produk Katalog EURO uPVC - Sliding Door System">
                    <h4>Sliding Door System</h4>
                </a>
            </div>
            <div class="col-lg-3 p-t-20 p-b-20">
                <a href="/catalog/window-system">
                    <img src="images/product/window.png" alt="Produk Katalog EURO uPVC - Window System">
                    <h4>Window System</h4>
                </a>
            </div>
            <div class="col-lg-3 p-t-20 p-b-20">
                <a href="/catalog/sliding-window-system">
                    <img src="images/product/sliding-window.png" alt="Produk Katalog EURO uPVC - Sliding Window System">
                    <h4>Sliding Window System</h4>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="p-b-0">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>Galeri Kami</h2>
            <span class="lead">Kami memastikan bahwa setiap projek yang kami kerjakan dapat dinilai sangat baik
                oleh client kami. Dan juga dapat dinilai layak untuk masuk ke dalam dokumentasi website
                kami.</span>
        </div>
    </div>

    <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0" data-lightbox="gallery">
        @if(!$galp->isEmpty())
        @foreach ($galp as $galp)
        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img class="img-fluid" src="{!!asset('media/gallery/'.$galp->img)!!}"
                            alt="Gallery EURO UPVC{{$galp->judul_foto}}"></a>
                </div>
                <div class="portfolio-description">
                    <a title="{{$galp->judul_foto}} - {{$galp->img}}" data-lightbox="gallery-image"
                        href="{!!asset('media/gallery/'.$galp->img)!!}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h4>No data founded</h4>
        @endif
    </div>

</section>
<div class="background-grey">
    <div class="container p-t-60 p-b-60">
        @if(session('great'))
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span> </button>
                    <strong><i class="fa fa-check-circle"></i> Success!</strong> {{session('great')}}
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-7">
                <h2 class="text-medium">Butuh saran untuk bagian UPVC dalam rumahmu?</h2>
                <p>Kami akan mengirimkan saran/proposal ke email kamu. <br>Hanya untukmu!</p>
            </div>
            <div class="col-lg-5 real-estate-form-container">
                <div class="real-estate-form">
                    <div class="text-dark p-40 background-white">
                        <h3 class="m-b-20">Isi Form</h3>
                        <form id="widget-contact-form-agent" class="form-gray-fields" action="/kirim-pesan" role="form"
                            method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" aria-required="true" name="name"
                                            class="form-control required name" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" name="email"
                                            class="form-control required email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="nohp">No HP</label>
                                        <input type="nohp" aria-required="true" name="nohp"
                                            class="form-control required email" placeholder="">
                                        <small class="text-muted">Masukkan dengan format +62812345****</small>
                                    </div>
                                    <input type="hidden" name="type" value="Request Penawaran">
                                    <input type="hidden" name="message"
                                        value="Hallo admin EURO UPVC, saya ingin meminta penawaran harga dan produk UPVC.">
                                    <div class="form-group">
                                        <button class="btn button border black rounded" type="submit"
                                            id="form-submit">Dapatkan penawaran!</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>Berita Terbaru dari Kami</h2>
        </div>
    </div>
    <div id="blog">
        <div class="container">
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                @if(!$blog->isEmpty())
                @foreach ($blog as $blog)
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="/blog/{{$blog->judul}}">
                                <img alt="Blog EURO UPVC{{$blog->judul}}"
                                    src="{!!asset('media/blog/'.$blog->coverimg)!!}">
                            </a>
                            <span class="post-meta-category"><a href="">{{$blog->kategori_produk}}</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i
                                    class="fa fa-calendar-o"></i>{{date('M d Y',strtotime($blog->created_at))}}</span>
                            <h2><a href="/blog/{{$blog->judul}}">{{$blog->judul}}
                                </a></h2>
                            <p>{!!str_limit($blog->isi, 100)!!}</p>
                            <a href="/blog/{{$blog->judul}}" class="item-link">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <h5>No data founded</h5>
                @endif
            </div>
        </div>
    </div>
</section>

<section id="section5">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>OUR PARTNERS</h2>
        </div>
        <ul class="grid grid-6-columns">
            @if(!$partner->isEmpty())
            @foreach ($partner as $partner)
            <li>
                <a><img src="{!!asset('media/partner/'.$partner->image)!!}"
                        alt="{{$partner->title}} &copy;euroupvc.co.id">
                </a>
            </li>
            @endforeach
            @else
            <div class="text-center">
                <h4>No data founded</h4>
            </div>
            @endif
        </ul>
    </div>
</section>
@endsection
