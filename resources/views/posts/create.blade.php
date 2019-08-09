@extends('layouts.base')

@section('content')

    <div class="container-fluid">
        

        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-lg-3">
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

    <div class="container single-page contact-page">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="content-wrap">
                    <header class="entry-header">
                        <h2 class="entry-title">Create Post</h2>

                        
                    </header><!-- .entry-header -->

                    {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'class' => 'contact-form', 'enctype' => 'multipart/form-data']) }}
                        {{Form::text('title', '', ['placeholder' => 'Title'])}}
                        {{Form::textarea('overview', '', ['id'=> 'overview-ckeditor','placeholder' => 'Overview', 'rows'=> '9', 'cols'=> '6'])}}
                        {{Form::textarea('body', '', ['id'=> 'body-ckeditor','placeholder' => 'Body', 'rows'=> '18', 'cols'=> '6'])}}
                        {{Form::file('barner_image')}}
                        {{Form::submit('Create')}}
                    {{ Form::close() }}<!-- .contact-form -->
                </div><!-- .content-wrap -->
            </div><!-- .col -->

            <div class="col-12 col-lg-3">
                <div class="sidebar">
                    
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->

@endsection