<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CPSC531 Project | Welcome</title>
  <link rel="stylesheet" href="{{asset('css/foundation.css');}}" />
  <link rel="stylesheet" href="{{asset('packages/foundation-icons/foundation-icons.css');}}" />
  <script src="{{asset('js/vendor/modernizr.js');}}"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
</head>
<body>

  <div class="fixed">
    <nav class="top-bar" data-topbar role="navigation" style="top: 0px">
      <ul class="title-area">
        <li class="name">
          <h1><a href="/"><i class="fi-social-twitter"></i> Custom Twitter Analysis</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          @if(Confide::user())
          <li><a>
              <img style="height : 43px; position: 0;" src="http://www.gravatar.com/avatar/{{md5(trim(strtolower( Confide::user()->email )))}}">
            Signed in as: {{Confide::user()->username}}</a></li>
          <li class="active"><a href="{{URL('users/logout')}}">Log Out</a></li>
          @else
          <li class="active"><a href="{{URL('users/login')}}">Log In</a></li>
          @endif
          @if(Confide::user())
          <li class="has-dropdown">
            <a href="#">Menu</a>
            <ul class="dropdown">
              <li><a href="/groups/create">Create Group</a></li>
              <li class="active"><a href="/groups/list">View Groups</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </section>
    </nav>
  </div>

  <div id="clear" style="height: 25px"></div>

  <div id="content" class="row panel">
    @yield('content')
  </div>

  <div id="clear" style="height: 100px"></div>

  <div class="icon-bar four-up" style="margin-bottom: 0; bottom: 0; position: fixed;">
    <a class="item" href="/" style="padding: 8px">
      <i class="fi-home"></i>
      <label>Home</label>
    </a>
    <a class="item" id="bookmarkme" href="#" rel="sidebar" title="bookmark this page" style="padding: 8px">
      <i class="fi-bookmark"></i>
      <label>Bookmark</label>
    </a>
    <a class="item" href="/" style="padding: 8px">
      <i class="fi-info"></i>
      <label>Info</label>
    </a>
    <a class="item" href="mailto:jonathan.sudhakar@csu.fullerton.edu" style="padding: 8px">
      <i class="fi-mail"></i>
      <label>Mail</label>
    </a>
  </div>

  <script src="{{asset('js/vendor/jquery.js');}}"></script>
  <script src="{{asset('js/foundation.min.js');}}"></script>
  <script>
    $(document).foundation();

    $(function() {
      $('#bookmarkme').click(function() {
        if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
          window.sidebar.addPanel(document.title,window.location.href,'');
        } else if(window.external && ('AddFavorite' in window.external)) { // IE Favorite
          window.external.AddFavorite(location.href,document.title);
        } else if(window.opera && window.print) { // Opera Hotlist
          this.title=document.title;
          return true;
        } else { // webkit - safari/chrome
          alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');
        }
      });
    });
  </script>

  <style type="text/css">
    body {
      background-color: #EEEEEE;
    }

    #content {
      background-color: #FFFFFF;
    }
  </style>
</body>
</html>
