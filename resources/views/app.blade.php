<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="mamun0024">
    <title>Laravel | Web Scrapping</title>
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- CSS (Main File) -->
    <link rel='stylesheet' type='text/css'  href="/_$assets/_$css/myStyle.css">
    <link rel='stylesheet' type='text/css' href="/_$assets/lib/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,300,500'>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/_$assets/lib/jquery-1.11.3/jquery-1.11.3.min.js"></script>
    <script src="/_$assets/lib/jquery-1.11.3/jquery-ui.min.js"></script>
    <link rel='stylesheet' type='text/css' href="/_$assets/lib/jquery-1.11.3/jquery-ui.css">

    <link rel='stylesheet' type='text/css' href="/_$assets/lib/scrollbar/jquery.mCustomScrollbar.css" />
    <script src="/_$assets/lib/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- colorbox (necessary for Image & Div Show) -->
    <script src="/_$assets/lib/colorbox/jquery.colorbox-min.js"></script>
    <link rel='stylesheet' type='text/css' href="/_$assets/lib/colorbox/colorbox.css">

    <!-- Smoke Alert Boxes - Start -->
    <link rel='stylesheet' type='text/css' href="/_$assets/lib/smoke.js/smoke.css">
    <script src="/_$assets/lib/smoke.js/smoke.min.js"></script>
    <!-- Smoke Alert Boxes - End -->

    <!-- Multiple Select jQuery plugin - Start -->
    <link rel='stylesheet' type='text/css' href="/_$assets/lib/multiple-select/multiple-select.css">
    <script src="/_$assets/lib/multiple-select/jquery.multiple.select.js"></script>
    <!-- Multiple Select jQuery plugin - End -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/_$assets/lib/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="/_$assets/lib/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class='loader'></div>
<div id="main-container">
    @extends('header')
    <div id="container">
        @extends('menu')
        <div id="block">
            <div id="main-block" class="fade">
                <div class="dashboard_general">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
@extends('footer')
</body>
</html>
