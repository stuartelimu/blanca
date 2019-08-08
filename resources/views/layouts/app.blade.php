<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blanca') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type='text/javascript' src="{{asset('js/swiper.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/custom.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="outer-container">

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">

                <nav class="site-navigation mb-5">
                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->

                    <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                        @guest
                        <li class="current-menu-item"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @else
                        <li><a href="/about">{{ Auth::user()->name }}</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            
                            </a>
                        </li>
                        @endguest
                    </ul>

                    <div class="header-bar-social d-md-none">
                        <ul class="flex justify-content-center align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div><!-- .header-bar-social -->

                    <div class="header-bar-search d-md-none">
                        <form>
                            <input type="search" placeholder="Search">
                        </form>
                    </div><!-- .header-bar-search -->
                </nav><!-- .site-navigation -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
