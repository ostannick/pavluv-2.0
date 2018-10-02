<div class="columns">
  <div class="column col-12 pav-align-center">
    <img src="/img/avatar.jpg" width="200" class="/img-fit-cover s-circle">
    <h3>Nicholas Ostan</h3>
    <h6>Full Time Welder</h6>
    <p><a class="c-hand"><i class="fal fa-fw fa-pencil-alt"></i> Edit my profile picture</a></p>
  </div>

  <div class="column col-12">
    <form data-id="{{Auth::user()->id}}" data-url="/users/{{Auth::user()->id}}" data-method="put" class="form-horizontal">
      <div class="divider text-center" data-content="Shipping Address"></div>
      <p>We need your shipping address to send you your <a href="">PavLuv Puppy Care Package</a> upon purchase of your puppy. Every dog gets one!</p>
      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-user"></i> Name</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input" name="name" type="text" value="{{Auth::user()->name}}" disabled>
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-at"></i> Email</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input" name="name" type="text" value="{{Auth::user()->email}}" disabled>
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-map-marked"></i> Province</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input ajax-update-solo" name="provice" type="text" placeholder="Ontario" value="{{Auth::user()->province}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-map-pin"></i> Address</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input ajax-update-solo" name="street" type="text" placeholder="50 Rossland Road" value="{{Auth::user()->street}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-hashtag"></i> Postal Code</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input ajax-update-solo" name="postal" type="text" placeholder="V2R 1F9" value="{{Auth::user()->postal}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-phone"></i> Phone</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input ajax-update-solo" name="phone" type="text" placeholder="647 555 1444" value="{{Auth::user()->cellphone}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-globe-americas"></i> Website</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input ajax-update-solo" name="website" type="text" placeholder="www.pavluv.ca" value="{{Auth::user()->website}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fal fa-fw fa-info-square"></i> About Me</label>
        </div>
        <div class="col-10 col-sm-12">
          <textarea class="form-input ajax-update-solo" name="about" type="text" placeholder="" style="min-height: 150px;">{{Auth::user()->about}}</textarea>
        </div>
      </div>

      <div class="divider text-center" data-content="Social Media Information"></div>
      <p>We use your social media accounts to cross-verify the answers to your questionnaire as an identity check. Sorry, we're just a little paranoid when it comes to our pups!</p>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fab fa-fw fa-facebook"></i> Facebook</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input ajax-update-solo" type="text" name="facebook" placeholder="Link to facebook profile" value="{{Auth::user()->facebook}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-2 col-sm-12">
          <label class="form-label" for="input-example-1"><i class="fab fa-fw fa-instagram"></i> Instagram</label>
        </div>
        <div class="col-10 col-sm-12">
          <input class="form-input ajax-update-solo" type="text" name="instagram" placeholder="@pavluv.ca" value="{{Auth::user()->instagram}}">
        </div>
      </div>


    </form>

  </div>
</div>
