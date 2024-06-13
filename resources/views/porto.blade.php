<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
    <title>John Doe - Professional web designer and photographer</title>
    <!-- Bootstrap -->
    <link href="content/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font-Awesome -->
    <link href="content/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Lightbox -->
	<link href="content/assets/lightbox/css/lightbox.css" rel="stylesheet">
    <!-- Text Rotator-->
	<link href="content/assets/textrotator/simpletextrotator.css" rel="stylesheet">
	<!-- FlexSlider -->
    <link href="content/assets/flexslider/flexslider.css" rel="stylesheet">
	<!-- Theme Style -->
    <link href="content/css/style.css" rel="stylesheet">
	<!-- Animations -->
    <link href="content/css/animate.css" rel="stylesheet">
	<!-- Custom Favicon -->
	<link href="content/img/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
  </head>
    <body id="top">

	  	<!-- ==========================
        HEADER SECTION 
        =========================== -->
        <header id="home">
		    <!-- creative menu -->
            <div class="container-fluid">
              <div class="row">
                <div class="menu-wrap">
				<nav class="menu">
				    <!-- Menu Links -->
					<div class="icon-list">
						<a href="home"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
						<a href="about.blade.php"><i class="fa fa-fw fa-quote-left"></i><span>About</span></a>
						<a href="porto.blade.php"><i class="fa fa-fw fa-picture-o"></i><span>Portfolio</span></a>
						<a href="contact.blade.php"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
					</div>
				</nav>
			    </div>
			    <button class="menu-button" id="open-button"></button><!-- menu button -->
              </div><!--/row-->
            </div><!--/container-->


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- SmoothScroll -->           
    <script type="text/javascript" src="assets/smoothscroll/smoothscroll.js"></script>
    <!-- Bootstrap -->
    <script src="content/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="content/js/waypoints.min.js"></script>
    <!-- classie.js -->
	<script src="content/js/classie.js"></script>
    <!-- FlexSlider -->
    <script src="content/assets/flexslider/jquery.flexslider.js"></script>
	<!-- Modernizr -->
    <script src="content/js/modernizr.js"></script>
	<!-- Text Rotator -->
	<script src="content/assets/textrotator/jquery.simple-text-rotator.js"></script>
	<!-- Lightbox.js -->
    <script src="content/assets/lightbox/js/lightbox.min.js"></script>
    <!-- Google Maps --> 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
	<!-- Theme JavaScript Core -->
	<script src="content/js/main.js"></script>
	<script src="content/js/script.js"></script>

	<!-- GOOGLE MAPS DATA -->
    <script type="text/javascript">
    // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,
                
                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York 

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googlemaps');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
        }
	
    </script>
	
	<!-- TEXT ROTATOR SETTINGS -->
    <script type="text/javascript">
    $(".rotate").textrotator({
      animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 2000 // How many milliseconds until the next word show.
    });
    </script>
	

<section class="swag text-center" id="portfolio">
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <h1 class="arrow">
                Recent <span>Projects</span>
              </h1>
            </div>
          </div>
        </section>

        <div class="container">
          <div class="row row-offset-0">
  				 
          <!-- PORTFOLIO ITEM 1 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-01-large.jpg" data-lightbox="roadtrip" title="Project One - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-01-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  	
  	    <!-- PORTFOLIO ITEM 2 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-02-large.jpg" data-lightbox="roadtrip" title="Project Two - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-02-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  		<!-- PORTFOLIO ITEM 3 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-03-large.jpg" data-lightbox="roadtrip" title="Project Three - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-03-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  		<!-- PORTFOLIO ITEM 4 -->
          <div class="col-md-3 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-04-large.jpg" data-lightbox="roadtrip" title="Project Four - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-04-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  	             
          <!-- PORTFOLIO ITEM 5 -->
          <div class="col-md-3 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-05-large.jpg" data-lightbox="roadtrip" title="Project Five - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-05-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  	
  	    <!-- PORTFOLIO ITEM 6 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-06-large.jpg" data-lightbox="roadtrip" title="Project Six - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-06-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  		<!-- PORTFOLIO ITEM 7 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-07-large.jpg" data-lightbox="roadtrip" title="Project Seven - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-07-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  		<!-- PORTFOLIO ITEM 8 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="content/img/portfolio/portfolio-08-large.jpg" data-lightbox="roadtrip" title="Project Eight - Lorem Ipsum"><img class="grayscale" src="content/img/portfolio/portfolio-08-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
        </div><!--/row-->
      </div><!--/.container-->