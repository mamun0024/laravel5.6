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
    <div id="header">
        <div style="padding: 10px;">
            <h1 id="header-h1"><a href=""><span class="logo_crm">LWS</span><span class="logo_divider"> | </span><span class="logo_company">Web Scrapper</span></a></h1>
            <div id="user-info">
                <h1>Hello, Guest</h1>
                <h2><a href="#">Log Out</a></h2>
            </div>
            <div id="user-info" style="margin-right: 10px;">
                <h1>
                    <a class="tooltip-left" title="" href="#">
                        <span class="homeNotification">4</span>
                        <i class="fa fa-ticket my-fa-padding-right my-fa-menu"></i>
                    </a>
                </h1>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="container">
        <div id="nav-menu" class="content" style="display: block;">
            <div class="globalSearchDiv">
                <a id="globalSearchButton"><i class="fa fa-search my-fa-padding-right"></i> Click to Search</a>
            </div>
            <ul>
                <li><a href="#"><i class="fa fa-link my-fa-padding-right my-fa-menu"></i> All Urls</a></li>
            </ul>
        </div>
        <div id="block">
            <div id="main-block" class="fade">
                <div class="dashboard_general">
                    <div class="main-block-title">
                        <div id="bread-crumps">
                            <div style="height: 20px; line-height: 23px;">
                                <a href="#" id="home_logo">Dashboard</a>
                                »
                                <a style="color: #767676;">Manage All Links</a>
                            </div>
                        </div>
                        <div style="float: right; height: 20px; ">
                            <a style="margin-left: 0;" title="Add URL" class="table-button" href="#"><i class="fa fa-plus"></i>&nbsp; Add URL</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="main-block-padding">
                        <div class="pageModule" style="margin: 8px 0;">
                            <table class="ticketInfo">
                                <thead>
                                <tr>
                                    <th style="width: 30px;">S/N</th>
                                    <th>Url Link</th>
                                    <th style="width: 95px;">Activity </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><p class="ticketInfo_b">1</p></td>
                                    <td><p class="ticketInfo_b"><i class="fa fa-link my-fa-padding-right"></i>Url Name</td>
                                    <td><a style="margin-left: 0;" class="table-button" href="#"><i class="fa fa-bar-chart"></i>&nbsp; All Data</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div id="footer">
    <p>Copyright &copy; 2009 - <?= date("Y"); ?> <a target="_blank" href="#">mamun0024</a></p>
    <?php //echo basename($_SERVER['PHP_SELF']) ; ?>
</div>

<!-- Fade Notification Library - Start -->
<script src="/_$assets/lib/fade_notification/toastr.min.js"></script>
<link rel='stylesheet' type='text/css' href="/_$assets/lib/fade_notification/toastr.css">
<!-- Fade Notification Library - End -->

<!-- My JavacScript Code - Start -->
<script src="/_$assets/_$js/myScript.js"></script>
<!-- My JavacScript Code - End -->

<!-- My Table Code - Start -->
<link rel='stylesheet' type='text/css' href="/_$assets/lib/table/t_style.css">
<script src="/_$assets/lib/table/jquery.tablesorter.js"></script>
<!-- My Table Code - End -->

<!-- custom tooltip jQuery plugin - Start -->
<link rel='stylesheet' type='text/css' href="/_$assets/lib/tooltipster/tooltipster.css">
<script src="/_$assets/lib/tooltipster/jquery.tooltipster.min.js"></script>
<!-- custom tooltip jQuery plugin - End -->
</body>
</html>
