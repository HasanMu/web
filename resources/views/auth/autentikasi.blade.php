<!DOCTYPE html>
<html lang="en"><head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Daftar</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/radiobutton.css') }}">

    <!-- Main CSS-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tabs.css') }}">
</head>

<body>

    <center>
    <div class="tabs">
        <br>
        <center>
        <ul class="tab-links">
            <li><a href="#tab3">Forgot password</a></li>
            <li><a href="#tab2">Login</a></li>
            <li class="active"><a href="#tab1">Register</a></li>
        </ul>
        </center>
             <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
                <div class="tab-content">

                    <div id="tab1" class="tab active">
                      @include('partial-access.register')
                    </div>
             
                    <div id="tab2" class="tab">
                      @include('partial-access.login')   
                    </div>

                    <div id="tab3" class="tab">
                      @include('partial-access.forgot-users')         
                    </div>

        </div>
    </div>
    

    <!-- Jquery JS-->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js')}}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    @include('partial2.datetime')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>



<!-- end document-->
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>