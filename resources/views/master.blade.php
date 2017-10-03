<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/camera.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/google-map.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/mailform.css') }}">
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-migrate-1.2.1.js') }}"></script><!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="{{ URL::asset('js/device.min.js') }}"></script>
  </head>
  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="./">Visual</a></h1>
            <p class="brand_slogan">Design Studio</p>
          </div><a href="callto:#" class="fa-phone">800-2345-6789</a>
          <p>One of our representatives will happily contact you within 24 hours. For urgent needs call us at</p>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{url('about')}}">About</a>
                </li>
                <li class="{{ Request::is('offers') ? 'active' : '' }}"><a href="{{url('offers')}}">Offer</a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{url('contact')}}">Contacts</a>
                </li>
                @if(Auth::check())
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{url('admin/dashboard')}}">Admin Panel</a>
                </li>
                @endif
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      
      <main>
          @yield('content')
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>4578 Marmora Road,Glasgow<br/> D04 89GR</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#">info@demolink.org</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6789</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6790</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </footer>
    </div>
    <script src="{{ URL::asset('js/script.js') }}"></script>
  </body>
</html>