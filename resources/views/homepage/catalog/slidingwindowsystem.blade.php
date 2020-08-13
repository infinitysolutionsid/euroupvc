@extends('welcome')
@section('titlepage','Euro UPVC - Sliding Window System Catalog')
<?php $y = Date('Y'); ?>
@section('deschomepage','Katalog Sliding Window System milik Euro uPVC memiliki banyak kelebihan, salah satunya adalah
jaminan garansi yang memiliki rentang waktu garansi yang lama. Tunggu apa lagi? Langsung konsultasi dengan kami.')
@section('content')
<section id="page-title" class="page-title-left text-light"
    data-bg-parallax="{!!asset('images/katalog/sliding-window-1.jpg')!!}">
    <div class="container">
        <div class="page-title">
            <h1>Sliding Window System</h1>
        </div>
    </div>
</section>
<section class="p-b-0 p-t-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="heading-text heading-section text-left mt-3">
                    <h1 style="color:#cb2027">Sliding Window Catalog</h1>
                    <p>Dengan menggabungkan ambang yang terisolasi secara termal dengan jenis baja khusus Euro uPVC
                        telah berhasil mencapai insulasi panas yang luar biasa dan nilai struktur yang kuat. <br><br>
                        Sistem
                        jendela Euro uPVC menawarkan kualitas kelas tinggi dengan masa pakai yang lama.</p>
                </div>
            </div>
            <div class="col-lg-5"> <img class="img-fluid" src="{!!asset('images/katalog/sliding-window-kat.png')!!}">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="heading-text heading-section text-left mt-5">
                    <h1 style="color:#cb2027">Gaya, Performa, dan Fungsi</h1>
                    <p class="text-justify">
                        Kenyamanan dan keamanan rumah lebih dari sekedar atap yang kuat dan dinding yang kokoh. Desain
                        yang tepat dan jendela & pintu yang terpasang dapat membuat perbedaan besar pada rumah tidak
                        hanya secara estetika tetapi juga untuk membawa banyak lampu, sirkulasi udara yang cukup,
                        isolasi dan keamanan termal dan suara yang efektif.
                        <br><br>
                        Euro uPVC menawarkan desain jendela modern terbaru, menggabungkan kecerdikan teknologi dengan
                        estetika dan gaya kelas atas. Hasilnya adalah jendela yang merupakan perpaduan sempurna antara
                        bentuk dan fungsi.
                        <br><br>
                        Semua sistem jendela kami diproduksi dan dirancang di Jerman, memberikan Anda yang terbaik dalam
                        perlengkapan dan aksesori kelas atas yang memenuhi tantangan arsitektur modern.
                        <br><br>
                        Masing-masing dilengkapi dengan sistem perlindungan kebisingan yang dirancang khusus untuk
                        mengurangi transmisi suara dari luar. Brush seal dan profil jendela multi-ruang secara efektif
                        menyaring suara eksterior sehingga Anda dapat menikmati kedamaian dan ketenangan. Jendela kami
                        melindungi interior dari suara hingga 40dB - ini melebihi tingkat kedap suara yang disarankan
                        yaitu 30dB untuk area perumahan.
                        <br><br>
                        Jendela Euro uPVC memiliki kapasitas beban angin yang tinggi, memastikan angin kencang dan kedap
                        air
                        bahkan dalam kondisi cuaca buruk. Hal ini membuat sistem jendela kami menjadi penghalang hujan
                        dan angin yang ideal yang dapat bertahan hingga topan skala Beaufort 12.
                        <br><br>
                        Desain jendela uPVC berperforma tinggi dari Euro uPVC indah, tahan lama, dan mudah dirawat.
                        Mereka
                        meminjamkan elemen gaya yang dilengkapi dengan fungsionalitas untuk solusi yang sesuai dengan
                        kebutuhan dan harapan pemilik rumah yang paling menuntut dari jendela mereka.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="background-grey p-b-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="heading-text heading-section text-left mt-3">
                    <h1 style="color:#cb2027">Technical Details</h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="elementtechnical">
                                <ul style="padding-left: 0px;">
                                    <li>70 mm construction depth<br /></li>
                                    <li>U<span class="lowerCase">f</span>=1.2 W/m²K<br /></li>
                                    <li>U<span class="lowerCase">w</span>=0.93 W/m²K with standard-triple-glazing with
                                        U<span class="lowerCase">g</span>=0.7 and Psi=0.040 W/mK<br /></li>
                                    <li>U<span class="lowerCase">w</span>=0.71 W/m²K best possible option with triple
                                        glazing with U<span class="lowerCase">g</span>=0.4 and Psi=0.030 W/mK<br /></li>
                                    <li>powerdur inside (fibre-reinforced uPVC profiles) <br /></li>
                                    <li>bonding inside (bonding technology)<br /></li>
                                    <li>Up to RC2 burglary protection<br /></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="elementtechnical">
                                <ul style="padding-left: 0px;">
                                    <li>Up to 45 dB sound insulation (sound insulation class 4)<br /></li>
                                    <li>Up to 41 mm glazing<br /></li>
                                    <li>Wide range of lamination options<br /></li>
                                    <li>Available with aluskin® aluminium shells (wide array of colours)<br /></li>
                                    <li>Recessed version<br /></li>
                                    <li>6-chamber-profile<br /></li>
                                    <li>Concealed drainage is possible<br /></li>
                                    <li>Optional foam inside (foam-filled profile)<br /></li>
                                </ul>
                            </div>
                        </div>
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
                    <h2 style="color:#cb2027">Sample Image of Sliding Window System</h2>
                </div>
            </div>
        </div>
        <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="30">
            @if(!$slidingwin->isEmpty())
            @foreach ($slidingwin as $slidingwin)
            <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a><img src="{!!asset('media/gallery/'.$slidingwin->img)!!}"
                                alt="Sample Image Sliding Window - Euro uPVC - {{$slidingwin->judul_foto}}"></a>
                    </div>
                    <div class="portfolio-description">
                        <a title="Sample Image Sliding Window - Euro uPVC - {{$slidingwin->judul_foto}}"
                            data-lightbox="image" href="{!!asset('media/gallery/'.$slidingwin->img)!!}"><i
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
                    Tertarik dengan produk jendela geser uPVC kami? Butuh konsultasi untuk mempercantik rumah anda?
                </h3>
                <p class="text-light">
                    Jangan ragu / segan untuk keperluan jendela ataupun pintu rumah anda. Kami tidak hanya memberikan
                    yang terbaik bagi anda, kami juga memberikan jaminan dan kekuatan untuk kenyamanan rumah anda.
                </p>
            </div>
            <div class="col-lg-4">
                <a href="https://api.whatsapp.com/send?phone=6282267673000&text=Halo%20Euro%20uPVC%2C%20saya%20tertarik%20dengan%20produk%20Sliding%20Window%20System%20uPVC%20milik%20Euro%20uPVC..%20Boleh%20ngobrol%3F"
                    class="btn btn-light btn-outline btn-block btn-lg">Hubungi Kami Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection
