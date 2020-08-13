@extends('welcome')
@section('titlepage','Euro UPVC - Sliding Door System Catalog')
<?php $y = Date('Y'); ?>
@section('deschomepage','Katalog Sliding Door System milik Euro uPVC memiliki banyak kelebihan, salah satunya adalah
jaminan garansi yang memiliki rentang waktu garansi yang lama. Tunggu apa lagi? Langsung konsultasi dengan kami.')
@section('content')
<section id="page-title" class="page-title-left text-light"
    data-bg-parallax="{!!asset('images/katalog/sliding-door.jpg')!!}">
    <div class="container">
        <div class="page-title">
            <h1>Sliding Door System</h1>
        </div>
    </div>
</section>
<section class="p-b-0 p-t-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="heading-text heading-section text-left mt-3">
                    <h1 style="color:#cb2027">Katalog Pintu Geser</h1>
                    <p>
                        <br><br>
                        Ambil apa yang terlintas dalam pikiran Anda ketika Anda memikirkan pintu teras dan kesampingkan.
                        Dirancang untuk membuka ruang tempat Anda tinggal, desain pintu teras geser kami dapat
                        disesuaikan, serbaguna, dan bekerja sama baiknya sebagai solusi sempurna untuk proyek pengganti
                        Anda, tambahan baru, atau konstruksi rumah baru.
                        <br><br>
                        <strong>Memenuhi Standar Kinerja Tertinggi Industri</strong>
                        <br><br>
                        Diuji dengan standar paling ketat di industri, desain pintu Euro uPVC memiliki peringkat kinerja
                        tinggi untuk aplikasi pesisir dan akustik. Desain kami memenuhi standar struktur, udara dan air
                        AS2047. Semua profil putih Euro uPVC memiliki garansi terbatas 10 tahun untuk warna-cepat.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{!!asset('images/sliding-door/multi-slide.png')!!}"
                            alt="©copyright euroupvc materials 2020" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section text-left mt-3">
                            <h2 style="color: #cb2027">Multi-slide</h2>
                        </div>
                        <div class="elementtechnical">
                            <ul style="padding-left: 0px;">
                                <li>Glazing thickness up to 32 mm </li>
                                <li>Extension profiles for multi-track guide rail available<br /></li>
                                <li>Co-extruded gaskets<br /></li>
                                <li>Excellent structural values allow for large elements<br /></li>
                                <li>Aluminium threshold with integrated drain function<br /></li>
                                <li>Easy installation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading-text heading-section text-left mt-3">
                            <h2 style="color: #cb2027">Easy-slide</h2>
                        </div>
                        <div class="elementtechnical">
                            <ul style="padding-left: 0px;">
                                <li>Glazing thickness up to 20 mm</li>
                                <li>Delicate profile design</li>
                                <li>Exchangeable gaskets</li>
                                <li>Steel reinforcement can be integrated into both frame and sash to ensure excellent
                                    structural values</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{!!asset('images/sliding-door/single-slide.png')!!}"
                            alt="©copyright euroupvc materials 2020" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-b-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="heading-text heading-section text-left mt-3">
                    <h2 style="color:#cb2027">Sample Image of Sliding Door System</h2>
                </div>
            </div>
        </div>
        <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="30">
            @if(!$slidingdoor->isEmpty())
            @foreach ($slidingdoor as $slidingdoor)
            <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a><img src="{!!asset('media/gallery/'.$slidingdoor->img)!!}"
                                alt="Sample Image Sliding Door - Euro uPVC - {{$slidingdoor->judul_foto}}"></a>
                    </div>
                    <div class="portfolio-description">
                        <a title="Sample Image Sliding Door - Euro uPVC - {{$slidingdoor->judul_foto}}"
                            data-lightbox="image" href="{!!asset('media/gallery/'.$slidingdoor->img)!!}"><i
                                class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a>No data found</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<div style="background-image:url({!!asset('images/katalog/calltoac.png')!!})"
    class="call-to-action p-t-100 p-b-100 background-image mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="text-light">
                    Tertarik dengan produk pintu geser uPVC kami? Butuh konsultasi untuk mempercantik rumah anda?
                </h3>
                <p class="text-light">
                    Jangan ragu / segan untuk keperluan jendela ataupun pintu rumah anda. Kami tidak hanya memberikan
                    yang terbaik bagi anda, kami juga memberikan jaminan dan kekuatan untuk kenyamanan rumah anda.
                </p>
            </div>
            <div class="col-lg-4">
                <a href="https://api.whatsapp.com/send?phone=6282267673000&text=Halo%20Euro%20uPVC%2C%20saya%20tertarik%20dengan%20produk%20Sliding%20Door%20System%20uPVC%20milik%20Euro%20uPVC..%20Boleh%20ngobrol%3F"
                    class="btn btn-light btn-outline btn-block btn-lg">Hubungi Kami Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection
