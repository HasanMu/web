<!DOCTYPE html>
<html>
<head>
    <title>XI RPL 2 || CONTACT</title>
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

  @include('partial.nav-contact')
  <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('images/bgrpl.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
        	<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-6 text-center ftco-animate fadeInUp ftco-animated" data-scrollax=" properties: { translateY: '70%' }" style="transform: translateZ(0px) translateY(0%);">
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);">Contact Us</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="opacity: 1; transform: translateZ(0px) translateY(0%);"><span class="mr-2"><a href="/">Beranda</a></span> <span>Contact Us</span></p>
              </div>
          </div>
        </div>
  </div>

    <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
            <div class="col-md-4 contact-info ftco-animate fadeInUp ftco-animated">
              <div class="row">
                <div class="col-md-12 mb-4">
                  <h2 class="h4">Informasi Kontak</h2>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>Alamat:</span> Jl. Situtarate - terusan cibaduyut, Kab. Bandung - Jawa Barat</p>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>No Telp:</span> <a href="tel://+628812098148">+62 881 2098 148</a></p>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>Email:</span> <a href="mailto:obitorin.or@gmail.com">obitorin.or@gmail.com</a></p>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>Website:</span> <a href="/">XI RPL 2</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate fadeInUp ftco-animated">
              <form action="#" class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nama Lengkap"  required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Alamat Email" required>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject"  required>
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"  required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
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