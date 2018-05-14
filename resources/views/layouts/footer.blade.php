<?php
/**
 * Created by PhpStorm.
 * User: mamun0024
 * Date: 5/3/2018
 * Time: 1:26 AM
 */
?>
<div id="footer">
    <p>Copyright &copy; 2009 - <?= date("Y"); ?> <a target="_blank" href="#">mamun0024</a></p>
    <?php //echo basename($_SERVER['PHP_SELF']) ; ?>
</div>

<!-- Fade Notification Library - Start -->
<script src="{{ asset('_$assets/lib/fade_notification/toastr.min.js') }}"></script>
<link rel='stylesheet' type='text/css' href="{{ asset('_$assets/lib/fade_notification/toastr.css') }}">
<!-- Fade Notification Library - End -->

<!-- My JavacScript Code - Start -->
<script src="{{ asset('_$assets/_$js/myScript.js') }}"></script>
<!-- My JavacScript Code - End -->

<!-- My Table Code - Start -->
<link rel='stylesheet' type='text/css' href="{{ asset('_$assets/lib/table/t_style.css') }}">
<script src="{{ asset('_$assets/lib/table/jquery.tablesorter.js') }}"></script>
<!-- My Table Code - End -->

<!-- custom tooltip jQuery plugin - Start -->
<link rel='stylesheet' type='text/css' href="{{ asset('_$assets/lib/tooltipster/tooltipster.css') }}">
<script src="{{ asset('_$assets/lib/tooltipster/jquery.tooltipster.min.js') }}"></script>
<!-- custom tooltip jQuery plugin - End -->
