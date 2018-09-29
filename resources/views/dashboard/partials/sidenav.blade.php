<ul class="menu">
  @auth
    <!--AVATAR AND NAME-->
  <div class="pav-align-center pav-padding-8">
    <figure class="avatar avatar-xl">
      <img src="/{{Auth::user()->avatar()}}">
    </figure>
  </div>
  <div class="pav-align-center pav-padding-8">
    <h4>{{Auth::user()->name}}</h4>
  </div>

  <!--MESSAGES AND NOTIFICATIONS-->
  <li class="divider">
  <li class="menu-item">
    <a href="#">
      <i class="fal fa-comment-alt fa-fw"></i> Messages
    </a>
  </li>
  <li class="menu-item">
    <div class="menu-badge">
      <label class="label label-primary">2</label>
    </div>
    <a href="/dashboard/notifications">
      <i class="fal fa-bell fa-fw"></i> Notifications
    </a>
  </li>

  @if(Auth::user()->isBreeder())
    @include('dashboard.partials.breedernav')
  @endif

  <!--INDEPENDENT USER SECTION-->
  <li class="divider" data-content="Nick Ostan"></li>
  <li class="menu-item">
    <a href="/dashboard/profile">
      <i class="fal fa-user-edit fa-fw"></i> Edit Profile
    </a>
  </li>
  <li class="menu-item">
    <a href="#">
      <i class="fal fa-file-invoice fa-fw"></i> My Applications
    </a>
  </li>
  <li class="menu-item">
    <a href="#">
      <i class="fal fa-paw fa-fw"></i> My Puppies
    </a>
  </li>
  <li class="menu-item">
    <a href="/dashboard/questionnaire">
      <i class="fal fa-question-circle fa-fw"></i> My Questionnaire
    </a>
  </li>
  <li class="menu-item">
    <a href="/dashboard/billing">
      <i class="fal fa-dollar-sign fa-fw"></i> Billing
    </a>
  </li>
  <li class="menu-item">
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out fa-fw"></i> Log Out</a>
  </li>
  @endauth
  <li class="divider" data-content="Site Links"></li>
  <li class="menu-item">
    <a href="/">
      <i class="fal fa-fw fa-heart"></i> Home
    </a>
  </li>
  <li class="menu-item">
    <a href="#">
      <i class="fal fa-fw fa-search"></i> Search Now
    </a>
  </li>
  <li class="menu-item">
    <a href="#">
      <i class="fal fa-fw fa-book-heart"></i> Wikibreedia
    </a>
  </li>
  <li class="menu-item">
    <a href="#">
      <i class="fab fa-fw fa-blogger-b"></i> PavLuv's Blog
    </a>
  </li>

</ul>
