<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/light-bootstrap-dashboard.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/demo.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::asset('css/pe-icon-7-stroke.css') }}">
        
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="http://www.creative-tim.com" class="simple-text">
                            Visual Design Studio
                        </a>
                    </div>
                
                    <ul class="nav">
                        <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                            <a href="{{url('admin/dashboard')}}">
                                <i class="pe-7s-graph"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/profile') ? 'active' : '' }}">
                            <a href="{{url('admin/profile')}}">
                                <i class="pe-7s-user"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/offers') ? 'active' : '' }}">
                            <a href="{{url('admin/offers')}}">
                                <i class="pe-7s-note2"></i>
                                <p>Oferta</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        
            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Dashboard</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p class="hidden-lg hidden-md">Dashboard</p>
                                    </a>
                                </li>
                                
                            </ul>
                        
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li>
                                    
                                </li>
                                <li class="separator hidden-lg hidden-md"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            
            
                <div class="content">
                    <div class="container-fluid">
                         @yield('content')
                    </div>
                </div>
            
            
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="/">
                                        Strona główna
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </footer>
            
            </div>
        </div>
        <script src="{{ URL::asset('js/jquery-1.10.2.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-checkbox-radio-switch.js') }}"></script>
        <script src="{{ URL::asset('js/chartist.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-notify.js') }}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="{{ URL::asset('js/light-bootstrap-dashboard.js') }}"></script>
        <script src="{{ URL::asset('js/demo.js') }}"></script>
        @if(Request::is('admin/dashboard'))
        <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Witamy Cie w panelu administracyjnym! Życzymy miłego dnia!"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
        @endif
        
    </body>
</html>