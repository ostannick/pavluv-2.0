<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PavLuv - Canada's Official Puppy Marketplace</title>

    <!--CSS Dependencies-->
    <link rel="stylesheet" href="{{asset('css/spectre.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-exp.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>

  @include('layouts.partials.navbar')

  <body>
    <main>
      @yield('content')
    </main>
  </body>
</html>
