<h3><i class="fal fa-fw fa-question"></i> PavLuv Questionnaire</h3>
<p>Breeders like to get to know their applicants better so that they feel safe about their puppies going to good homes. Filling out your questionnaire with a high level of detail will make your application more appealing to the breeder.</p>
<hr class="pav-divider">

@foreach($questions as $q)

<div class="pav-friendly-input">
  <label>{{$q->question}}</label>
  <div class="friendly-form-field">
    @if($q->input_type == 'text')
    <input class="pav-friendly-input" type="text" name="email" value="" placeholder="{{$q->placeholder}}">
    @elseif($q->input_type == 'textarea')
    <textarea class="pav-friendly-input" placeholder="{{$q->placeholder}}"></textarea>
    @endif
  </div>
</div>

@endforeach
<div class="button-container">
  <button type="button" id="register-walkthrough-button" data-step="1" class="pav-btn-big">Save My Answers <i class="fal fa-fw fa-save"></i> </button>
</div>
