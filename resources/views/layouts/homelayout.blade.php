<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body class="bg-cover font-sans bg-center h-screen" style="background-image: url('images/fitness 2 image.jpg')">
      <div class="relative w-1/2 mt-24 ml-32 p-9">
          <div class="absolute inset-0 bg-black opacity-70"></div>
          <div class="relative z-10 text-white">
              <h1 class="text-5xl font-extrabold">WELCOME TO <span class="text-limeCustom font-extrabold">BD2GYM</span></h1>
              <h3 class="text-xl my-3 font-extrabold">GET FIT IN <span class="text-yellow-400">LESS</span> THAN TWO WEEKS...</h3>
              <p class="text-lg my-4 font-medium">Experience exceptional value with personalized guidance - our service offers competitive pricing and dedicated coaching to help you achieve your fitness goals...</p>
              <button class="bg-limeCustom px-8 py-4 hover:bg-black hover:border hover:text-limeCustom text-black text-xl my-3 font-bold">EXPLORE MORE</button>
          </div>
      </div>
      <div>
          @yield('Homecontent')
      </div>
  {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>