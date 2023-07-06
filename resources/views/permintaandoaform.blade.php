
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
	                    <li class="current"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('login')}}">Admin</a></li>
	                </ul>
	            </nav><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </div>

	    <!-- <section id="hero-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class="block">
	                        <h1 class="wow fadeInDown">Kirim Permintaan Doa Anda!</h1>
	                        <p class="wow fadeInDown" data-wow-delay="0.3s">Klink Tombol dibawah ini untuk mengirimkan permintaan doa anda! </p>
	                        <div class="wow fadeInDown" data-wow-delay="0.3s">
	                        	<a class="btn btn-default btn-home" href="#service" role="button">Isi Permintaan Doa</a>
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
	            </div>
	        </div>
	    </section> -->



        <!-- 
        About start
        ==================== -->
        

        <!-- 
        Service start
        ==================== -->
        <section id=" service" class="section">
            <div class="container">
            <div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
  @if ($errors->any())
                  <div class="alert alert-danger">
                  ERROR! Pastikan Anda Mengisi Semua Form!
                  <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                  </div>
            @endif

    <form id="service" class="section"  action="{{ route('permintaan.store') }}" method="POST">
        <div class="formbold-steps">
        @if(session()->get('success'))
                  <div class="alert alert-success">
                  {{ session()->get('success') }}
                  </div>
                @endif
            <ul>
                <li class="formbold-step-menu1 active">
               <span> <img  sizes="20x20"   src="{{ asset('assets/landing/images/favicon-16x16.png') }} "alt="LOGO">
               </span>
                    Form Data Doa
                </li>
              

               
                       </div>
                       {{ csrf_field() }}

        <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
            <div>
                <label for="nama" class="formbold-form-label"> Nama</label>
                <input
                type="text"
                name="nama"
                placeholder="Nama"
                id="nama"
                class="formbold-form-input-text"
                />
            </div>
            </div>
          </div>
            <div class="formbold-form-step-1 active">
            <div class="formbold-input-flex">
            <div>
                <label for="notlp" class="formbold-form-label"> Nomor Telepon </label>
                <input
                type="text"
                name="notlp"
                placeholder="No Telepon"
                id="notlp"
                class="formbold-form-input-text"
                />
            </div>
            </div>
         

          <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
          <div>
                  <label for="email" class="formbold-form-label"> Email Address </label>
                  <input
                  type="email"
                  name="email"
                  placeholder="example@mail.com"
                  id="email"
                  class="formbold-form-input-text"
                  />
              </div>
              </div>
            
            </div>
              <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
            <div>
                <label for="domisili" class="formbold-form-label"> Domisili </label>
                <input
                type="text"
                name="domisili"
                placeholder="Domisili"
                id="domisili"
                class="formbold-form-input-text"
                />
            </div>
            
          </div>

          <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
          <div>
                  <label for="agama" class="formbold-form-label"> Agama </label>
                  <input
                  type="text"
                  name="agama"
                  placeholder="Agama"
                  id="agama"
                  class="formbold-form-input-text"
                  />
              </div>
              </div>

              </div>
              <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
            <div>
            <label for="kategori" class="formbold-form-label"> Kategori Doa </label>
                      <select class="form-control" name="kategori_id">
                          <option value="">Pilih Kategori Doa Anda </option>
                          @foreach($kategoris as $kategoris)
                          <option value="{{ $kategoris->id }}">
                          {{ $kategoris->kategori_name }}
                          </option>
                          @endforeach
                        </select>

          </div>
          </div>

          <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
          <div>
                  <label for="acara" class="formbold-form-label"> Acara </label>
                      <select class="form-control" name="acara_id">
                          <option value="">Pilih Acara Yang Sedang Berlangsung </option>
                          @foreach($acaras as $acaras)
                          <option value="{{ $acaras->id }}">
                          {{ $acaras->acara_name }}
                          </option>
                          @endforeach
                        </select>
              </div>
          </div>

          <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
  
            <div>
            <label for="doa" class="formbold-form-label"> Isi Permintaan Doa Anda </label>
            <textarea
              rows="6"
              name="doa"
              id="doa"
              placeholder=""
              class="formbold-form-input-text"
            ></textarea>
          </div>
          </div>
          </div>

          <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
          <div class="hide" >
                  <label for="status" class="formbold-form-label"> Status </label>
                    <select  name="status" id="status">
                      <option value="No" selected></option>
                    </select>
              </div>

          </div>
         
        </div>


        <div class="formbold-form-btn-wrapper">
          

          <button class="formbold-btn">
              Kirim Doa Anda!
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1675_1807)">
              <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0_1675_1807">
              <rect width="16" height="16" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </button>
        </div>
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0px;
  }

  .formbold-form-wrapper {
    
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }

  .formbold-steps {
    padding-bottom: 18px;
    margin-bottom: 35px;
    border-bottom: 1px solid #DDE3EC;
  }
  .formbold-steps ul {
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
    gap: 40px;
  }
  .formbold-steps li {
    display: flex;
    align-items: center;
    gap: 14px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-steps li span {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #DDE3EC;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-steps li.active {
    color: #07074D;;
  }
  .formbold-steps li.active span {
    background: #6A64F1;
    color: #FFFFFF;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 22px;
  }
  .formbold-input-flex > div {
    width: 100%;
  }
  .formbold-form-input-text {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #DDE3EC;
    background: #FFFFFF;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074D;
    text-align:left;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-confirm {
    border-bottom: 1px solid #DDE3EC;
    padding-bottom: 35px;
  }
  .formbold-form-confirm p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-bottom: 22px;
    width: 75%;
  }
  .formbold-form-confirm > div {
    display: flex;
    gap: 15px;
  }

  .formbold-confirm-btn {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #FFFFFF;
    border: 0.5px solid #DDE3EC;
    border-radius: 5px;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    cursor: pointer;
    padding: 10px 20px;
    transition: all .3s ease-in-out;
  }
  .formbold-confirm-btn {
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
  }
  .formbold-confirm-btn.active {
    background: #6A64F1;
    color: #FFFFFF;
  }

  .formbold-form-step-1,
  .formbold-form-step-2,
  .formbold-form-step-3 {
    display: none;
  }
  .formbold-form-step-1.active,
  .formbold-form-step-2.active,
  .formbold-form-step-3.active {
    display: block;
  }

  .formbold-form-btn-wrapper {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 25px;
    margin-top: 25px;
  }
  .formbold-back-btn {
    cursor: pointer;
    background: #FFFFFF;
    border: none;
    color: #07074D;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    display: none;
  }
  .formbold-back-btn.active {
    display: block;
  }
  .formbold-btn {
    display: flex;
    align-items: center;
    
    gap: 5px;
    font-size: 16px;
    border-radius: 5px;
    padding: 10px 25px;
    border: none;
    font-weight: 500;
    background-color: #6A64F1;
    color: white;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

</style>

                    
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->

        

        <!-- 
        Contact start
        ==================== -->
       

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
