@section('content')
<div class="row">
  <div class="large-12 columns">
    <span><h1 style="display: inline;"><i class="fi-results-demographics"></h1><h2 style="display: inline;"></i> Groups
  </div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row">

  <div class="large-12 columns">
    <form method="POST" action="{{{ URL::to('/tweeter/create') }}}">

      <fieldset>
        <legend>Your Groups</legend>

        @foreach($groups as $group)
        <a class="button" href="{{URL('groups/group/'.$group->id)}}">{{$group->name}}</a>
        @endforeach

      </fieldset>

  </div>

</div>

@stop
