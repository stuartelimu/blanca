@extends('layouts.base')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="swiper-container hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-content flex justify-content-center align-items-center flex-column">
                            <img src="images/slider.jpg" alt="">
                        </div><!-- .hero-content -->
                    </div><!-- .swiper-slide -->

                    <div class="swiper-slide">
                        <div class="hero-content flex justify-content-center align-items-center flex-column">
                            <img src="images/slider.jpg" alt="">
                        </div><!-- .hero-content -->
                    </div><!-- .swiper-slide -->

                    <div class="swiper-slide">
                        <div class="hero-content flex justify-content-center align-items-center flex-column">
                            <img src="images/slider.jpg" alt="">
                        </div><!-- .hero-content -->
                    </div><!-- .swiper-slide -->
                </div><!-- .swiper-wrapper -->

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next flex justify-content-center align-items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></path></svg></span>
                </div>
                <div class="swiper-button-prev flex justify-content-center align-items-center">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></path></svg></span>
                </div>
            </div><!-- .swiper-container -->
        </div><!-- .col -->
    </div><!-- .row -->

    <div class="container">
        <div class="row">
            <div class="offset-lg-9 col-12 col-lg-3">
                <a href="#">
                    <div class="yt-subscribe">
                        <img src="images/yt-subscribe.png" alt="Youtube Subscribe">
                        <h3>Subscribe</h3>
                        <p>To my Youtube Channel</p>
                    </div><!-- .yt-subscribe -->
                </a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .hero-section -->

<div class="container single-page">
    <div class="row">
        <div class="col-12 col-lg-9">
            @if(count($posts) > 0)
            @foreach($posts as $post)
            <div class="content-wrap">
                <header class="entry-header">
                    <div class="posted-date">
                        {{$post->created_at->format('F j, Y')}}
                    </div><!-- .posted-date -->

                    <h2 class="entry-title">{{$post->title}}</h2>

                    <div class="tags-links">
                        <a href="#">#winter</a>
                        <a href="#">#love</a>
                        <a href="#">#snow</a>
                        <a href="#">#january</a>
                    </div><!-- .tags-links -->
                </header><!-- .entry-header -->

                <figure class="featured-image">
                    @if($post->barner_image)
                    <img src="{{asset('images/noimage.jpg') }}" alt="">
                    @endif
                </figure><!-- .featured-image -->

                <div class="entry-content">
                    <p>{!!$post->overview!!} </p>
                </div><!-- .entry-content -->

                <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                    <ul class="post-share flex align-items-center order-3 order-lg-1">
                        <label>Share</label>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!-- .post-share -->

                    <a class="read-more order-2" href="/posts/{{$post->id}}">Read more</a>

                    <div class="comments-count order-1 order-lg-3">
                        <a href="#">@if(count($post->comments) > 0) {{count($post->comments)}} Comments @endif</a>
                    </div><!-- .comments-count -->
                </footer><!-- .entry-footer -->
            </div><!-- .content-wrap -->
            @endforeach

            {{$posts->links()}}
            <!-- <div class="my-pagination">
                <ul class="flex align-items-center">
                    <li class="active"><a href="#">01.</a></li>
                    <li><a href="#">02.</a></li>
                    <li><a href="#">03.</a></li>
                    
                </ul>
            </div> -->
            @endif
        </div><!-- .col -->

        <div class="col-12 col-lg-3">
            <div class="sidebar">
                <div class="about-me">
                    <h2>I’m Amelia Smith</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna.</p>
                </div><!-- .about-me -->

                <div class="recent-posts">
                    
                    @foreach ($popular_posts as $post)
                        @if($loop->index < 4)
                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/thumb-3.jpg" alt="">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    {{$post->created_at->format('F j, Y')}}
                                </div><!-- .entry-header -->

                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->
                        @endif
                    @endforeach

                    

                    
                </div><!-- .recent-posts -->

                <div class="tags-list">
                    <a href="#">Music</a>
                    <a href="#">Love</a>
                    <a href="#">Car</a>
                    <a href="#">Stories</a>
                    <a href="#">Photography</a>
                    <a href="#">Music</a>
                    <a href="#">Car</a>
                </div><!-- .tags-list -->

                <div class="sidebar-ads">
                    <img src="images/ads.jpg" alt="ads">
                </div>
            </div><!-- .sidebar -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->

@endsection