@section('content')
<div class="row">
  <div class="large-12 columns">
    <span><h1 style="display: inline;"><i class="fi-results-demographics"></h1><h2 style="display: inline;"></i> Sign Into Your Account</h2></span>
  </div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row">

  <div class="large-12 columns">
    <form method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
      <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
      <fieldset>
        <legend>Log In</legend>

        <div class="form-group">
          <label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
          <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
        </div>
        <div class="form-group">
          <label for="password">
            {{{ Lang::get('confide::confide.password') }}}
          </label>
          <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
          <p class="help-block">
            <a href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
          </p>
        </div>
        <div class="checkbox">
          <label for="remember">
            <input type="hidden" name="remember" value="0">
            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> {{{ Lang::get('confide::confide.login.remember') }}}
          </label>
        </div>
        @if (Session::get('error'))
        <div class="alert-box alert">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
        <div class="alert-box">{{{ Session::get('notice') }}}</div>
        @endif
        <div class="form-group">
          <button tabindex="3" type="submit" class="btn btn-default">{{{ Lang::get('confide::confide.login.submit') }}}</button>
        </div>
      </fieldset>
      <div class="right"><a href="{{URL('users/create')}}" class="button">Sign Up Now</a></div>

      </form>
    </div>

  </div>

  @stop
