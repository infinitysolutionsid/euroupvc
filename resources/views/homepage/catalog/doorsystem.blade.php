@extends('welcome')
@section('titlepage','Euro UPVC - Door System Catalog')
<?php $y = Date('Y'); ?>
@section('deschomepage','Door System Euro uPVC')
@section('content')
<section id="page-title" class="page-title-left text-light" data-bg-parallax="{!!asset('images/katalog/door.jpg')!!}">
    <div class="container">
        <div class="page-title">
            <h1>Door System</h1>
        </div>
    </div>
</section>
<section class="p-b-0 p-t-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading-text heading-section text-left mt-3">
                    <h1 style="color:#cb2027">Katalog Pintu</h1>
                    <p>Dengan menggabungkan ambang yang terisolasi secara termal dengan jenis baja khusus Euro uPVC
                        telah berhasil mencapai insulasi panas yang luar biasa dan nilai struktur yang kuat. <br><br>
                        Sistem
                        pintu Euro uPVC menawarkan kualitas kelas tinggi dengan masa pakai yang lama.</p>
                </div>
            </div>
            <div class="col-lg-6"> <img class="img-fluid" src="{!!asset('images/katalog/70mm-door-system.png')!!}">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="heading-text heading-section text-left mt-5">
                    <h1 style="color:#cb2027">Gaya, Performa, dan Fungsi</h1>
                    <p class="text-justify">
                        Kami percaya pilihan pintu Anda adalah keputusan yang sama pentingnya saat merencanakan proyek
                        perumahan.
                        Pemilik rumah yang cerdas menginginkan pintu yang indah, tahan lama, dan hemat energi. Dan, saat
                        kita menjadi lebih sadar akan tanggung jawab kita untuk melindungi lingkungan, pintu yang dibuat
                        dengan bahan yang ramah lingkungan lebih sering menempati urutan teratas daripada yang tidak.
                        Desain pintu Euro uPVC memenuhi semua kriteria ini sekaligus menawarkan berbagai gaya dan
                        fungsi.
                        <br><br>
                        Pintu Euro uPVC dipasok melalui jaringan perakit dan pemasang terlatih, memastikan bahwa
                        Anda
                        mendapatkan layanan dari perusahaan lokal bersertifikat berkualitas yang didukung oleh
                        sumber
                        daya perusahaan global.
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
                                <ul>
                                    <li>62 mm construction depth<br /></li>
                                    <li>U<span class="lowerCase">f</span>=1.5 W/m²K<br /></li>
                                    <li>U<span class="lowerCase">d</span>=1.1 W/m²K with standard-triple-glazing with
                                        U<span class="lowerCase">g</span>=0.7 and Psi=0.040 W/mK<br /></li>
                                    <li>U<span class="lowerCase">d</span>=0.88 best option with triple glazing with
                                        U<span class="lowerCase">g</span>=0.4 and Psi=0.030 W/mK<br /></li>
                                    <li>U<span class="lowerCase">d</span>=0.82 W/m²K best possible option with panel
                                        with U<span class="lowerCase">p</span>=0.4 and (Psi=0.000 W/mK)</li>
                                    <li>Up to RC2 burglary protection</li>
                                    <li>Optimum protection thanks to high quality and safety standards<br /></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="elementtechnical">
                                <ul>
                                    <li>Use of special security hardware<br />guarantees outstanding burglary protection
                                    </li>
                                    <li>Weldable corner connectors for extra stability<br /></li>
                                    <li>Up to 41 mm glazing / panel<br /></li>
                                    <li>Wide range of lamination options<br /></li>
                                    <li>Available with aluskin® aluminium shells (wide array of colours)<br /></li>
                                    <li>Recessed version, roundline version<br /></li>
                                    <li>5-chamber-profile<br /></li>
                                    <li>Concealed drainage is possible<br /></li>
                                    <li>Optional leaf-enclosing filling<br /></li>
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
                    <h1 style="color:#cb2027">Our Door Product</h1>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <a href="/product/details/swing-doors">
                    <div class="widget text-center border-box p-cb">
                        <img src="{!!asset('images/subkategori/swing-doors.png')!!}" alt="Swing doors catalog Euro uPVC"
                            class="img-fluid">
                        <h3>Swing Doors</h3>

                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/product/details/sliding-doors">
                    <div class="widget text-center border-box p-cb">
                        <img src="{!!asset('images/subkategori/sliding-door.png')!!}"
                            alt="Sliding doors catalog Euro uPVC" class="img-fluid">
                        <h3>Sliding Doors</h3>

                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/product/details/folding-doors">
                    <div class="widget text-center border-box p-cb">
                        <img src="{!!asset('images/subkategori/folding-door.png')!!}"
                            alt="Folding doors catalog Euro uPVC" class="img-fluid">
                        <h3>Folding Doors</h3>

                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
