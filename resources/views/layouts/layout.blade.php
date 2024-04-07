<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="bg-cover font-sans bg-center bg-no-repeat h-screen" style="background-image: url('images/fitness 2 image.jpg')">
  @extends('Navigation.Nav')
  <div>
    @yield('content')
  </div>
  {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>