@extends('welcome')
@section('titlepage','Euro UPVC - Our Gallery')
<?php $y = Date('Y'); ?>
@section('deschomepage','Dokumentasi dokumentasi kerja kami, akan kami selalu arsipkan di situs euroupvc.co.id kami.
Silahkan dilihat lihat galeri kami ya.')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="page-title m-t-30">
            <h1>Euro UPVC - Our Gallery</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active"><a href="/gallerry">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="page-content">
    <div class="container">

        <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            @if(!$gallery->isEmpty())
            @foreach ($gallery as $item)
            <div class="grid-item">
                <a class="image-hover-zoom" href="{!!asset('media/gallery/'.$item->img)!!}"
                    data-lightbox="gallery-image"><img src="{!!asset('media/gallery/'.$item->img)!!}"></a>
            </div>
            @endforeach
            @else
            <h3>no data founded!</h3>
            @endif
        </div>

    </div>
</section>
@endsection
