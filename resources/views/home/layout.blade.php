<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>海南长艺广告</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('asset/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('asset/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{url('asset/css/bootstrap.css')}}">
    <!-- animatedresponsiveImagegrid  -->
    <link rel="stylesheet" href="{{url('asset/css/animatedresponsiveImagegrid.css')}}">
    <!-- Magnifoc Popup  -->
    <link rel="stylesheet" href="{{url('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('asset/css/style.css')}}">


    <!-- Modernizr JS -->
    <script src="{{url('asset/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9] -->
    <script src="{{url('asset/js/respond.min.js')}}"></script>
    <!--[endif]-->


</head>
<body>

@include('home.nav')

<div id="fh5co-page">
    @yield('content')
    @include('home.footer')
</div>

<!-- jQuery -->
<script src="{{url('asset/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{url('asset/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('asset/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{url('asset/js/jquery.waypoints.min.js')}}"></script>
<!-- Counters -->
<script src="{{url('asset/js/jquery.countTo.js')}}"></script>
<!-- gridrotator -->
<script type="text/javascript" src="{{url('asset/js/jquery.gridrotator.js')}}"></script>
<!-- Magnific Popup -->
<script type="text/javascript" src="{{url('asset/js/jquery.magnific-popup.min.js')}}"></script>

@yield('js')
<!-- Main JS (Do not remove) -->
<script src="{{url('asset/js/main.js')}}"></script>




</body>
</html>

