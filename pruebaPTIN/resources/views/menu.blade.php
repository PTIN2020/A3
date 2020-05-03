<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>VIA Airport</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('images/logoIco.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}"  /> <!--footer old -->
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"> 
	<!--dropdown-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!---->
	<script src="{{ asset('js/core.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<!--prueba-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  </head>
  <body>
	<!--Si quito esto no funciona-->
    <!--<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>-->
      <!-- Page Header-->
	  <header class="section page-header">
		<!-- RD Navbar-->
		<div class="rd-navbar-wrap">
		  <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
			<div class="rd-navbar-main-outer">
			  <div class="rd-navbar-main">
				<!-- RD Navbar Panel-->
				<div class="rd-navbar-panel"> 
				  <!-- RD Navbar Toggle-->
				  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
				  <!-- RD Navbar Brand-->
				  <div class="rd-navbar-brand"><a href="{{ URL::to('/')}}"><img class="brand-logo-light" src="{{ asset('images/logo.jpg') }}" alt="" width="140" height="57" srcset="{{ asset('images/logo.jpg') }}"/></a></div>
				</div>
				<div class="rd-navbar-main-element">
				  <div class="rd-navbar-nav-wrap">
					<!-- RD Navbar Nav-->
					<ul class="rd-navbar-nav">
					  <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ URL::to('/')}}">Home</a>
					  </li>
					  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ URL::to('/about')}}">SOBRE NOSALTRES</a>
					  </li>
					  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ URL::to('/faq')}}">FAQ</a>
					  </li>
					  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ URL::to('/contacte')}}">CONTACTE</a>
					  </li>
					  
						<!-- RD Navbar Dropdown -->
						<li class="rd-nav-item">
							<div class="dropdownMenu">
								<a class="rd-nav-link serveis href="#">SERVEIS</a>
								<ul class="rd-navbar-dropdown dropdown-content">
									<!--<li class="rd-nav-item">
									</li>-->
									<li class="rd-nav-item s1">
										<a href="{{ URL::to('/vip')}}">Serveis VIP</a>
									</li>
									<li class="rd-nav-item s1">
										<a href="{{ URL::to('/pmr')}}">Serveis PMR</a>
									</li>
									<li class="rd-nav-item s1">
										<a href="{{ URL::to('/geolocalitzacio')}}">Geolocalització</a>
									</li>
								</ul>
							</div>
						</li>
							
					  
					</ul><a class="button button-white button-sm" href="{{ URL::to('login')}}">Inicia sessió</a>
				  </div>
				</div><a class="button button-white button-sm" href="{{ URL::to('login')}}">Inicia sessió</a>
			  </div>
			</div>
		  </nav>
		</div>
	  </header>