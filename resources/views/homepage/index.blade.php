@extends('welcome')
@section('titlepage','Euro UPVC - Your trusted & Best UPVC Quality Product')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360" data-autoplay="3200" data-animate-in="fadeIn"
    data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
    <div class="slide" style="background-image:url('homepages/real-estate/images/1.jpg');">
        <div class="container">
            <div class="slide-captions">
                <h3 class="text-uppercase text-medium">Percantik rumahmu <br>dengan upvc <br>
                    pilihan terbaik.
                </h3>
                <p class="lead">EuroUPVC memiliki motif yang beragam
                    <br> Sehingga kamu bisa memilih motif yang sesuai <br> dengan seleramu.</p>
            </div>
        </div>
    </div>
    <div class="slide" style="background-image:url('homepages/real-estate/images/2.jpg');">
        <div class="container">
            <div class="slide-captions">

                <h2 class="text-uppercase text-medium no-margin">Dynamic System <br> Designs</h2>
                <p class="lead">Kami memiliki <b>sistem yang flexible</b> dalam design
                    <br> Berikan refrensi design mu, dan kami <br>akan mencoba membuat seperti keinginanmu.</p>

            </div>
        </div>
    </div>
</div>
<div class="background-grey">
    <div class="container p-t-60 p-b-60">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="text-medium">Butuh saran untuk bagian UPVC dalam rumahmu?</h2>
                <p>Kami akan mengirimkan saran/proposal ke email kamu. <br>Hanya untukmu!</p>
            </div>
            <div class="col-lg-5 real-estate-form-container">
                <div class="real-estate-form">
                    <div class="text-dark p-40 background-white">
                        <h3 class="m-b-20">Isi Form</h3>
                        <form id="widget-contact-form-agent" class="form-gray-fields" action="#" role="form"
                            method="post">
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
                                        <input type="nohp" aria-required="true" name="nohop"
                                            class="form-control required email" placeholder="">
                                    </div>
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


<section id="section2" class="p-t-100">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>Fitur Terbaik UPVC Kami.</h2>
            <span class="lead">Kamu tidak akan kecewa akan kualitas produk kami.</span>
        </div>
        <div class="row">
            <section id="fiturss" class="no-padding equalize" data-equalize-item=".text-box">
                <div class="row col-no-margin">
                    <div class="col-lg-4">
                        <div class="text-box hover-effect" style="height: 330px;">
                            <a href="#"> <i class="fas fa-dumbbell"></i>
                                <h3>Kekuatan</h3>
                                <p>Pengelasan sudut dapat menahan tekanan sebesar 400 Newton. Kokoh dan tahan
                                    lama.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-box hover-effect" style="height: 330px;">
                            <a href="#"><span><i class="fas fa-volume-mute"></i></span>
                                <h3>Noise Cancelling</h3>
                                <p>Rongga rongga profil merupakan desain baik untuk mengatasi penambatan suara
                                    dari sisi luar ke sisi dalam. Menggunakan bahan yang lembut dan dapat
                                    menyerap suara.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-box hover-effect" style="height: 330px;">
                            <a href="#"> <i class="fas fa-tree"></i>
                                <h3>Bebas Perawatan</h3>
                                <p>Bahan uPVC kami tidak memerlukan perawatan untuk seumur hidup.</p>
                            </a>
                        </div>
                    </div>
                    {{-- Row 2 --}}
                    <div class="col-lg-4">
                        <div class="text-box hover-effect" style="height: 330px;">
                            <a href="#"> <i class="fas fa-leaf"></i>
                                <h3>Hemat Energi </h3>
                                <p>Menjamin bahwa bahan kami merupakan bahan yang membuat insulasi terhadap
                                    panas & suara sehingga hemat energi.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-box hover-effect" style="height: 330px;">
                            <a href="#"> <i class="fas fa-hand-holding-usd"></i>
                                <h3>Menghemat Biaya </h3>
                                <p>Terjamin lebih dari 10 tahun tanpa terjadi korosi & perubahan warna, sehingga
                                    menghemat biaya renovasi.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-box hover-effect" style="height: 330px;">
                            <a href="#"> <i class="fas fa-drafting-compass"></i>
                                <h3>Design Elegant & Flexibel</h3>
                                <p>Penampilan yang anggun, dan dibuat sesuai dengan desain dan arsitektur yang
                                    diinginkan.</p>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
            <!-- end: Boxes -->
        </div>
    </div>
</section>
<section class="variouscolor">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading-text heading-section text-left">
                    <h2>Warna Bervariasi</h2>
                    <span class="lead">Kami sadar bahwa client kami sangat mencintai banyak motif dengan itu
                        kami
                        memproduksi produk kami dengan banyak variasi warna.</span>
                </div>
            </div>
            <div class="col-lg-4 variouspall text-right">
                <img class="img-fluid" src="images/various.png" alt="">
            </div>
        </div>
        <div class="row justify-content-center imgvarious m-t-50">
            <div class="col-lg-2 text-center">
                <img src="images/material/black.png" alt="">
                <h4>Black</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/darkbrown.png" alt="">
                <h4>Dark Brown</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/darkoak.png" alt="">
                <h4>Dark Oak</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/goldenoak.png" alt="">
                <h4>Golden Oak</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/grey.png" alt="">
                <h4>Grey</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/lblack.png" alt="">
                <h4>Laminated Black</h4>
            </div>
        </div>
        <div class="row justify-content-center m-t-50 imgvarious">
            <div class="col-lg-2 text-center">
                <img src="images/material/mahogani.png" alt="">
                <h4>Mahogani</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/naturaloak.png" alt="">
                <h4>Natural Oak</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/vintageoak.png" alt="">
                <h4>Vintage Oak</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/wallnut.png" alt="">
                <h4>Wallnut</h4>
            </div>
            <div class="col-lg-2 text-center">
                <img src="images/material/white.png" alt="">
                <h4>White</h4>
            </div>
        </div>
    </div>
</section>
<section class="ourproduct">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="heading-text heading-section">
                    <h2>Produk Kami</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-4">
                <img src="images/product/window.png" alt="">
                <h4>Window System</h4>
            </div>
            <div class="col-lg-4">
                <img src="images/product/door.png" alt="">
                <h4>Door System</h4>
            </div>
            <div class="col-lg-4">
                <img src="images/product/sliding-door.png" alt="">
                <h4>Sliding Door System</h4>
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

        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="homepages/real-estate/images/gallery/1.jpg" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Projek Di Jalan Bilal" data-lightbox="gallery-image"
                        href="homepages/real-estate/images/gallery/1.jpg" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="homepages/real-estate/images/gallery/2.jpg" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Projek Bhayangkara" data-lightbox="gallery-image"
                        href="homepages/real-estate/images/gallery/2.jpg" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="homepages/real-estate/images/gallery/3.jpg" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Projek Gubernur Lantai 2" data-lightbox="gallery-image"
                        href="homepages/real-estate/images/gallery/3.jpg" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="homepages/real-estate/images/gallery/4.jpg" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Projek Rumah Walikota" data-lightbox="gallery-image"
                        href="homepages/real-estate/images/gallery/4.jpg" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="homepages/real-estate/images/gallery/5.jpg" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Projek Rumah Warga" data-lightbox="gallery-image"
                        href="homepages/real-estate/images/gallery/5.jpg" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="homepages/real-estate/images/gallery/6.png" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Projek KFC" data-lightbox="gallery-image"
                        href="homepages/real-estate/images/gallery/6.png" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>


        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="homepages/real-estate/images/gallery/7.jpg" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Projek Starbucks" data-lightbox="gallery-image"
                        href="homepages/real-estate/images/gallery/7.jpg" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
    </div>

</section>

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
                            <a href="#">
                                <img alt="" src="{!!asset('media/blog/'.$blog->coverimg)!!}">
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
        <ul class="grid grid-4-columns">
            <li>
                <a href="#"><img src="images/clients/1.png" alt="Zplast Zhongcai Group Logo">
                </a>
            </li>
            <li>
                <a href="#"><img src="images/clients/2.png" alt="Dimex German UPVC Logo">
                </a>
            </li>
            <li>
                <a href="#"><img src="images/clients/3.png" alt="CHUGN Logo">
                </a>
            </li>
            <li>
                <a href="#"><img src="images/clients/4.png" alt="Roto Logo">
                </a>
            </li>
            <li>
                <a href="#"><img src="images/clients/5.png" alt="PWS Logo">
                </a>
            </li>
            <li>
                <a href="#"><img src="images/clients/6.png" alt="Hanwha Logo">
                </a>
            </li>
            <li>
                <a href="#"><img src="images/clients/7.png" alt="LG Hausys Logo">
                </a>
            </li>
            <li>
                <a href="#"><img src="images/clients/8.png" alt="Better Logo">
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection
