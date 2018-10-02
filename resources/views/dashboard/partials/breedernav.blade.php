<!--KENNEL SECTION-->
<li class="divider breeder-nav-item" data-content="My Kennel"></li>
<li class="menu-item breeder-nav-item">
  <a href="/dashboard/kennel">
    <i class="fal fa-pencil-alt fa-fw"></i> {{Auth::user()->kennel->name}}
  </a>
</li>
<li class="menu-item breeder-nav-item">
  <a href="/dashboard/applications">
    <i class="fal fa-file fa-fw"></i> Applications
  </a>
</li>
<li class="menu-item breeder-nav-item">
  <a href="/dashboard/waitlist">
    <i class="fal fa-list-ol fa-fw"></i> Waiting List
  </a>
</li>
<li class="menu-item breeder-nav-item">
  <a href="/dashboard/billing">
    <i class="fal fa-dollar-sign fa-fw"></i> Billing
  </a>
</li>

<!--DOG SECTION-->
<li class="divider breeder-nav-item" data-content="My Dogs"></li>
<li class="menu-item breeder-nav-item">
  <a href="/dashboard/puppies">
    <i class="fal fa-paw fa-fw"></i> Manage Puppies
  </a>
</li>
<li class="menu-item breeder-nav-item">
  <a href="/dashboard/siredam">
    <i class="fal fa-venus-mars fa-fw"></i> Sires & Dams
  </a>
</li>
<li class="menu-item breeder-nav-item">
  <a href="/dashboard/new-litter">
    <i class="fal fa-plus fa-fw"></i> Add Litter
  </a>
</li>
