<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
    <title>Bepe - Professional web designer and photographer</title>
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
		  <!-- Header Image -->
          <section class="hero" id="hero">
            <div class="container">
			  <!-- Slider Button (don't edit!)-->
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="index.html#"><span></span></a>
                </div>
              </div>
			  <!-- HEADER HEADLINE -->
              <div class="row">
                <div class="col-md-8 col-md-offset-1 inner">
                  <h1 class="animated fadeInDown">
                    ra<span style="color:#E04343;">d</span>ja<br/>
                    <span>B<span style="color:#FFE800">e</span>pe</span>
                  </h1><!-- Title -->
                  <h3 class="animated fadeInUp delay-05s"><span class="rotate">Web Designer,Photographer,3d Artist</span></h3><!-- Text Rotator -->
                </div>
              </div>
          </section>
		  <!-- Header Image End -->
        </header>
		<!-- ==========================
        HEADER SECTION END  
        =========================== -->
		
		
		
		
		<!-- ==========================
        ABOUT SECTION  
        =========================== -->
      
		<!-- ==========================
        ABOUT SECTION END
        =========================== -->	

		
		
		
		<!-- ==========================
        PORTFOLIO SECTION
    =========================== -->
       
		<!-- ==========================
        PORTFOLIO SECTION END
        =========================== -->
			


			
		<!-- ==========================
        CUSTOM SPACER
        =========================== -->
		
		<!-- ==========================
        CUSTOM SPACER END
        =========================== -->
		
		

    <!-- ==========================
        BLOG SECTION 
        =========================== -->

    <!-- ==========================
        BLOG SECTION END
        =========================== -->
    
        
		
		<!-- ==========================
        CLIENT SECTION 
        =========================== -->

		<!-- ==========================
        CLIENTS SECTION END
        =========================== -->
		
		
		
		
		
		<!-- ==========================
        NEWSLETTER SECTION 
        =========================== -->
   
		<!-- ==========================
        NEWSLETTER SECTION END
        =========================== -->

		
		
		<!-- ==========================
        CONTACT SECTION
        =========================== -->
     
		<!-- ==========================
        CONTACT SECTION END
        =========================== -->
		
		
		
		<!-- ==========================
        FOOTER SECTION
        =========================== -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>All Rights Reserved. &copy; 2015 <a href="http://www.themewagon.com">ThemeWagon</a>
              </div>
            </div>
          </div>
        </footer>
		<!-- ==========================
        FOOTER SECTION END
        =========================== -->		
		
		
    <!-- jQuery -->
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
	
    </body>
</html>