@section('content')
<div class="row">
  <div class="large-12 columns">
    <span><h1 style="display: inline;"><i class="fi-results-demographics"></h1><h2 style="display: inline;"></i> Sign Up</h2></span>
  </div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row">

  <div class="large-12 columns">
    <form method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">
      <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
      <fieldset>
        <legend>Sign Up Form</legend>

        <div class="form-group">
          <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
          <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
        </div>
        <div class="form-group">
          <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
          <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
        </div>
        <div class="form-group">
          <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
          <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
        </div>
        <div class="form-group">
          <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
          <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
        </div>

        @if (Session::get('error'))
        <div class="alert-box alert">
          @if (is_array(Session::get('error')))
          {{ head(Session::get('error')) }}
          @endif
        </div>
        @endif

        @if (Session::get('notice'))
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </form>
  </div>

</div>

@stop
