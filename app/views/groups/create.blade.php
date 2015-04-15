@section('content')
<div class="row">
  <div class="large-12 columns">
    <span><h1 style="display: inline;"><i class="fi-results-demographics"></h1><h2 style="display: inline;"></i> Create New User Group</h2></span>
  </div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row">

  <div class="large-12 columns">
    <form method="POST" action="{{{ URL::to('/groups/create') }}}">
      <fieldset>
        <legend>User Group</legend>

        <label>Group Name
          <input type="text" name="name" placeholder="Group Identifier">
        </label>
        <label>Group Description
          <textarea name="description" placeholder="Group Description"> </textarea>
        </label>
        <input type="submit" class="button" value="Create">
      </fieldset>
    </form>
  </div>

</div>

@stop
