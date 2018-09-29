@extends ('layouts.appmaster')
@section ('content')
<div class="container grid-xl">
  <div class="columns">
    <!--SIDEBAR-->
    <div class="column hide-md col-3">
    @include('dashboard.partials.sidenav')
    </div>

    <!--MAIN PANEL-->
    <div class="column col-lg-9 col-md-12">
      <div class="pav-card pav-card-body">
        @yield('viewpane')
      </div>
    </div>
  </div>
</div>


@stop
