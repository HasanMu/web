<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>User Profil || Admin</title>
  <!-- Favicon -->
  <link href="/assetss/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/assetss/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="/assetss/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="/assetss/assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  @include('partial2.sid')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('partial2.nav-user')
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url({{ asset('images/rpl1.jpg')}}); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello&nbsp;Hasan</h1>
            <p class="text-white mt-0 mb-5">Silahkan untuk mengubah pengaturan akun admin anda</p>
            <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{ asset('images/rpl1.jpg')}}" class="rounded-square">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-3 pt-md-1 pb-0 pb-md-1">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Facebook</a>
                <a href="#" class="btn btn-sm btn-default float-right">WhatsApp</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Hasan Muhammad S<span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bandung, Jawa Barat
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Pelajar - XI RPL 2
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>SMK ASSALAAM BANDUNG
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('partial-admin.setting-profil')
      </div>
      <!-- Footer -->
      @include('partial2.fott')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/assetss/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/assetss/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="/assetss/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/assetss/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/assetss/assets/js/argon.js?v=1.0.0"></script>


</body></html>