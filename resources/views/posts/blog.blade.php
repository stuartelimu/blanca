@extends('layouts.base')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-header flex justify-content-center align-items-center" style="background-image: url({{asset('images/blog-bg.jpg')}})">
                    <h1>The Story</h1>
                </div><!-- .page-header -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-lg-3">
                    <a href="#">
                        <div class="yt-subscribe">
                            <img src="{{asset('images/yt-subscribe.png')}}" alt="Youtube Subscribe">
                            <h3>Subscribe</h3>
                            <p>To my Youtube Channel</p>
                        </div><!-- .yt-subscribe -->
                    </a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->

    <div class="container single-page blog-page">
        <div class="row">
            <div class="col-12">
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
                        <img src="{{asset('images/noimage.jpg') }}" alt="">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p>{!!$post->overview!!}</p>

                        <p>{!!$post->body!!}</p>

                        <p>Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate. </p>
                    </div><!-- .entry-content -->


                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center mb-5">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul><!-- .post-share -->

                        <div class="comments-count order-1 order-lg-3">
                            <a href="#">@if(count($post->comments) > 0) {{count($post->comments)}} Comments @endif</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                    @if(!Auth::guest())
                    <a class="read-more order-2" href="/posts/{{$post->id}}/edit">Edit</a>
                    {{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'contact-form']) }}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete')}}
                    {{ Form::close() }}<!-- .contact-form -->
                    @endif
                </div><!-- .content-wrap -->

                <div class="content-area">
                    <div class="post-comments">
                        <h3 class="comments-title">Comments</h3>

                        <ol class="comment-list">
                            @include('inc.comments',  ['comments' => $post->comments, 'post_id' => $post->id])
                        </ol><!-- .comment-list -->
                    </div><!-- .post-comments -->

                    <div class="comments-form">
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a reply</h3>

                            <form class="comment-form" action="{{ route('comments.store'   ) }}">
                                @csrf
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <textarea name="message" rows="18" cols="6" placeholder="Messages"></textarea>
                                <input type="submit" value="Comment">
                            </form><!-- .comment-form -->
                        </div><!-- .comment-respond -->
                    </div><!-- .comments-form -->
                </div><!-- .content-area -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

@endsection

