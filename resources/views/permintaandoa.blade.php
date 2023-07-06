<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Permintaan Doa Online </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->
        <!-- Lato -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/landing/images/favicon-16x16.png') }}">

        <!-- CSS -->

        <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/landing/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/landing/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/landing/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/landing/css/main.css') }}">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/landing/css/responsive.css') }}">
    </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    <!-- 
	    Header start
	    ==================== -->
	    <div class="navbar-default navbar-fixed-top" id="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="{{route('home')}}">
                        <img class="logo-1" style="width: 150px;  " src="{{ asset('assets/landing/images/logohci.svg') }}" alt="LOGO">
                        <img class="logo-2" style="width: 150px;  " src="{{ asset('assets/landing/images/logohci.svg') }} "alt="LOGO">
	                    
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <nav class="collapse navbar-collapse" id="navbar">
	                <ul class="nav navbar-nav navbar-right font-weight-bold" id="top-nav">
	                    <li class="current"><a href="#body">Home</a></li>
	                    <li><a href="#service">Program</a></li>
	                    <li><a href="#contact">Contact</a></li>
                        <li><a href="{{route('login')}}">Admin</a></li>
	                </ul>
	            </nav><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </div>

	    <section id="hero-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class="block">
	                        <h1 class="wow fadeInDown">Kirim Permintaan Doa Anda!</h1>
	                        <p class="wow fadeInDown" data-wow-delay="0.3s">Klik Tombol dibawah ini untuk mengirimkan permintaan doa anda! </p>
	                        <div class="wow fadeInDown" data-wow-delay="0.3s">
	                        	<a class="btn btn-default btn-home" href="{{route('formdoa')}}" role="button">Isi Permintaan Doa</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6 wow zoomIn">
	                    <div class="block">
	                        <div class="counter text-center">
	                            <ul id="countdown_dashboard">
                                    <img class="doa" style=" width:95%; height: auto;  " src="{{ asset('assets/landing/images/berdoa.png') }}" alt="Doa">
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
        
        

        <!-- 
        Service start
        ==================== -->
        <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <h2>Program</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft">
                        <div class="service">
                            <div class="icon-box">
                            	<a href="https://hopechannel.id/shows/itukeren"><img src="{{ asset('assets/landing/images/ITUKEREN.pn') }}g" alt="" class="img-responsive"> </a>  
                            </div>
                            <div class="caption">
                                <h3>#ItuKeren</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="service">
                            <div class="icon-box">
                            	<a href="https://hopechannel.id/shows/hope-music"><img src="{{ asset('assets/landing/images/HOPEMUSIC.png') }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="caption">
                            	<h3>Hope Music</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="service">
                            <div class="icon-box">
                            	<a href="https://hopechannel.id/shows/kamu-bisa"><img src="{{ asset('assets/landing/images/KAMUBISA.png') }}" alt=""  class="img-responsive"></a>
                            </div>
                            <div class="caption">
                                <h3>Kamu Bisa</h3>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                            	<a href="https://hopechannel.id/shows/total-health"><img src="{{ asset('assets/landing/images/HIDUPSEHAT.png') }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="caption">
                                <h3>Total Health</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                            	<a href="https://hopechannel.id/shows/faithbook"><img src="{{ asset('assets/landing/images/FAITHBOOK.png') }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="caption">
                                <h3>Faithbook</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                            	<a href="https://hopechannel.id/shows/tape-inspiration"><img src="{{ asset('assets/landing/images/TAPE.png') }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="caption">
                                <h3>TaPe</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                            	<a href="https://hopechannel.id/shows/secangkir-pengharapan"><img src="{{ asset('assets/landing/images/SECANGKIRPENGHARAPAN.png') }}" alt="" class="img-responsive"></a>
                            <div class="caption">
                                <h3>Secangkir Pengharapan</h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->

        

        <!-- 
        Contact start
        ==================== -->
        <section id="contact" class="section">
            <div class="container">
                <div class="row">
                   
                    <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
						<div class="block text-left">
							<div class="sub-heading">
								<h4>Contact Address</h4>
								<p>Gedung Pertemuan Advent,Blok A, Kav 4-5, Jakarta Selatan, Indonesia </p>
							</div>
							<address class="address">
                                <hr>
								<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.15758779474!2d106.84406971419375!3d-6.242952362867562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3aac80ae4b3%3A0xdc47136341bc9b9d!2sHope%20Channel%20Indonesia!5e0!3m2!1sid!2sid!4v1678877606364!5m2!1sid!2sid" width="auto" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                                <hr>
                                
								
                                
							</address>
						</div>
                    </div>

                    <!-- <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    	<div class="form-group">
                    	    <form action="#" method="post" id="contact-form">
                    	        <div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Your Name" name="name">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	            <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                    	        </div>
                    	        <button class="btn btn-send" type="submit">Send me</button>
                    	    </form>

                    	    <div id="success">
                    	        <p>Your Message was sent successfully</p>
                    	    </div>
                    	    <div id="error">
                    	        <p>Your Message was not sent successfully</p>
                    	    </div>
                    	</div>
                    </div> -->
                </div>
            </div>
        </section>

        <section clas="wow fadeInUp">
        	<div class="map-wrapper">
        	</div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; 2023 <a href="http://www.hopechannel.id">Hope Channel Indonesia - Televisi yang mengubah hidup Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="{{ asset('assets/landing/js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <script src="{{ asset('assets/landing/js/vendor/jquery-1.10.2.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="{{ asset('assets/landing/js/jquery.lwtCountdown-1.0.js') }}"></script>
        <script src="{{ asset('assets/landing/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/landing/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/landing/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/landing/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets/landing/js/jquery.nav.js') }}"></script>
        <script src="{{ asset('assets/landing/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/landing/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/landing/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/landing/js/main.js') }}"></script>
        
    </body>
</html>
