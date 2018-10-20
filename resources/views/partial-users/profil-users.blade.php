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
    <link rel="stylesheet" type="text/css" href="{{asset('css/user-profil.css')}}">
    <style type="text/css">
      .upload-btn-wrapper {
          position: relative;
          overflow: hidden;
          display: inline-block;
        }

        .btn {
          border: 1px solid gray;
          color: gray;
          background-color: transparent;
          padding: 8px 20px;
          border-radius: 8px;
          font-size: 15px;
          
        }

        .upload-btn-wrapper input[type=file] {
          font-size: 10px;
          position: absolute;
          left: 0;
          top: 0;
          opacity: 0;
        }

        .buttton {
          border: 1px solid gray; 
          color: gray; 
          background-color: 
          transparent; 
          font-size: 15px; 
          border-radius: 5px; 
          width: 100%;
        }

        .buttton .active {
          border: 1px solid red;
          color: red;
          background-color: transparent;
          font-size: 15px; 
          border-radius: 5px; 
          width: 50%;
        }
    </style>
  </head>
  <body>

  	@include('partial-users.nav-profil')
    <!-- END nav -->
    
    <!-- Background -->
    <div style="background-image: url('images/hasan.jpeg'); no-fixed; center center; background-size: 100% 100%; height: 560px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">

      </div>
    </div>

     <!-- Header -->
    <section class="ftco-intro">
      <div class="upload-btn-wrapper">
        <button class="btn">Ganti Foto</button>
        <input type="file" name="myfile" />
      </div>
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-end">
	    		<div class="info">
	    			<div class="row" style="padding-right: 0px; width: 630px;">
              <!-- <div class="col-md-4 d-flex ftco-animate">
                <img src="{{asset('images/rpl1.jpg')}}" width="20px" height="100px" style="padding-right: 10px;">
                <div class="images">
                </div>
              </div> -->
	    				<div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-user"></span><br>
                  </div>
  	    					<div class="text">
  	    						<h6  name="nama-user" style="color: white; font-size: 14px;">Hasan Muhammad Sholeh</h6 style="color: white;">
  	    						<p name="no-telp" style="padding-bottom: 10px;">08812098148</p>
  	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-neuter"></span><br>
                <div class="icon"><span class="icon-calendar-times-o"></span></div></div>
	    					<div class="text">
	    						<h6 name="jenis-kelamin" style="color: white;">Laki-laki</h6>
	    						<p name="tanggal-lahir">05 Desember 2002</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3 name="alamat" style="font-size: 13.5px;">RT04/10 Desa Bojong Malaka Kecamatan Baleendah</h3>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social pl-md-2 p-4">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a target="_blank" href="https://www.twitter.com/HasanMu78012433"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a target="_blank" href="https://www.facebook.com/hasan.muhammad.96343"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a target="_blank" href="https://www.insagram.com/"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a target="_blank" href="https://api.whatsapp.com/send?phone=08812098148"><span class="icon-whatsapp"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>
    <br>
    <div class="container">
      <div class="row">

        <!-- Table Jumlah Suka -->
        <table border="0" width="50%;">
          <tr style="text-align: center;">
            <!-- <td><div class="icon"><span class="icon-my_location"></span></div></td> -->
            <td style="color: white;"><b>Disukai <span name="likes" style="color:  #CD9A6B; width: 70%; text-align: center;" id="likers" value="0">0</span> orang</b></td>
          </tr>
        </table>

        <!-- Table Suka & Batal Suka -->
        <table border="0" width="50%">
          <tr>
            <td>
             <input type="submit" class="buttton" style="display: block;" id="sukai" onclick="method(this);" value="[Sukai Doi]">
              <input type="submit" class="buttton" style="display: none;" id="batal_suka" onclick="method2(this)" value="[Batal Sukai Doi]">
            </td>
          </tr>
        </table>
      </div>
    </div>
    <br>

    <!-- Keterangan Website -->
    	<div class="container-fluid ">
        <div class="container">
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'profil')" id="defaultOpen">Profil</button>
              <button class="tablinks" onclick="openCity(event, 'pesan')">Pesan</button>
              <button class="tablinks" onclick="openCity(event, 'pemberitahuan')">Pemberitahuan</button>
              <button class="tablinks" onclick="openCity(event, 'edit-profil')">Edit Profil</button>
              <button class="tablinks" onclick="openCity(event, 'pengaturan')">Pengaturan</button>
              <button class="tablinks" onclick="openCity(event, 'ceks')">Ceks</button>

            </div>

            <div id="profil" class="tabcontent">
              @include('partial-users.tab-profil')
            </div>
            <div id="pesan" class="tabcontent">
              <p>j</p>
            </div>  
            <div id="pemberitahuan" class="tabcontent">
              <p>j</p>
            </div>
            <div id="edit-profil" class="tabcontent">
              @include('partial-users.tab-edit-profil')
            </div>
            <div id="pengaturan" class="tabcontent">
              @include('partial-users.tab-pengaturan')
            </div>
            <div id="ceks" class="tabcontent">
              @include('partial-users.tab-edit-profil')
            </div>
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
  <script src="{{ asset('js/profil.js') }}"></script>
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