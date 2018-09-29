@extends('layouts.appmaster')

@section('content')
<div class="background-wrapper"  style="background-image: url('{{asset('img/temp_bg.jpg')}}')">
  <div class="container">
    <div class="columns">
      <!--Spacer column-->
      <div class="column col-3 hide-xs"></div>

      <!--Login Pane-->

      <div class="column col-sm-12 col-m-6">
        <div class="pav-card">
          <form action="{{route('login')}}" method="POST">

            <div class="wrapper pav-padding-24">
              {{csrf_field()}}
              <h3 class="hide-md"><i class="fal fa-fw fa-grin-beam-sweat"></i> Glad to see you again!</h3>
              <h3 class="show-md"><i class="fal fa-fw fa-grin-beam-sweat"></i> Glad to see you again!</h3>

              <hr class="pav-divider">
              <div class="pav-friendly-input">
                <label>Email Address</label>
                <div class="friendly-form-field">
                  <input class="pav-friendly-input" type="text" name="email" value="" placeholder="jane.doe@gmail.com">
                </div>
              </div>

              <div class="pav-friendly-input">
                <label>Password</label>
                <div class="friendly-form-field">
                  <input class="pav-friendly-input" type="password" name="password" value="">
                </div>
              </div>
            </div>

            <div class="card-footer">
              <button class="pav-btn-big" type="submit" name="button">Log In <i class="fal fa-fw fa-sign-in-alt"></i> </button>
              <div class="flex-column-wrapper pav-align-center">
                <a class="">Don't have an account?</a>
                <a class="">Forgot your password?</a>
              </div>
            </div>

          </form>
        </div>
      </div>

      <!--Spacer column-->
      <div class="col-3 hide-xs"></div>
    </div>
  </div>
</div>
@endsection
