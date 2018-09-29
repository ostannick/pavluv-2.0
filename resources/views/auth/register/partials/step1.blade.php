<div id="wizard-step-1" class="wizard-step">

    @if(count($errors))
      <p class="pavluv-red">Darnit! We found some mistakes:</p>
      <ul class="link-list-vertical">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    <h3 class="hide-md pav-align-center animated flipInX">Hey there! What's your name?</h3>
    <h6 class="show-md pav-align-center animated flipInX">Hey there! What's your name?</h6>
    <hr class="pav-divider">

    <div class="pav-friendly-input">
      <label>Full Name</label>
      <div class="friendly-form-field">
        <input class="pav-friendly-input" type="text" name="name" value="" placeholder="Leo Nocentelli" autofocus>
      </div>
    </div>



</div>
