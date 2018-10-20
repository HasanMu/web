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

  @include('partial.nav-tentang')
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bgrpl.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 text-center ftco-animate fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }" style="transform: translateZ(0px) translateY(4.2%);">
              <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 0.904; transform: translateZ(0px) translateY(1.8%);">Tentang</h1>
              <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 0.904; transform: translateZ(0px) translateY(1.8%);"><span class="mr-2"><a href="/">Beranda</a></span> <span>Tentang</span></p>
            </div>
          </div>
        </div>
      </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="img img-about align-self-stretch" style="background-image: url({{ asset('images/bgrpl.jpg')}}); width: 100%;"></div>
        </div>
          <div class="col-md-6 pl-md-5 ftco-animate fadeInUp ftco-animated">
            <h2 class="mb-4">Website <font color="#d8a268">XI RPL 2</font> SMK ASSALAAM</h2>
            <p>Rekayasa Perangkat Lunak (RPL) merupakan salah satu jurusan di SMK Assalaam Bandung yang berdiri sejak tahun 2013, bidang kejuruan RPL sendiri memiliki 3 ruang kelas, XI RPl 2 adalah salah satu ruang kelas yang mempunyai ceritanya tersendiri, kelas kecil berjuta kenangan. kelas yang memiliki murid yang serba bisa, bahkan hal humor sering dijumpai di kelas yang hebat ini. Ini adalah salah satu bukti ke kreatif-an siswa XI RPL 2.</p>
          </div>
        </div>
      </div>
    </section>

    @include('partial.penegasan-auth')

    @include('partial.persentase')

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