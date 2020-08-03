@extends('welcome')
@section('titlepage','Euro UPVC - '.$blog->judul)
<?php $y = Date('Y'); ?>
@section('deschomepage','Proyek upvc yang pernah kami kerjakan, akan selalu kami arsipkan di euroupvc.co.id.
Yuk intip projek '.$blog->judul.'.')
@section('content')
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content col-lg-8">
                <div id="blog" class="single-post">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <img alt="Blog EURO UPVC{{$blog->judul}}"
                                    src="{!!asset('media/blog/'.$blog->coverimg)!!}">
                            </div>
                            <div class="post-item-description">
                                <h2>{{$blog->judul}}</h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i
                                            class="fa fa-calendar-o"></i>{{date('M d Y',strtotime($blog->created_at))}}</span>
                                    <span class="post-meta-category"><a href=""><i
                                                class="fa fa-tag"></i>{{$blog->kategori_produk}}</a></span>
                                    <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                                <p>{!!$blog->isi!!}</p>
                            </div>
                            <div class="post-tags">
                                <a href="#">{{$blog->kategori_produk}}</a>
                            </div>
                            {{-- <div class="post-navigation">
                                <a href="blog-single-slider.html" class="post-prev">
                                    <div class="post-prev-title"><span>Previous Post</span>Post with a slider and
                                        lightbox</div>
                                </a>
                                <a href="blog-masonry-3.html" class="post-all">
                                    <i class="icon-grid"> </i>
                                </a>
                                <a href="blog-single-video.html" class="post-next">
                                    <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
                                </a>
                            </div> --}}

                            {{-- COMMENT SECTION --}}
                            {{-- <div class="comments" id="comments">
                                <div class="comment_number">
                                    Comments
                                </div>
                                <div class="comment-list">

                                    <div class="comment" id="comment-1">

                                        <div class="text">
                                            <h5 class="name">John Doe</h5>
                                            <span class="comment_date">Posted at 15:32h, 06 December</span>
                                            <a class="comment-reply-link" href="#">Reply</a>
                                            <div class="text_holder">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was popularised in the 1960s
                                                    with the release of Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software like Aldus
                                                    PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>

                                        <div class="comment" id="comment-1-1">

                                            <div class="text">
                                                <h5 class="name">John Doe</h5>
                                                <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <div class="text_holder">
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="comment" id="comment-1-2">

                                            <div class="text">
                                                <h5 class="name">John Doe</h5>
                                                <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <div class="text_holder">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you need to be sure there isn't anything embarrassing
                                                        hidden in the middle of text. </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="comment" id="comment-2">

                                        <div class="text">
                                            <h5 class="name">John Doe</h5>
                                            <span class="comment_date">Posted at 15:32h, 06 December</span>
                                            <a class="comment-reply-link" href="#">Reply</a>
                                            <div class="text_holder">
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                                    below for those interested. Sections 1.10.32 and 1.10.33 from "de
                                                    Finibus Bonorum et Malorum" by Cicero are also reproduced in their
                                                    exact original form, accompanied by English versions from the 1914
                                                    translation by H. Rackham.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="respond-form" id="respond">
                                <div class="respond-comment">
                                    Leave a <span>Comment</span></div>
                                <form class="form-gray-fields">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="upper" for="name">Name</label>
                                                <input class="form-control required" name="senderName"
                                                    placeholder="Enter name" id="name" aria-required="true" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="upper" for="email">Email</label>
                                                <input class="form-control required email" name="senderEmail"
                                                    placeholder="Enter email" id="email" aria-required="true"
                                                    type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="upper" for="comment">Your comment</label>
                                                <textarea class="form-control required" name="comment" rows="9"
                                                    placeholder="Enter comment" id="comment"
                                                    aria-required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group text-center">
                                                <button class="btn" type="submit">Submit Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>


            <div class="sidebar sticky-sidebar col-lg-4">
                <div class="widget">
                    <div class="tabs">
                        <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab"
                                    aria-controls="popular" aria-selected="true">Recent Blog</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabs-posts-content">
                            <div class="tab-pane fade show active" id="popular" role="tabpanel"
                                aria-labelledby="popular-tab">
                                <div class="post-thumbnail-list">
                                    @foreach ($blogcollection as $blogcollection)
                                    <div class="post-thumbnail-entry">
                                        <img alt="Blog EURO UPVC{{$blogcollection->judul}}"
                                            src="{!!asset('media/blog/'.$blogcollection->coverimg)!!}">
                                        <div class="post-thumbnail-content">
                                            <a href="/blog/{{$blogcollection->judul}}">{{$blogcollection->judul}}</a>
                                            <span class="post-date"><i class="icon-clock"></i>
                                                {{Carbon\Carbon::parse($blogcollection->created_at)->diffForHumans()}}</span>
                                            <span class="post-category"><i class="fa fa-tag"></i>
                                                {{$blogcollection->kategori_produk}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget  widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        @foreach ($kategori as $kategori)
                        <a href="#">{{$kategori->product_name}}</a>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
