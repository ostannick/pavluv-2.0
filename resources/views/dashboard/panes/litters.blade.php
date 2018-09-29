@if(count(Auth::user()->kennel->unsavedLitters()))
<h4 class="pavluv-red"><i class="fal fa-fw fa-exclamation-circle"></i> Unfinished Litters</h4>
<p>It looks like you have some litters that you didn't get around to finishing. Click below to resume your progress.</p>
<ul class="link-list-vertical">
@foreach(Auth::user()->kennel->unsavedLitters() as $litter)
  <li>
    <form action="/litters/{{$litter->id}}" method="POST">
      @csrf
      <input type="hidden" name="_method" value="delete">
      <button class="btn btn-default"><i class="fal fa-fw fa-trash-alt"></i> </button>
      <a href="/litters/{{$litter->id}}">Click here to edit {{$litter->sire->name}} and {{$litter->dam->name}}'s litter that you created {{\Carbon\Carbon::parse($litter->created_at)->diffForHumans()}}. </a>
    </form>
  </li>
@endforeach
</ul>
<hr class="pav-divider">
@endif

@if(count($sires) == 0 && count($dams) == 0)
<div class="pav-align-center">
  <h4 class="pavluv-red"><i class="fal fa-fw fa-exclamation-circle"></i> Hold on there, partner...</h4>
  <p>You'll need to add at least one sire and one dam before you can create a litter. Puppies gotta' have parents!</p>
  <p><a href="/dashboard/siredam">Click here to show us your sires and dams</a></p>
</div>

@endif

@if(count($sires) != 0 && count($dams) != 0)
  @include('dashboard.partials.litter-wizard')
@endif
