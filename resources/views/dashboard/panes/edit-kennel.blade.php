<form data-id="{{$kennel->id}}" data-url="/kennel/{{$kennel->id}}" data-method="put" class="form-horizontal">

  <h3><i class="fal fa-fw fa-info"></i> Kennel Information</h3>
  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-tennis-ball"></i> Name</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="Winterhaven Kennels" name="name" value="{{$kennel->name}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-map-marked"></i> Province</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="Ontario" name="province" value="{{$kennel->province}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-city"></i> City</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="Toronto" name="city" value="{{$kennel->city}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-map-pin"></i> Address</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="50 Rossland Road" name="address" value="{{$kennel->address}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-hashtag"></i> Postal Code</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="V2R 1F9" name="postal" value="{{$kennel->postal}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-phone"></i> Phone</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="647 555 1444" name="phone" value="{{$kennel->phone}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-globe-americas"></i> Website</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="www.pavluv.ca" name="website" value="{{$kennel->website}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-info-square"></i> About Kennel</label>
    </div>
    <div class="col-10 col-sm-12">
      <textarea class="form-input ajax-update-solo" type="text" name="about" placeholder="We breed the highest quality Golden Doodles..." style="min-height: 150px;">{{$kennel->about}}</textarea>
    </div>
  </div>

  <hr class="pav-divider">

  <h3><i class="fal fa-fw fa-paw"></i> My Breeds</h3>
  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-feather"></i> Breed 1</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="Golden Retriever" name="breed_one" value="{{$kennel->breed_one}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-feather"></i> Breed 2</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="Standard Poodle" name="breed_two" value="{{$kennel->breed_two}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-2 col-sm-12">
      <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-feather"></i> Breed 3</label>
    </div>
    <div class="col-10 col-sm-12">
      <input class="form-input ajax-update-solo" type="text" placeholder="Golden Doodle" name="breed_three" value="{{$kennel->breed_three}}">
    </div>
  </div>

  <hr class="pav-divider">
  <div class="columns">

    <div class="column col-6 col-md-12">
      <h3><i class="fal fa-fw fa-concierge-bell"></i> Kennel Services</h3>
      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_microchip" @if($kennel->does_microchip) checked="true" @endif>
          <i class="form-icon"></i> Microchipping
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_rabiesvaccine" @if($kennel->does_rabiesvaccine) checked="true" @endif>
          <i class="form-icon"></i> Rabies Vaccination
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_deworm" @if($kennel->does_deworm) checked="true" @endif>
          <i class="form-icon"></i> Deworming
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_dogfood" @if($kennel->does_dogfood) checked="true" @endif>
          <i class="form-icon"></i> Dog Food Upon Purchase
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_annum_health" @if($kennel->does_annum_health) checked="true" @endif>
          <i class="form-icon"></i> 12-month Health Guarantee
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_register" @if($kennel->does_register) checked="true" @endif>
          <i class="form-icon"></i> CKC-Registration
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_lineage" @if($kennel->does_lineage) checked="true" @endif>
          <i class="form-icon"></i> Lineage Documentation
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_rehome" @if($kennel->does_rehome) checked="true" @endif>
          <i class="form-icon"></i> Willing to Rehome
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_shipping" @if($kennel->does_shipping) checked="true" @endif>
          <i class="form-icon"></i> Puppy Shipping
        </label>
      </div>

      <div class="form-group">
        <label class="form-switch">
          <input type="checkbox" class="ajax-update-solo" name="does_insurance" @if($kennel->does_insurance) checked="true" @endif>
          <i class="form-icon"></i> Insurance Provided
        </label>
      </div>

      <hr class="pav-divider show-md">

    </div>

    <div class="column col-6 col-md-12">
        <h3><i class="fal fa-fw fa-cog"></i> Kennel Settings</h3>

          <div class="form-group">
            <label class="form-switch">
              <input type="checkbox" class="ajax-update-solo" name="accept_waitlist_apps" @if($kennel->accept_waitlist_apps) checked="true" @endif>
              <i class="form-icon"></i> Accept waiting list applications
            </label>
          </div>
          <div class="form-group">
            <label class="form-switch">
              <input type="checkbox" class="ajax-update-solo" name="address_privacy" @if($kennel->address_privacy) checked="true" @endif>
              <i class="form-icon"></i> Keep my address private
            </label>
          </div>
    </div>

  </div>

    <hr class="pav-divider">
    <div class="columns">

      <div class="column col-12">
          <h3><i class="fal fa-fw fa-file-contract"></i> Documents & Contracts</h3>
          <p>If there are certain contracts you commonly use (for example, a non-breeding contract), you can upload it here. Documents related to your kennel that you would like to have publicly available can also be uploaded here.</p>

          <div class="document-container-dash">
            <ul class="document">
              <li><i class="fal fa-fw fa-file-contract"></i> </li>
              <li class="tooltip" data-tooltip="Visible to Public?">
                <div class="form-group">
                  <label class="form-switch">
                    <input type="checkbox" checked="true">
                    <i class="form-icon"></i>
                  </label>
                </div>
              </li>
              <li>Non-breeding Contract.pdf</li>
            </ul>
          </div>

      </div>

    </div>







</form>
