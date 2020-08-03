<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}" />
    <!-- my styles -->
    <link rel="stylesheet" href="{{ asset('css/my_style.css') }}" />
    <!-- simplebar styles -->
    <link rel="stylesheet" href="{{ asset('css/vendor/simplebar.css') }}" />
    <!-- tiny-slider -->
    <link rel="stylesheet" href="{{ asset('css/vendor/tiny-slider.css') }}" />
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- favicon -->
    <link rel="icon" href="img/favicon.ico" />
    <title>GoGame</title>
</head>
<body>
    @include('layouts.loader')
    @if(Auth::id())
        @include('header.header_user')
        @else
    @include('header.header')
    @endif
    @include('layouts.login')
    @include('layouts.sign_up')

    @section('content')

    @show



    <div class="notification"></div>
    <!-- js -->
    <script src="{{ asset('js/app.bundle.min.js') }}"></script>
{{--    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>--}}
    <script src="{{ asset('js/modal.js') }}"></script>

    <!-- Class js -->
    <script src="{{ asset('js/class.js') }}"></script>
    <!-- /Class js -->

    <!-- Posts js -->
    <script src="{{ asset('js/posts.js') }}"></script>
    <!-- /Posts js -->

    <!-- Like js -->
    <script src="{{ asset('js/like.js') }}"></script>
    <!-- /Like js -->

    <!-- Comment js -->
    <script src="{{ asset('js/comment.js') }}"></script>
    <!-- /Comment js -->

    <!-- google maps api -->
   {{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASM8La_P3appMy1kalc0kIqNL6pxdUbSA&amp;callback=initMap" async defer></script> --}}
</body>
</html>
