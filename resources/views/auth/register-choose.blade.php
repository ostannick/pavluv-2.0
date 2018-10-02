@extends('layouts.appmaster')

@section('content')
<div class="background-wrapper"  style="background-image: url('{{asset('img/assign_bgs/'. rand(1,5) .'.jpg')}}')">
  <div class="container">
    <div class="columns">
      <!--Spacer column-->
      <div class="column col-2 hide-m"></div>

      <!--Login Pane-->

      <div class="column col-m-4 col-md-12">
        <div class="pav-underlay pav-margin-top-32">
          <h1 class="pav-align-center"><i class="fal fa-fw fa-2x fa-heart"></i> </h1>
          <h3 class="pav-align-center">I'm looking to purchase a puppy.</h3>
          <div class="button-container pav-margin-top-32">
            <a href="/register?type=buyer" class="pav-btn-big" name="button">GET STARTED</a>
          </div>
        </div>
      </div>

      <div class="column col-m-4 col-md-12">
        <div class="pav-underlay pav-margin-top-32">
          <h1 class="pav-align-center"><i class="fal fa-fw fa-2x fa-handshake"></i> </h1>
          <h3 class="pav-align-center">I'm a breeder, looking to sell my pups.</h3>
          <div class="button-container pav-margin-top-32">
            <a href="/register?type=breeder" class="pav-btn-big" name="button">GET STARTED</a>
          </div>

        </div>
      </div>

      <!--Spacer column-->
      <div class="column col-2 hide-m"></div>
    </div>
  </div>
</div>
@endsection
