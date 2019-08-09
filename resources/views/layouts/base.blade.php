<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('style.css')}}">

        <title>{{config('app.name', 'blanca')}}</title>


    </head>
    <body>
        <div class="outer-container">

            <!-- header -->
            @include('inc.header')
            @include('inc.messages')
            @yield('content')

            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'overview-ckeditor' );
                CKEDITOR.replace( 'body-ckeditor' );
            </script>
        </div>

        <!-- footer -->
        @include('inc.footer')
        <script type='text/javascript' src="{{asset('js/app.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/swiper.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/custom.js')}}"></script>
    </body>
</html>