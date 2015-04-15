@section('content')
<div class="row">
  <div class="large-12 columns">
    <span><h1 style="display: inline;"><i class="fi-results-demographics"></h1><h2 style="display: inline;"></i> Forgot Password??</h2></span>
  </div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row">

  <div class="large-12 columns">
    <form method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
      <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
      <fieldset>
        <legend>Forgot Password Form</legend>

        <div class="form-group">
          <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
          <div class="input-append input-group">
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            <span class="input-group-btn">
              <input class="button" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
            </span>
          </div>
        </div>


        @if (Session::get('error'))
        <div class="alert-box alert">
          {{{ Session::get('error') }}}
        </div>
        @endif

        @if (Session::get('notice'))
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif

      </form>
    </div>

  </div>

  @stop
