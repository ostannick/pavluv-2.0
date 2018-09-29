<div class="container">
<h3><i class="fal fa-fw fa-file-contract"></i> Applications to my Kennel</h3>
<p>Filter by...</p>
<div class="filter">
  <input type="radio" id="tag-0" class="filter-tag" name="filter-radio" hidden checked>
  <input type="radio" id="tag-1" class="filter-tag" name="filter-radio" hidden>
  <input type="radio" id="tag-2" class="filter-tag" name="filter-radio" hidden>
  <input type="radio" id="tag-3" class="filter-tag" name="filter-radio" hidden>

  <div class="filter-nav">
    <label class="chip" for="tag-0">Waiting List</label>
    <label class="chip" for="tag-1">Unapproved</label>
    <label class="chip" for="tag-2">Approved</label>
    <label class="chip" for="tag-3">Awaiting Payment</label>
  </div>

  <div class="filter-body">
    @for ($i = 0; $i <= 8; $i++)
        <div class="pav-application-thumbnail filter-item card" data-tag="tag-0">
          <h5 class="pav-align-center">Application</h5>
          <ul>

            <li>
              <figure class="avatar avatar-xl">
                <img src="/img/avatar.jpg">
                <img src="/img/davatar.jpg" class="avatar-icon">
              </figure>
            </li>
            <li>Nick Ostan</li>
            <li><i class="fal fa-fw fa-heart"></i></li>
            <li>T-Bone</li>
            <li><a class="btn btn-default">OPEN <i class="fal fa-fw fa-angle-right"></i> </a></li>
          </ul>
        </div>

    @endfor
  </div>
</div>

  <div class="pav-application-thumbnail-container">

      </div>


  <div class="columns">
    <div class="column col-12 col-md-12">
      <hr class="pav-divider">
      <h3>Nick Ostan's Application for T-Bone</h3>
      <div class="timeline">
  <div class="timeline-item">
    <div class="timeline-right">
      <a class="timeline-icon"></a>
    </div>
    <div class="timeline-content">
      <b>Sept 07 2018</b> ... Fred Simpson applied to meet/purchase Napolean.
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-right">
      <a class="timeline-icon icon-lg">
        <i class="fal fa-fw fa-check"></i>
      </a>
    </div>
    <div class="timeline-content">
      <b>Sept 09 2018</b> ... You approved the application
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-right">
      <a class="timeline-icon icon-lg">
        <i class="fal fa-fw fa-calendar"></i>
      </a>
    </div>
    <div class="timeline-content">
      <b>Sept 09 2018</b> ... You set the appointment date for Sept 16 2018.
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-right">
      <a class="timeline-icon icon-lg">
        <i class="fal fa-fw fa-check"></i>
      </a>
    </div>
    <div class="timeline-content">
      <b>Sept 09 2018</b> ... Fred confirmed the appointment.
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-right">
      <a class="timeline-icon icon-lg">
        <i class="fal fa-fw fa-check"></i>
      </a>
    </div>
    <div class="timeline-content">
      <b>Sept 16 2018</b> ... You met with Fred.
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-right">
      <a class="timeline-icon icon-lg">
        <i class="fal fa-fw fa-exclamation-circle"></i>
      </a>
    </div>
    <div class="timeline-content">
      <b>Now</b> ... If Fred gave you a good impression, you should request a deposit. Otherwise, close the application.
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-right">
      <a class="timeline-icon"></a>
    </div>
    <div class="timeline-content">
      <a class="btn btn-default">Read Application</a>
      <a class="btn btn-primary">Request Deposit</a>
      <a class="btn btn-error">Close Application</a>
    </div>
  </div>




</div>
    </div>
  </div>
</div>
