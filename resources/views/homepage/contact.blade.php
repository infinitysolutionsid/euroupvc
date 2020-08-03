@extends('welcome')
@section('titlepage','Euro UPVC - Contact Us')
<?php $y = Date('Y'); ?>
@section('deschomepage','Ayo konsultusi untuk upvc di rumah idaman kamu. Jangan ragu. Konsultasi sekarang juga, hubungi
euroupvc.co.id.')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="page-title m-t-30">
            <h1>Euro UPVC - Contact Us</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active"><a href="/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="m-b-20" style="padding:0 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-uppercase">Address & Map</h3>
                <div class="row">
                    <div class="col-lg-4 m-b-30">
                        <address>
                            <strong>Showroom:</strong><br>
                            Jl Gatot Subroto No.106 <br>
                            at Plaza Bangunan Home Smart <br>
                            Medan - Sumatera Utara 20114 <br>
                        </address>
                        <strong>Phone:</strong> <a href="https://api.whatsapp.com/send?phone=6282267673000">(+62) 822
                            6767 3000</a>
                        <br>
                        <strong>Email:</strong> <a href="mailto:info@euroupvc.co.id">info@euroupvc.co.id</a>
                    </div>
                    <div class="col-lg-4 m-b-30">
                        <address>
                            Jl Ringroad, Jl. Setia Budi Blk. II No.99s <br>
                            at Home Centra <br>
                            Medan - Sumatera Utara 20122 <br>
                        </address>
                        <strong>Phone:</strong> <a href="https://api.whatsapp.com/send?phone=6282267673000">(+62) 822
                            6767 3000</a>
                        <br>
                        <strong>Email:</strong> <a href="mailto:info@euroupvc.co.id">info@euroupvc.co.id</a>
                    </div>
                    <div class="col-lg-4 m-b-30">
                        <address>
                            <strong>Pabrik:</strong><br>
                            Jln. K.L Yos Sudarso, km 7,9 No.24 <br>
                            Tanjung Mulia Hilir, Medan Deli
                            Medan - Sumatera Utara 20242 <br>
                        </address>
                        <strong>Phone:</strong> (+62) 6180032105
                        <br>
                        <strong>Phone:</strong> (+62) 6180032106
                        <br>
                        <strong>Email:</strong> <a href="mailto:info@euroupvc.co.id">info@euroupvc.co.id</a>
                    </div>
                    {{-- <div class="col-lg-6">
                        <address>
                            <strong>Polo Office</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div> --}}
                </div>

                <div class="map" data-latitude="3.5905828" data-longitude="98.6519925" data-style="light"
                    data-info="Hello from &lt;br&gt; Euro UPVC"></div>

            </div>
        </div>
    </div>
</section>
@endsection
