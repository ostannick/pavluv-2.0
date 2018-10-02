<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PavLuv - Canada's Official Puppy Marketplace</title>

    <!--JS Dependencies-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/init.js')}}" type="text/javascript"></script>

    <!--CSS Dependencies-->
    <link rel="stylesheet" href="{{asset('css/spectre.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-exp.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">

  </head>

  <body>

    <div class="website-container">

    <header>
      @guest
        @include('layouts.partials.navbar.guest')
        @include('layouts.partials.offcanvas.guest')
      @endguest

      @auth
        @include('layouts.partials.navbar.auth')
        @include('layouts.partials.offcanvas.auth')
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
      @endauth
    </header>

    <main>
      <div class="pavluv-content-wrapper" style="background-image: url('{{asset('img/assign_bgs/'. rand(1,5) .'.jpg')}}')">
        @yield('content')
      </div>
    </main>

    @include('partials.footer')

    </div>

  </body>

</html>
