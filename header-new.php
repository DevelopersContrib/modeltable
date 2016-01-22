<?php include('includes/config.php');?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
	<meta charset="utf-8">
        	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<link rel="canonical" href="http://<?=$domain?>" />
	<meta name="robots" content="index, follow" />
	<title><?=$title?></title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="title" content="<?=$domain?> " />
	<meta name="description" content="<?=$domain?> <?=$description?>" />
	
        <meta name="author" content="<?=$domain?> ">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- font-awesome icon -->
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
			.brdr{
				border :1px solid;
			}
			body{
				color: #777;
			}
			.fnt-sans{
				font-family: 'Open Sans', sans-serif;
			}
			.fnt-300{
				font-weight: 300;
			}
			.fnt-400{
				font-weight: 400;
			}
			.text-black{
				color: #000;
			}
			.ttle-header{
				font-size: 45px;
				line-height: 50px;
				font-weight: bold;
				margin-top: 10px;
				color: #000;
			}
			.divider-ttle{
				background-color: #25292c;
				height: 1px;
				margin: 20px auto 25px;
				width: 100px;
			}
			.wrap-header-section{
				background-image: url('http://demo.limitless.company/rome/single/img/backgrounds/home.jpg');
				background-attachment: scroll;
				background-position: center;
				background-size: cover;
				height: 810px;
				color: #fff;
				position: relative;
			}
			.wrap-header-section .phone{
				background-image: url("http://demo.limitless.company/rome/single/img/misc/phone.png");
				background-position: center center;
				background-repeat: no-repeat;
				bottom: 100px;
				height: 621px;
				left: -80px;
				padding-left: 224px;
				padding-top: 79px;
				position: absolute;
				text-align: left;
				width: 803px !important;
			}
			.overlay {		
				background: -moz-linear-gradient(top,  rgba(0,0,0,0.5) 0%, rgba(0,0,0,1) 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.5)), color-stop(100%,rgba(0,0,0,1)));
				background: -webkit-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				background: -o-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				background: -ms-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				background: linear-gradient(to bottom,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80000000', endColorstr='#000000',GradientType=0 );
				bottom: 0px;
				left: 0px;
				position: absolute;
				top: 0px;
				right: 0px;
			}
			.preview img {
				border: 3px solid #252527;
				border-radius: 3px;
				box-sizing: content-box !important;
				height: 391px;
				width: 218px;
			}
			.info-right{
				padding-left: 20px;
				position: absolute;
				text-align: left;
				bottom: 240px;
				right: 0;
				width: 100%;
			}
			.fnt-bold{
				font-weight: bold;
			}
			.info-right .ttle{
				font-size: 55px;
				line-height: 55px;
			}
			/* Section 2 */
			.section-2{
				background-color: #f8f8f8;
				padding: 80px 0 80px;
			}
			/* Section 3 */
			.section-3{
				padding: 100px 0;
			}
			.section-3 .divider-ttle{
				margin-bottom: 45px;
			}
			.wrap-icon-circle{
				background-color: #f8f8f8;
				border: 1px solid #e1e1e1;
				border-radius: 50%;
				display: inline-block;
				font-size: 40px;
				line-height: 90px;
				padding-left: 30px;
				padding-right: 30px;
			}
			/* Footer */
			.footer-dark-1,.footer-dark-2{
				line-height: 20px;
			}
			.footer-dark-1 .text-g1,.footer-dark-2 .text-g1{
				color: #ccc;
			}
			.footer-dark-1 .f-a-links a,.footer-dark-2 .f-a-links a{
				color: #ccc;
			}
			.footer-dark-1 .f-a-links a:hover, .footer-dark-2 .f-a-links a:hover{
				color: #e1e1e1;
				text-decoration: none;
			}
			.footer-dark-1{
				color: #fff;
				padding: 25px 0 10px;
				background-color: #333;
			}
			.footer-dark-1 h3{
				margin-top: 0;
			}
			.fnt-bold{
				font-weight: bold;
			}
			.footer-dark-2{
				color: #fff;
				padding: 25px 0;
				background-color: #222;
			}
			.footer-dark-2 ul.list-inline{
				margin-bottom: 0;
			}
			.socials-ul li{
				padding-right: 0;
				padding-left: 0;
			}

			/* Black B */
			.footer-dark-1.footer-dark-b-1{
				background-color: #020202;
			}
			.footer-dark-2.footer-dark-b-2{
				background-color: #0e0e0e;
			}

			/* For Social Media Style Brand Details */
			/* Wrapper */
			.icon-button {
				border-radius: 0.6rem;
				cursor: pointer;
				display: inline-block;
				font-size: 2.0rem;
				height: 3rem;
				line-height: 3rem;
				position: relative;
				text-align: center;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				width: 3rem;
			}

			/* Circle */
			.icon-button span {
				border-radius: 0;
				display: block;
				height: 0;
				left: 50%;
				margin: 0;
				position: absolute;
				top: 50%;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				-o-transition: all 0.3s;
				transition: all 0.3s;
				width: 0;
			}
			.icon-button span {
				width: 3rem;
				height: 3rem;
				border-radius: 0.6rem;
				margin: -1.5rem;
			}
			.twitter span {
				background-color: #4099ff;
			}
			.facebook span {
				background-color: #3B5998;
			}
			.google-plus span {
				background-color: #dd4b39;
			}
			.youtube span {
				background-color: #bb0000;
			}
			.pinterest span {
				background-color: #cb2027;
			}
			.angellist span {
				background-color: #000;
			}
			.github span {
				background-color: #000;
			}
			.linkedin span {
				background-color: #007bb6 ;
			}
			.tumblr span {
				background-color: #36465d ;
			}
			.foursquare span {
				background-color: #0072b1 ;
			}

			/* Icons */
			.icon-button i {
				background: none;
				color: white;
				height: 3rem;
				left: 0;
				line-height: 3rem;
				position: absolute;
				top: 0;
				width: 3rem;
				z-index: 10;
			}
			/* For Image iCons */
			.social-img-icon-a{
				border-radius: 0.6rem;
				display: block;
				height: 30px;
				overflow: hidden;
				width: 30px;
			}
			.social-img-icon-a img{
				height: 30px;
			}

			/* Section 4 */
			.section-4{
				padding: 50px 0 90px;
				background-color: #46a694;
			}
			/* ==========================================================================
			Sign up form
			========================================================================== */

			.sign-up .signup-form .sign-up-btn {
			    padding: 15px 0;
			    border-radius: 3px;
			    width: 80%;
			    font-size: 13px;
			}
			.sign-up .signup-form .form-input-group {
			    height: 55px;
			    margin: 0 auto 10px;
			    border-radius: 5px;
			    border: solid 1px #E6E9EA;
			    text-align: left;
			    position: relative;
			}
			.sign-up .signup-form .form-input-group i {
			    color: #FF5274;
			    font-size: 14px;
			}
			.sign-up .signup-form .form-input-group i:after {
			    content: "";
			    height: 30px;
			    width: 1px;
			    border-right: solid 1px #E6E9EA;
			    position: absolute;
			    top: 50%;
			    left: 30px;
			    -webkit-transform: translateY(-50%);
			    -ms-transform: translateY(-50%);
			    transform: translateY(-50%);
			}
			.sign-up .signup-form .form-input-group i.fa-lock {
			    font-size: 18px;
			    position: absolute;
			    top: 50%;
			    -webkit-transform: translateY(-50%);
			    -ms-transform: translateY(-50%);
			    transform: translateY(-50%);
			    margin-left: 20px;
			}
			.sign-up .signup-form .form-input-group i.fa-envelope {
			    font-size: 14px;
			    position: absolute;
			    top: 50%;
			    -webkit-transform: translateY(-50%);
			    -ms-transform: translateY(-50%);
			    transform: translateY(-50%);
			    margin-left: 20px;
			}
			.sign-up .signup-form .form-input-group input {
			    padding-left: 68px;
			    width: 100%;
			    height: 100%;
			    border-radius: 6px;
			    border: none;
			}
			.sign-up .signup-form .form-input-group input::-webkit-input-placeholder {
			    color: #BCC1C3;
			}
			.sign-up .signup-form .form-input-group input:-moz-placeholder {
			    color: #BCC1C3;
			}
			.sign-up .signup-form .form-input-group input::-moz-placeholder {
			    color: #BCC1C3;
			}
			.sign-up .signup-form .form-input-group input:-ms-input-placeholder {
			    color: #BCC1C3;
			}
			.text-white{
				color: #fff;
			}

			/* Medium Devices, Desktops */
			@media only screen and (min-width : 992px) {
				.nav-logo{
					display: inline-block;
					height: 55px;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-brand-cust{
					display: inline-block;
					float: none;
					height: auto;
					padding: 35px;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust .navbar-nav > li > a{
					padding-bottom: 55px;
					padding-top: 55px;
					color: #fff;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust .navbar-nav > li > a:hover{
					color: rgba(255,255,255,0.5);
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust{
					background-color: transparent;
					border:none;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust .navbar-collapse{
					border-bottom: 1px solid rgba(255, 255, 255, 0.2);
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}

				/* Shrink Navbar Animate */
				.navbar-cust.shrink .nav-logo{
					height: 35px;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust.shrink .navbar-nav > li > a{
					padding-bottom: 30px;
					padding-top: 30px;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust.shrink .navbar-brand-cust{
					padding: 25px;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust.shrink{
					background-image: -webkit-linear-gradient(top, #3c3c3c 0%, #222 100%);
					background-image:      -o-linear-gradient(top, #3c3c3c 0%, #222 100%);
					background-image: -webkit-gradient(linear, left top, left bottom, from(#3c3c3c), to(#222));
					background-image:         linear-gradient(to bottom, #3c3c3c 0%, #222 100%);
					filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);
					filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
					background-repeat: repeat-x;

					/* background-image: -webkit-linear-gradient(top, #080808 0%, #0f0f0f 100%);
					background-image:      -o-linear-gradient(top, #080808 0%, #0f0f0f 100%);
					background-image: -webkit-gradient(linear, left top, left bottom, from(#080808), to(#0f0f0f));
					background-image:         linear-gradient(to bottom, #080808 0%, #0f0f0f 100%);
					filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff080808', endColorstr='#ff0f0f0f', GradientType=0);
					background-repeat: repeat-x; */
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
				.navbar-cust.shrink .navbar-collapse{
					border-bottom: none;
					transition: all 0.4s ease;
					-webkit-transition: all 0.4s ease;
					-moz-transition: all 0.4s ease;
				}
			}
		</style>
		<script>
			$(document).ready(function(){
				var shrinkHeader = 300;
				$(window).scroll(function() {
					var scroll = getCurrentScroll();
					if ( scroll >= shrinkHeader ) {
						$('.navbar-cust').addClass('shrink');
					}
					else {
						$('.navbar-cust').removeClass('shrink');
					}
				});
				function getCurrentScroll() {
					return window.pageYOffset;
				}
			});
		</script>
    
    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?=$account_ga?>']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.stats.numberchallenge.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', <?=$piwik_id?>]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.stats.numberchallenge.com/piwik.php?idsite=<?=$piwik_id?>" style="border:0;" alt="" /></p></noscript>