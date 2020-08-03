@extends('welcome')
@section('titlepage','Euro UPVC - Projects')
<?php $y = Date('Y'); ?>
@section('deschomepage','Semua proyek upvc yang pernah dikerjakan oleh CV. EURO UPVC dikumpulkan di dalam arsip website
euroupvc.co.id.')
@section('content')
<section id="page-content">
    <div class="container">


        <div class="page-title m-t-30">
            <h1>Euro UPVC - Projects</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active"><a href="/projects">Projects</a>
                    </li>
                </ul>
            </div>
        </div>


        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @if(!$blog->isEmpty())
            @foreach ($blog as $blogs)
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="/blog/{{$blogs->judul}}">
                            <img alt="Projects EURO UPVC{{$blogs->judul}}"
                                src="{!!asset('media/blog/'.$blogs->coverimg)!!}">
                        </a>
                        <span class="post-meta-category"><a href="">{{$blogs->Kategori_produk}}</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i
                                class="fa fa-calendar-o"></i>{{date('M d Y',strtotime($blogs->created_at))}}</span>
                        <h2><a href="/blog/{{$blogs->judul}}">{{$blogs->judul}}
                            </a></h2>
                        <p>{!!str_limit($blogs->isi, 100)!!}</p>
                        <a href="/blog/{{$blogs->judul}}" class="item-link">Read More <i
                                class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

            @else
            <h4>No data founded</h4>
            @endif
        </div>


        <ul class="pagination">
            {{$blog->links()}}
        </ul>

    </div>

</section>
@endsection
