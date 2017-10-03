@extends('master')
@section('content')
<section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="{{ URL::asset('images/page-1_slide01.jpg') }}">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Helping with any of your business needs!</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="{{ URL::asset('images/page-1_slide02.jpg') }}">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">The best strategies to attract new business</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="{{ URL::asset('images/page-1_slide03.jpg') }}">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">A wide range of global business information</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container banner_wr">
            <ul class="banner">
              <li>
                <div class="fa-globe"></div>
                <h3>Global<br/>research</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-lightbulb-o"></div>
                <h3>Creative<br/>ideas</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-cog"></div>
                <h3>New<br/>services</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-briefcase"></div>
                <h3>Pro<br/>management</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section>
        <section class="well ins1">
          <div class="container hr">
            
          </div>
        </section>
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_6">
                <h2>About</h2><img src="{{ URL::asset('images/page-1_img01.jpg') }}" alt="">
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><a href="#" class="btn">Read more</a>
              </div>
              <div class="grid_6">
                <h2>Services</h2>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <ul class="marked-list">
                  <li><a href="#">Lorem ipsum dolor sit amet </a></li>
                  <li><a href="#">Conse ctetur adipisicing</a></li>
                  <li><a href="#">Elit sed do eiusmod tempor</a></li>
                  <li><a href="#">Incididunt ut labore</a></li>
                  <li><a href="#">Et dolore magna aliqua</a></li>
                  <li><a href="#">Ut enim ad minim veniam</a></li>
                  <li><a href="#">Conse ctetur adipisicing</a></li>
                  <li><a href="#">Elit sed do eiusmod tempor</a></li>
                </ul><a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </section>
@stop