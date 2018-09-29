<h4><i class="fal fa-fw fa-trophy-alt"></i> Congratulations on your new litter!</h4>
<p>We know you're excited to show people your puppies so we're going to make this as fast and easy as we can.</p>

<form action="/litters" method="post">
  @csrf
  <h5 class="pav-align-center">Who are the parents?</h5>
  <div class="columns">
    <div class="column col-6 col-md-12 siredam-list-wrapper">
      <h6 class="pav-align-center">My Sires</h6>
      <input type="hidden" name="sire_id" value="">
      @foreach($sires as $sire)
        <button class="pav-btn-big deselected siredam-selector" type="button" data-id="{{$sire->id}}" name="button">{{$sire->name}}</button>
      @endforeach
    </div>

    <div class="column col-6 col-md-12 siredam-list-wrapper">
      <h6 class="pav-align-center">My Dams</h6>
      <input type="hidden" name="dam_id" value="" required>
      @foreach($dams as $dam)
        <button class="pav-btn-big deselected siredam-selector" type="button" data-id="{{$dam->id}}" name="button">{{$dam->name}}</button>
      @endforeach
    </div>
  </div>

  <div id="wizard-step-2" data-next-step="3" class="wizard-step pav-display-none">
    <hr class="pav-divider-invis">
    <h5 class="pav-align-center animated flipInX"><span class="pavluv-red">How many pups</span> did <span id="wizard-dam">Suzie</span> give birth to?</h5>
    <input type="text" class="pav-friendly-input animated flipInX past-date" name="size" value="" placeholder="5" required>
  </div>

  <div id="wizard-step-3" data-next-step="4" class="wizard-step pav-display-none">
    <hr class="pav-divider-invis">
    <h5 class="pav-align-center animated flipInX"><span class="pavluv-red">When</span> did <span id="wizard-dam">Suzie</span> give birth?</h5>
    <input type="text" class="pav-friendly-input animated flipInX" name="birthday" value="" placeholder="12/25/2018" required>
  </div>

  <div id="wizard-step-4" data-next-step="5" class="wizard-step pav-display-none">
    <hr class="pav-divider-invis">
    <h5 class="pav-align-center animated flipInX"><span class="pavluv-red">What breed</span> are the puppies?</h5>
    <input type="text" class="pav-friendly-input animated flipInX" name="breed" value="" placeholder="Bouvier des Flandres" required>
  </div>

  <div id="wizard-step-5" data-next-step="6" class="wizard-step pav-display-none">
    <hr class="pav-divider-invis">
    <h5 class="pav-align-center animated flipInX"><span class="pavluv-red">How many weeks</span> will you wait before rehoming?</h5>
    <input type="text" class="pav-friendly-input animated flipInX" name="release" value="" placeholder="12" required>
  </div>

  <div id="wizard-step-6" class="wizard-step pav-display-none">
    <hr class="pav-divider-invis animated flipInX">
    <button class="pav-btn-big animated flipInX" type="submit" name="button">Make My Litter!</button>
  </div>
</form>
