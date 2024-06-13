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
	


<section class="intro text-center section-padding color-bg" id="about">
          <div class="container">
		    <!-- WELCOME TEXT -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">A little <span>about</span> me</h1><!-- Headline -->
				<!-- about / welcome text -->
                <p>Saya adalah bagaimana cara saya bisa menjalani hidup dengan bahagia. Poin dan aspek kehidupan tidak ada yang penting karena semua akan berakhir di liang lahat, selama masih hidup, nikmati susah hidupmu dengan bahagia bukan dengan keinginan suksesmu itu</p>
              </div>
            </div>
          </div>
        </section>




<!-- ==========================
        SERVICE SECTION 
        =========================== -->
        <section class="features text-center section-padding" id="service">
          <div class="container">
        <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">I do amazing things for clients</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
          <div class="services">
          <!-- Service Box 1 -->
                  <div class="col-md-4 wp2 item">
                    <div class="icon">
                      <i class="fa fa-camera"></i><!-- Icon -->
                    </div>
                    <h2>Photographer</h2><!-- Title -->
                    <p>Fotografi bagi saya adalah cara untuk menangkap momen-momen berharga dan mengabadikannya dalam bingkai kenangan yang abadi. Melalui lensa kamera, saya menemukan keindahan tersembunyi dalam setiap detail kehidupan sehari-hari.</p><!-- Description -->
                  </div>
          <!-- Service Box 2 -->
                  <div class="col-md-4 wp2 item delay-05s">
                    <div class="icon">
                      <i class="fa fa-desktop"></i><!-- Icon -->
                    </div>
                    <h2>Web Designer</h2><!-- Title -->
                    <p>Sebagai seorang web designer, saya menciptakan pengalaman digital yang menarik dan fungsional, menggabungkan estetika dengan kegunaan. Dengan setiap proyek, saya berusaha untuk membangun situs web yang tidak hanya indah secara visual, tetapi juga intuitif dan ramah pengguna.</p><!-- Description -->
                  </div>
          <!-- Service Box 3 -->
                  <div class="col-md-4 wp2 item delay-1s">
                    <div class="icon">
                      <i class="fa fa-cubes"></i><!-- Icon -->
                    </div>
                    <h2>3D Artist</h2><!-- Title -->
                    <p>Imajinasi menjadi nyata melalui model dan animasi tiga dimensi. Dengan setiap karya, saya menghidupkan dunia digital yang penuh detail dan dinamika, menciptakan visual yang memukau dan mendalam.</p><!-- Description -->
                  </div>
          </div>
                  <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </section>





		<div class="container-fluid">
		    <!-- About 1 -->
			<div class="row color-bg">
				<div class="col-md-6 nopadding features-intro-img">
					<div class="about-image" style="background-image:url(content/img/about1.png)"></div><!-- about image 1 -->
				</div>
				<div class="col-md-6 about-text">
					<h6>High quality webdesign</h6><!-- headline-->
					<p>Apakah Anda mencari desain web yang memukau dan fungsional untuk meningkatkan kehadiran online Anda? Sebagai seorang web designer freelance, saya siap membantu mewujudkan visi digital Anda. Dengan pengalaman dan keahlian dalam menciptakan situs web yang estetis dan user-friendly, saya akan bekerja sama dengan Anda untuk memastikan setiap elemen mencerminkan identitas brand Anda dan memberikan pengalaman terbaik bagi pengguna. Mari kita bangun bersama situs web yang tidak hanya indah, tetapi juga efektif dalam mencapai tujuan bisnis Anda. Hubungi saya hari ini dan mulai transformasi digital Anda!</p><br><!-- About Text 1 -->
					<a href="index.html#team" class="weight-outline-btn">Read more</a><!-- read more button  -->			
				</div>
			</div>
			<!-- About 2 -->
			<div class="row">
				<div class="col-md-6 about-text">
					<h6>Professional Photography</h6><!-- Headline -->
					<p>Apakah Anda ingin mengabadikan momen-momen spesial dengan sentuhan profesional? Sebagai seorang fotografer freelance, saya siap membantu Anda menangkap keindahan dan emosi dalam setiap jepretan. Dengan mata yang terlatih untuk detail dan kreativitas, saya akan bekerja sama dengan Anda untuk menciptakan foto-foto yang tidak hanya indah tetapi juga bermakna. Baik itu untuk acara spesial, potret pribadi, atau kebutuhan bisnis, saya akan memastikan setiap gambar menceritakan kisah unik Anda. Hubungi saya hari ini dan mari kita buat kenangan yang tak terlupakan bersama!</p><br><!-- About Text 2 -->
					<a href="index.html#team" class="weight-outline-btn">Read more</a>	<!-- read more button  -->				
				</div>
				<div class="col-md-6 nopadding features-intro-img">
					<div class="about-image" style="background-image:url(content/img/about2.png)"></div><!-- about image 2 -->
				</div>
			</div>
			<!-- About 3 -->
			<div class="row color-bg">
				<div class="col-md-6 nopadding features-intro-img">
					<div class="about-image" style="background-image:url(content/img/about3.png)"></div><!-- about image 3 -->
				</div>
				<div class="col-md-6 about-text">
					<h6>3d modeling and animations</h6><!-- Headline-->
					<p>Apakah Anda memerlukan visualisasi 3D yang menakjubkan untuk proyek Anda? Sebagai seorang 3D artist freelance, saya siap membantu mewujudkan ide-ide Anda menjadi realitas tiga dimensi. Dengan keahlian dalam modelisasi, tekstur, dan animasi, saya dapat menciptakan karya yang memukau dan realistis sesuai kebutuhan Anda, baik untuk game, film, arsitektur, atau produk. Setiap proyek akan mendapatkan perhatian detail dan kreativitas yang tinggi untuk memastikan hasil akhir yang memuaskan. Hubungi saya hari ini, dan mari kita bawa visi Anda ke dunia 3D yang menakjubkan!</p><br><!-- About Text 3 -->
					<a href="index.html#team" class="weight-outline-btn">Read more</a><!-- read more button  -->					
				</div>
			</div>
		</div>