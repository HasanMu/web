<!DOCTYPE html>
<html>
<head>
    <title>XI RPL 2 || GALERI</title>
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
    <style type="text/css">

      a{
          color: transparent;
          text-decoration:none;
      }
      .tab {
          /*border: 0px solid gray;*/
          background-color: transparent;
          width: 50%;

      }
      .tab button {
        font-family: 'Poppins', sans-serif;
          display: flex;
          left: 0;
          flex-direction: column;
          background-color: inherit;
          color: black;
          padding: 10px 15px;
          width: 100%;
          border: none;
          outline: none;
          cursor: pointer;
          transition: 0.3s;
          font-size: 17px;
          color: gray;

      }
      .tab button:hover {
        background-color: transparent;
      }
      .tab button.active {
        background-color: transparent;
        color: #f9ae4a;
        border: 1px outset gray;
        border-top: none;
        border-left: none;
        border-right: none;
      }
      .tabcontent {
        padding: 0px 12px;
        width: 100%;
        border-left: none;
        height: 300px;
      }
    </style>
  </head>
<body>

  @include('partial-users.nav-jadwal')
  <div>
    <br><br><br>
    <br><br>
  </div>
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center fadeInUp ftco-animated">
        <h2 class="mb-4">Jadwal</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
      </div>
    </div>
  </div>

  <!-- Keterangan Website -->
      <div class="container-fluid ">
        <div class="container">
             <div class="tab" style="width: 35% !important;">
              <div style="display: flex;">
                <button class="tablinks" onclick="openCity(event, 'jadwal-pelajaran')" id="defaultOpen">
                  Jadwal Pelajaran
                </button>
                <button class="tablinks" onclick="openCity(event, 'jadwal-piket')">
                  Jadwal Piket
                </button>
              </div>
              </div>
            <div id="jadwal-pelajaran" class="tabcontent">
            <p>a</p>
            </div>
            <div id="jadwal-piket" class="tabcontent">
              <div class="container">
                <div class="tab" style="width: 13%;">
                  <button id="senen" class="tablinks" onclick="senen()">Senin</button>
                  <button id="selasa" class="tablinks" onclick="selasa()">Selas</button>
                  <button id="rabu" class="tablinks" onclick="rabu()">Rabu</button>
                  <button id="kamis" class="tablinks" onclick="kamis()">Kamis</button>
                  <button id="jumat" class="tablinks" onclick="jumat()">Jumat</button>
                  <button id="sabtu" class="tablinks" onclick="sabtu()">Sabtu</button>
                </div>
              </div>
            </div>  

            <div id="senen" class="tabcontent">
              senin
            </div>
        </div>
       </div>
      </div>

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

    let senen = () => {
      console.log('Senin');
      $('#senen').addClass('active').siblings().removeClass('active');
    }

    let selasa = () => {
      console.log('Selasa');
      $('#selasa').addClass('active').siblings().removeClass('active');
    }

    let rabu = () => {
      console.log('Rabu');
      $('#rabu').addClass('active').siblings().removeClass('active');
    }

    let kamis = () => {
      console.log('Kamis');
      $('#kamis').addClass('active').siblings().removeClass('active');
    }

    let jumat = () => {
      console.log('Jumat');
      $('#jumat').addClass('active').siblings().removeClass('active');
    }

    let sabtu = () => {
      console.log('Sabtu');
      $('#sabtu').addClass('active').siblings().removeClass('active');
    }
  </script>
</body>
</html>