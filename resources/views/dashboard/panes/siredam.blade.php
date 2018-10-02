<div class="pav-align-right pav-margin-bottom">
  <a href="#new-siredam-modal" class="btn btn-primary modal-trigger">ADD NEW SIRE/DAM</a>
</div>

<div class="columns">



</div>

<div class="modal active" id="new-siredam-modal">
  <a href="#close" class="modal-overlay modal-close" aria-label="Close"></a>
  <div class="modal-container">
    <div class="modal-header">
      <a href="#close" class="btn btn-clear float-right modal-close" aria-label="Close"></a>
      <div class="modal-title h5">Add New Sire/Dam</div>
    </div>
    <div class="modal-body">
      <form action="/siredam" method="post">
        @csrf
        <div class="content">

          <p>Are you making a sire or a dam? Select:</p>
          <div class="button-container">
            <input type="hidden" name="is_male" value="">
            <button type="button" class="pav-btn-big btn-big-select deselected" data-value="1" name="button">Sire <i class="fal fa-fw fa-mars"></i> </button>
            <button type="button" class="pav-btn-big btn-big-select deselected" data-value="0" name="button">Dam <i class="fal fa-fw fa-venus"></i> </button>
          </div>

          <div class="pav-friendly-input-group">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="pav-friendly-input" name="name" placeholder="My name..." value="" required>
            </div>
          </div>

          <div class="pav-friendly-input-group">
            <div class="form-group">
              <label>Breed</label>
              <input type="text" class="pav-friendly-input" name="breed" placeholder="My breed..." value="" required>
            </div>
          </div>

          <div class="pav-friendly-input-group">
            <div class="form-group">
              <label>Birthday</label>
              <input type="text" class="pav-friendly-input" name="birthday" placeholder="My birthday..." value="" required>
            </div>
            <div class="form-group">
              <label>Colour</label>
              <input type="text" class="pav-friendly-input" name="color" placeholder="Colour" value="" required>
            </div>
          </div>

          <div class="pav-friendly-input">
            <button type="submit" class="pav-btn-big" name="button">Save & Continue<i class="fal fa-fw fa-check"></i> </button>
          </div>

        </div>

      </form>

    </div>
  </div>
</div>
