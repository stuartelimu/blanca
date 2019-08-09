@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-header flex justify-content-center align-items-center" style="background-image: url('images/about-bg.jpg')">
                <h1>Blanca Admin</h1>
            </div><!-- .page-header -->
        </div><!-- .col -->
    </div><!-- .row -->

    <div class="container">
        <div class="row">
            <div class="offset-lg-9 col-lg-3">
                <a href="#">
                    <div class="yt-subscribe">
                        <img src="images/yt-subscribe.png" alt="Youtube Subscribe">
                        <h3>Blanca</h3>
                        <!-- <p>To my Youtube Channel</p> -->
                    </div><!-- .yt-subscribe -->
                </a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .hero-section -->

@endsection