<div class="columns">
  <div class="column col-12">
    <h3 class="pav-align-center">Becoming the Best Breeder Possible</h3>
    <div class="timeline">
      <div class="timeline-item" id="timeline-example-1">
        <div class="timeline-left">
          <a class="timeline-icon icon-lg" href="#timeline-example-2">
            <i class="fal fa-fw fa-check"></i>
          </a>
        </div>
        <div class="timeline-content">
          <h5>You registered! Awesome!</h5>
          <p>You may browse PavLuv for free, but your account is marked as <span class="text-warning"> <i class="fal fa-fw fa-exclamation-circle"></i> <b>Unverified</b> </span> to the public until you fill out your banking and verification details below.</p>
          <p>Before you can post your puppies publicly and get paid, <b>you need to Get Verified now.</b></p>
          <hr class="pav-divider-invis">
        </div>
      </div>

      <div class="timeline-item" id="timeline-example-2">
        <div class="timeline-left">
          <a class="timeline-icon icon-lg" href="#timeline-example-2">
            @if(Auth::user()->isVerified())
            <i class="fal fa-fw fa-check"></i>
            @else
            <i class="fal fa-fw fa-exclamation-circle"></i>
            @endif
          </a>
        </div>
        <div class="timeline-content">
          @if(Auth::user()->isVerified())
          <h5>Sweet! You're verified.</h5>
          <p>You will receive payouts 4 times per month. You can conduct an unlimited number of transactions. For more information, visit your billing page.</p>
          @else
          <h5>1. Let Us Know How to Pay You...</h5>
          <p>If you want to receive money for your puppies, you <b>must</b> get verified. We need to know which account you would like us to deposit your funds to, and some verification information about you.</p>
          <a href="#" class="btn btn-primary"><i class="fal fa-fw fa-shield-check"></i> Get Verified Now</a>
          @endif
          <hr class="pav-divider-invis">
        </div>
      </div>

      <div class="timeline-item" id="timeline-example-2">
        <div class="timeline-left">
          <a class="timeline-icon icon-lg" href="#timeline-example-2">
            <i class="fal fa-fw fa-question"></i>
          </a>
        </div>
        <div class="timeline-content">
          <h5>2. Become a PavLuv Subscriber</h5>
          <p>Subscribers keep 100% of the price of their puppies, and are seen as more reputable by the public.</p>
          @if(Auth::user()->isVerified())
            <a href="#modal_basic_to_subscriber" class="btn btn-primary modal-trigger"><i class="fal fa-fw fa-check"></i> Become a Subscriber</a>
          @else
            <p>You need to get verified before you can subscribe.</p>
            <a class="btn btn-primary disabled"><i class="fal fa-fw fa-check"></i> Become a Subscriber</a>
          @endif
          <hr class="pav-divider-invis">
        </div>
      </div>

      <div class="timeline-item" id="timeline-example-2">
        <div class="timeline-left">
          <a class="timeline-icon icon-lg" href="#timeline-example-2">
            <i class="fal fa-fw fa-question"></i>
          </a>
        </div>
        <div class="timeline-content">
          <h5>3. Become an Official PavLuv Breeder</h5>
          <p>If you are a Best-in-Show breeder and want to attract top quality buyers, consider becoming verified.</p>
          <p>Official PavLuv Breeders pay virtually no subscription fees, and keep 100% of the price of their dogs.</p>
          @if(Auth::user()->isVerified())
            <a href="#" class="btn btn-error"><i class="fal fa-fw fa-badge-check"></i> Become an Official Breeder</a>
          @else
            <p>You need to get verified before you can become an Official PavLuv Breeder.</p>
            <a href="#" class="btn btn-error disabled"><i class="fal fa-fw fa-badge-check"></i> Become an Official Breeder</a>
          @endif
        </div>
      </div>

    </div>
  </div>
</div>

<!-- RELEVANT MODALS -->

@if(Auth::user()->isVerified())
<div class="modal active" id="modal_basic_to_subscriber">
  <a href="#close" class="modal-overlay modal-close" aria-label="Close"></a>
  <div class="modal-container">
    <div class="modal-header">
      <a href="#close" class="btn btn-clear float-right modal-close" aria-label="Close"></a>
    </div>
    <div class="modal-body">
      <div class="modal-title h5">You will receive...</div>
      <ul class="link-list-vertical">
        <li><i class="fal fa-fw fa-box-usd"></i> 100% of the price for your puppy (we take 0%).</li>
        <li><i class="fal fa-fw fa-shield-check"></i> PavLuv Refund & Fraud Protection.</li>
        <li><i class="fal fa-fw fa-check"></i></i> PavLuv Subscriber Badge. </li>
        <li><i class="fal fa-fw fa-person-dolly"></i> Full access to PavLuv functions.</li>
        <li><i class="fal fa-fw fa-heart"></i> ...and you will be 50% more likely to attract serious, educated pet owners.</li>
      </ul>
      <hr class="pav-divider-invis">
      <div class="content">
        <form class="" action="index.html" method="post">
          <div class="form-row">
            <div id="card-element"></div>
            <div id="card-errors" role="alert"></div>
          </div>
          <div class="button-container">
            <button type="button" class="pav-btn-big">$99.99/3mo<br/><i class="fal fa-fw fa-credit-card"></i> </button>
            <button type="button" class="pav-btn-big">$299.99/yr<br/><i class="fal fa-fw fa-credit-card"></i> </button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endif

<hr>
