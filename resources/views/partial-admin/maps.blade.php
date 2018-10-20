<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Maps || Admin</title>
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
    @include('partial2.nav-maps')
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <!-- <div class="row">
        <div class="col">
          <div class="card shadow border-0">
            <div id="map-canvas" class="map-canvas" data-lat="40.748817" data-lng="-73.985428" style="height: 600px;"></div>
          </div>
        </div>
      </div> -->
      <!-- Footer -->
      @include('partial2.fott')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/assetss/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/assetss/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3674102673285!2d107.59072401417895!3d-6.965911270139053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK+Assalaam+Bandung!5e0!3m2!1sid!2sid!4v1510815784148"></script>
  <!-- Argon JS -->
  <script src="/assetss/assets/js/argon.js?v=1.0.0"></script>


</body></html>