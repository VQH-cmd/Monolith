<?php if(!defined("access")) {header("Location: /");}
require "inc/functions.php";






?><!DOCTYPE html>
<html lang="en">

<!--████████████████████████████████████████████████████████████████-->

<head>

	<!--► NOTE Title ◄-->
	<title><?php echo $page_title; ?></title>


	<!--► NOTE Meta ◄-->
	<?php require "inc/src/meta.php"; ?>


	<!--► NOTE Favicon ◄-->
	<link rel="icon" href="assets/img/favicon.png" type="image/png">


	<!--► NOTE CSS ◄-->
	<?php require "inc/src/css.php"; ?>


	<!--► NOTE JS ◄-->
	<?php
		if(ie()) {
			require "inc/src/ie.php";
		}
		require "inc/src/js-head.php";
	?>


</head>

<!--████████████████████████████████████████████████████████████████-->

<body><div class="wrapper">

<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
<!---->
<!-- REVIEW | H E A D E R -->
<!---->
<!--		@header -->
<!---->
<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->

<header class="header">

	<!-- ► NOTE Header ◄ -->
	<!--============================-->
	<p class="bgc-txt ta-c fs-32 co-bg py-100 fw-700">
		Header
	</p><!-- ▲ Header ▲ -->
	<!--============================-->

</header><!-- ▲ Header ▲ -->
<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->








<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
<!---->
<!-- REVIEW | M A I N -->
<!---->
<!--		@main -->
<!---->
<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->

<main>