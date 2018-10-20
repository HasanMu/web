<!DOCTYPE html>
<html>
<head>
    <title>XI RPL 2 || TENTANG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
<body>

  @include('partial.nav-galeri')
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bgrpl.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 text-center ftco-animate fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }" style="transform: translateZ(0px) translateY(4.2%);">
              <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 0.904; transform: translateZ(0px) translateY(1.8%);">Galeri</h1>
              <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 0.904; transform: translateZ(0px) translateY(1.8%);"><span class="mr-2"><a href="/">Beranda</a></span> <span>Galleri</span></p>
            </div>
          </div>
        </div>
    </div>

    <section class="ftco-gallery">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center fadeInUp ftco-animated">
              <h2 class="mb-4">Galeri</h2>
              <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
              <p class="mt-5">Menjaga sebuah kebersamaan adalah hal yang sulit.</p>
            </div>
          </div>
        </div>
        <div class="container-wrap">
          <div class="row no-gutters">
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/rpl.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/rpl.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/bgrpl.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/bgrpl.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/rpl1.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/rpl1.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/rpl2.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/rpl2.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
            <!-- <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/.jpg') }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div> -->
          </div>
        </div>
      </section>


    @include('partial.footer')

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>