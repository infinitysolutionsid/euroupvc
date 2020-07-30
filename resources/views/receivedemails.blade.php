@extends('welcome')
@section('titlepage','Congratulations! We received your messages! - Euro UPVC')
@section('deschomepage','')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-12 text-center">
                <img class="img-fluid imgmessages"
                    src="{!!asset('homepages/real-estate/images/undraw_mail_box_kd5i.svg')!!}" alt="Messages Received">
                <h3>Yeay! Pesan kamu sudah kami terima</h3>
                <p>Halo <strong>{{$name}}</strong>, kami telah menerima pesan kamu. Biasanya kami membalas dalam waktu
                    3x24 jam,<br>dan
                    kami akan segera membalas ke email anda maupun melalui nomor telepon yang sudah kamu
                    input.<br>Terima
                    kasih ya.</p>
            </div>
        </div>
    </div>
</section>
@endsection
