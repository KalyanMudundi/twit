@section('content')
<div class="row">
  <div class="large-12 columns">
    <span><h1 style="display: inline;"><i class="fi-results-demographics"></h1><h2 style="display: inline;"></i> Group: <span style="color: #008cba;"> {{$group->name}}</span></h2></span>
    <span class="right"><a href="{{ URL::to('/groups/analytics/'.$group->id) }}"> View Analytics </a></span>
  </div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row">

  <div class="large-12 columns">
    <form method="POST" action="{{{ URL::to('/tweeter/create') }}}">
      <input type="hidden" name="groupid" value="{{$group->id}}">
      <fieldset>
        <legend>Add user to group</legend>

        <label>Twitter Handle
          <input type="text" name="handle" placeholder="Twitter Handle">
        </label>
        <label>Twitter ID
          <input type="text" name="twitterid" placeholder="Twitter Identifier">
        </label>
        <input type="submit" class="button" value="Add">
      </fieldset>
    </form>
  </div>

</div>

<div class="row">

  <div class="large-12 columns">

      <fieldset>
        <legend>Handles in group</legend>

        @foreach($tweeters as $tweeter)
        <span class="label" style="font-size: 15px;">{{"@".$tweeter->handle}}</span>
        @endforeach

      </fieldset>
  </div>

</div>

@stop
