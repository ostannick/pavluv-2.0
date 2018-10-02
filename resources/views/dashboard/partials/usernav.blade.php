<li class="divider buyer-nav-item @if(Auth::user()->isBreeder()) pav-display-none @endif " data-content="{{Auth::user()->name}}"></li>
<li class="menu-item buyer-nav-item @if(Auth::user()->isBreeder()) pav-display-none @endif ">
  <a href="/dashboard/profile">
    <i class="fal fa-user-edit fa-fw"></i> Edit Profile
  </a>
</li>
<li class="menu-item buyer-nav-item @if(Auth::user()->isBreeder()) pav-display-none @endif ">
  <a href="#">
    <i class="fal fa-file-invoice fa-fw"></i> My Applications
  </a>
</li>
<li class="menu-item buyer-nav-item @if(Auth::user()->isBreeder()) pav-display-none @endif ">
  <a href="#">
    <i class="fal fa-paw fa-fw"></i> My Puppies
  </a>
</li>
<li class="menu-item buyer-nav-item @if(Auth::user()->isBreeder()) pav-display-none @endif ">
  <a href="/dashboard/questionnaire">
    <i class="fal fa-question-circle fa-fw"></i> My Questionnaire
  </a>
</li>
