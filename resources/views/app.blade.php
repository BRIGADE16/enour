<!DOCTYPE html>
<html>
<head>
    <title>Enour Import Export</title>
    <meta name="description" content="Trucking is transportation and Logistics website template">
    <meta name="author" content="pixel-industry">
    <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap.min.css"/><!-- bootstrap grid -->
    <link rel="stylesheet" href="/css/animate.css"/><!-- used for animations -->
    <link rel='stylesheet' href='/owl-carousel/owl.carousel.css'/><!-- Client carousel -->
    <link rel="stylesheet" href="/masterslider/style/masterslider.css" /><!-- Master slider css -->
    <link rel="stylesheet" href="/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
    <link rel="stylesheet" href="/css/style.css"/><!-- template styles -->
    <link rel="stylesheet" href="/css/color-default.css"/><!-- template main color -->
    <link rel="stylesheet" href="/css/retina.css"/><!-- retina ready styles -->
    <link rel="stylesheet" href="/css/responsive.css"/><!-- responsive styles -->
    @yield('styles')
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

    <!-- Font icons -->
    <link rel="stylesheet" href="/components/components-font-awesome/css/font-awesome.min.css"/><!-- Fontawesome icons css -->
</head>

<body>

@include('layout.header')
@yield('content')
@include('layout.footer')

<script src="/components/jquery/dist/jquery.min.js"></script><!-- jQuery library -->
<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
<script src="/masterslider/masterslider.min.js"></script><!-- Master slider main js -->
<script src="/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="/js/include.js"></script><!-- custom js functions -->
@yield('scripts')
</body>
</html>
