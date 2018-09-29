<?php $i = 1; ?>
@foreach($litter->puppies as $puppy)
<!--PUPSHEET-->

<div data-id="{{$puppy->id}}" class="pav-puppy-sheet @if($i > 1) pav-display-none @endif">
  <form data-url="/puppies/{{$puppy->id}}" data-method="put" data-id="{{$puppy->id}}">
    <h1 class="pav-align-center">Puppy #{{$i}} of {{$litter->size}}</h1>
      <div class="pav-friendly-input-group">
        <div class="form-group">
          <label>Temporary Puppy Name</label>
          <input type="text" class="pav-friendly-input ajax-form-field" name="name" value="{{$puppy->name}}" placeholder="Fred">
        </div>
      </div>

      <div class="pav-friendly-input-group">
        <div class="form-group">
          <label>Deposit<a href="#deposit-price-info-modal" class="modal-trigger tooltip" data-tooltip="Click for info"><i class="fal fa-fw fa-question-circle"></i></a></label>
          <input type="text" class="pav-friendly-input ajax-form-field" name="deposit" value="{{$puppy->breeder_deposit}}" placeholder="(Optional)">
        </div>
        <div class="form-group">
          <label>Full Price<a href="#full-price-info-modal" class="modal-trigger tooltip" data-tooltip="Click for info"><i class="fal fa-fw fa-question-circle"></i></a> </label>
          <input type="text" class="pav-friendly-input ajax-form-field" name="price" value="{{$puppy->breeder_price}}" placeholder="2000">
        </div>
      </div>

      <div class="pav-friendly-input-group">
        <div class="form-group">
          <label>Colour</label>
          <input type="text" class="pav-friendly-input ajax-form-field" name="color" value="{{$puppy->color}}" placeholder="Tan">
        </div>
      </div>

      <div class="pav-friendly-input-group">
        <div class="form-group">
          <label>Picture(s) of my puppy<a href="#file-info-modal" class="modal-trigger tooltip" data-tooltip="Click for info"><i class="fal fa-fw fa-question-circle"></i></a></label>
          <input type="file" class="pav-friendly-input" name="" value="" multiple>
        </div>
      </div>

      <div class="pav-friendly-input-group">
        <div class="form-group">
          <label>Gender</label>
          <div class="button-container">
            <input type="hidden" name="gender" class="ajax-form-field"
              @if($puppy->is_male == true)
              value="Male"
              @else
              value="Female"
              @endif
            >
            @if($puppy->is_male == true)
            <button class="pav-btn-big btn-big-select selected" type="button" name="button" data-value="Male">Male <i class="fal fa-fw fa-mars"></i> </button>
            <button class="pav-btn-big btn-big-select deselected" type="button" name="button" data-value="Female">Female <i class="fal fa-fw fa-venus"></i></button>
            @else
            <button class="pav-btn-big btn-big-select deselected" type="button" name="button" data-value="Male">Male <i class="fal fa-fw fa-mars"></i> </button>
            <button class="pav-btn-big btn-big-select selected" type="button" name="button" data-value="Female">Female <i class="fal fa-fw fa-venus"></i></button>
            @endif
          </div>
        </div>
      </div>

      <div class="pav-friendly-input-group">
        <div class="form-group">
          <label class="form-switch">
            <input type="checkbox" name="saleType" class="ajax-form-field" @if($puppy->sale_type == 'shared') checked="true" @endif>
            <i class="form-icon"></i> <p>I would like to keep co-ownership rights on this puppy after the sale.</p>
          </label>
        </div>
      </div>

    <hr>

  </form>
</div>
<?php $i++; ?>
@endforeach
<div class="button-container">
  <button class="pav-btn-big deselected" type="button" name="button">Previous</button>
  <button class="pav-btn-big" type="button" name="button">Next Puppy <i class="fal fa-fw fa-arrow-alt-right"></i> </button>
</div>
