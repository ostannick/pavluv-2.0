@extends('layouts.appmaster')

@section('content')
<div class="background-wrapper">
  <div class="container">
    <div class="columns">
      <!--Spacer column-->
      <div class="column col-3 hide-m"></div>

      <!--Login Pane-->

      <div class="column col-sm-12 col-m-6">

        <form action="{{route('register')}}" method="POST">
        @csrf
        <input type="hidden" name="role" value="{{$_GET['type']}}">
        <div class="pav-card">
        @include('auth.register.partials.steps')
        <div class="wrapper pav-padding-24">
          @include('auth.register.partials.step1')
          @include('auth.register.partials.step2')
          @include('auth.register.partials.step3')
          @include('auth.register.partials.step4')
          @include('auth.register.partials.step5')
        </div>

        <div class="card-footer">
          <button type="button" id="register-walkthrough-button" data-step="1" class="pav-btn-big">Next <i class="fal fa-fw fa-arrow-alt-right"></i> </button>
        </div>

        </form>

      </div>
    </div>


      <!--Spacer column-->
      <div class="col-3 hide-m"></div>
    </div>
  </div>
</div>
@endsection
