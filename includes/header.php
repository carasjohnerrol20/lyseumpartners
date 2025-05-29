<?php
// LOCAL
$base_path = '/lyseumpartners/';

// PRODUCTION
//$base_path = '/';
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?= isset($page_title) ? "Lyseum Partners - $page_title" : "Lyseum Partners"; ?>
  </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="<?= $base_path ?>assets/images/fav-icon/icon.png">

  <!-- CSS Files -->
	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/nivo-slider.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/animate.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/animated-text.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/fonts/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/flaticon.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/theme-default.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/meanmenu.min.css" />
	<link rel="stylesheet" href="<?= $base_path ?>style.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/owl.transitions.css" />
	<link rel="stylesheet" href="<?= $base_path ?>venobox/venobox.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/widget.css" />
	<link rel="stylesheet" href="<?= $base_path ?>assets/css/responsive.css" />


  <!-- JS -->
  <script src="<?= $base_path ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
	<!-- Loder Start-->
	<div class="loader-wrapper">
	  <div class="loader"></div>
	  <div class="loder-section left-section"></div>
	  <div class="loder-section right-section"></div>
	</div>
	<!-- Loder End -->

	<!--==================================================-->
	<!----- Start Lyseum Main Menu Area ----->
	<!--==================================================-->
		<div id="sticky-header" class="techno_nav_manu transparent_menu white d-md-none d-lg-block d-sm-none d-none">
			<div class="container">
				<div class="row">
					<div class="menu">
						<a href="index.php" class="logo"><img class="down" src="assets/images/logo.png" alt=""> <img class="main_sticky" src="assets/images/logo.png" alt=""></a>
						<ul class="">
						<li><a href="index.php">Home</a>
							
						</li>
						<li><a href="index.php#about-us">About Us</a>
							<!--<ul>
								<li><a href="about.html">Core Services </a></li>
							
							
							</ul> -->
						</li>
						<li><a href="#core-services">Services</a>
							<ul>
								<li><a href="#project-management-2">Program & Project Management</a></li>
								<li><a href="#construction-management-2">Construction & Infrastructure Management</a></li>
								<li><a href="#engineering-services-2">Engineering & Technical Services</a></li>
								<li><a href="#scheduling-control-2">Scheduling & Quality Control</a></li>
								<li><a href="#safety-consulting-2">Safety & Security Consulting</a></li>
							</ul>
						</li>
						
						<li><a href="#">Careers</a>
							<ul>
								
							</ul>
						</li>
						<li><a href="#">Blog</a>
							
						</li>
						<li><a href="#contact-section">Contact Us</a>
							
						</li>
						
						<div class="donate-btn-header">
							<a class="dtbtn" href="#">Get A Quote</a>	
						</div>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Lyseum Mobile Menu Area -->
	<div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
		<div class="mobile-menu"> 
			<nav class="techno_menu">

				<ul class="clearfix">

					<li><a href="index.php">Home</a>
						
					</li>
					<li><a href="index.php#about-us">About Us</a>
						
					</li>
					<li><a href="#core-services">Services</a>
						<ul>
							<li><a href="#project-management-2">Program & Project Management</a></li>
							<li><a href="#construction-management-2">Construction & Infratructure Management</a></li>
							<li><a href="#engineering-services-2">Engineering & Technical Services</a></li>
							<li><a href="#scheduling-control-2">Scheduling & Quality Control</a></li>
							<li><a href="#safety-consulting-2">Safety & Security Consulting</a></li>
						</ul>
					</li>
					
					<li><a href="#">Careers</a> </li>
						
					<li><a href="#">Blog</a>	
					</li>
					<li><a href="#contact-section">Contact Us</a>
						
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Lyseum Main Menu Area ----->
	<!--==================================================-->