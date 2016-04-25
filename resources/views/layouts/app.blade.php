<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sun Apr 17 2016 22:14:04 GMT+0000 (UTC) -->
<html data-wf-site="56f894ddcf3bbef45412d776" data-wf-page="56f894ddcf3bbef45412d779">
<head>
  <meta charset="utf-8">
  <title>Aventura</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/aventura.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:300,regular,500"]
      }
    });
  </script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
</head>
<body>
<div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation-bar">
    <div class="w-container nav-bar-links-container"><img width="70" src="images/Drawing-layerExport (1).jpeg" class="aventura-icon">
    <a href="{{ url('/') }}" class="w-nav-brand brand-link"><h1 class="brand-text">Aventura</h1></a>
        <nav role="navigation" class="w-nav-menu w-clearfix navigation-menu">
            @if (Auth::guest())
              <a href="index.html" class="w-nav-link navigation-link">&nbsp;Help</a>
              <a href="{{ url('/login') }}" class="w-nav-link navigation-link">Log In</a>
              <a href="{{ url('/register') }}" class="w-nav-link navigation-link">Sign Up</a>
            @else
              <a href="{{ url('eventadd') }}" class="w-button event-details-button" style="height: 60px; padding-top: 20px; width: 140px; border-radius: 0px;"><img src="images/plus_icon.png" style="height: 20px;width: 30px; padding-right: 10px; " >Add Event</a>
              <a href="index.html" class="w-nav-link navigation-link">&nbsp;Help</a>
              <a href="{{ url('cart') }}" class="w-nav-link navigation-link">0</a>
              <a href="{{ url('cart') }}" ><img width="58" src="images/trolly.png"></a>
              <ul class="nav navbar-nav navbar-right" >
              <!-- Authentication Links -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="height: 59px; padding-top: 20px;" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                  </ul>
                </li>
              </ul>
            @endif
        </nav>
        <div class="w-nav-button hamburger-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
