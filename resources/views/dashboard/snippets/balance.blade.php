    @if(Auth::user()->isBreeder())
      <div class="column col-12">
        <h5 class=""><i class="fal fa-fw fa-hand-holding-usd"></i> My Account Balance</h5>
        <h1 class="pavluv-blue animated flipInX">+ ${{Auth::user()->account_balance}} CAD</h1>
        <h6 class="">This amount will be sent to your bank account on Oct 14, 2018.</h6>
      </div>
    @endif
