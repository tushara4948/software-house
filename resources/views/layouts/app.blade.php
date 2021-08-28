<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <!-- Required meta tags -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.css') }}">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/slick.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/slick-theme.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/responsive.css') }}">
      <title>@yield('title')</title>
        @yield('styles')
   </head>
<body>
    <div id="app">
        @section('header')
            @include('layouts.header')
        @show
        <main>
            @yield('content')
        </main>
         @section('footer')
            @include('layouts.footer')
         @show
    </div>
</body>
<script type="text/javascript" src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/custom.js') }}"></script>

@yield('scripts')

</html>
