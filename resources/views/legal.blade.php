@extends ('layouts.appmaster')

@section ('content')
<div class="container grid-xl">
  <div class="columns">
    <div class="column col-3 col-md-12">
      <div class="pav-card pav-card-body">
        @include('legal.partials.nav')
      </div>

    </div>
    <div class="column col-9 col-md-12">
      <div class="pav-card pav-card-body">
        <h1 id="#who_we_are">Who We Are</h1>
        <p>Some content</p>
      </div>
    </div>
  </div>
</div>



@stop
