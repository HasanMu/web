<!DOCTYPE html>
<html lang="en">
  <head>
    <title>XI RPL 2 || SMK ASSALAAM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
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

    @include('partial-users.nav-walikelas')

    
    <br><br><br><br><br><br><br>
    <table border="1" style="border: 1px outset white; width: 100%; border-bottom-color: transparent;">
      <tr>
        <td><center>
            <div class="col-md-3 ftco-animate fadeInUp ftco-animated">
              <a href="{{ asset('images/wali-kelasRPL2.jpg') }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset('images/wali-kelasRPL2.jpg') }}); border-radius: 50%; border: 5px outset white; height: 200px; width: 200px; margin: -100px 0px 0px 0px;">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            </div>
        </td></center>
      </tr>
    </table>
    <table border="1" style="border: 1px outset white; width: 100%;  border-top-color: transparent;  border-bottom-color: transparent; text-align: center;">
      <tr>
        <td><h4><span style="color: #CD9A6D;">Sri Wahyuning</span></h4></td>
      </tr>
    </table>
    <table border="1" style="border: 1px outset white; width: 100%;  border-top-color: transparent; text-align: center; border-bottom-color: transparent;">
      <tr>
        <td>
          <center><h6 style="margin: -10px 0px 0px 0px;">Bandung, Jawa Barat</h6><br></center>
          <h6 style=" color: gray;">Seorang guru di SMK ASSALAAM BANDUNG yang mengajar pelajaran Matematika.</h6>
        </td>
     
     </tr>
    </table>

    <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-whatsapp"></span></a></li>
              </ul>
            </div>
          </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
  </script>
  </body>
</html>