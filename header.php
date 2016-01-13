<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Silicon Beach Talent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/foundation.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="menu-container" id="menu">
	<a href="#" class="logo" id="close-button">
		<img src="images/close.svg" alt="" class="close-title">
		<span class="menu-label">Close</span>
	</a>
	<p class="lead midnight">I'm looking for</p>
	<h2 class="menu-link-heading" id="menu-work-link"><a href="work-industries.php">Work</a></h2>
	<h2 class="menu=link-heading" id="menu-work-link"><a href="#talent-links">Talent</a></h2>
	<nav id="talent-links">
		<ul class="menu-links">
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="submit.php">Form Submitted</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="post.php">Post</a></li>
			<li><a href="post-alt.php">Post Alt</a></li>
			<li><a href="#">Jobs</a></li>
			<li><a href="#">Referrals</a></li>
			<li><a href="#">Press</a></li>
			<li><a href="#">Terms &amp; Privacy</a></li>
		</ul>
	</nav>
	<div class="section pt0">
		<p class="lead">Follow us on</p>
		<nav class="menu-social-links">
			<ul class="flat-links">
				<li><a href="#"><img src="images/twitter_bluegrey.svg" alt="Twitter"></a></li>
				<li><a href="#"><img src="images/facebook_bluegrey.svg" alt="Facebook"></a></li>
				<li><a href="#"><img src="images/linkedin_bluegrey.svg" alt="LinkedIn"></a></li>
				<li><a href="#"><img src="images/googleplus_bluegrey.svg" alt="Google+"></a></li>
			</ul>
		</nav>
	</div>
</div>
<header class="site-header">
	<a href="#" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>" id="menu-button">
		<img src="images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
		<span class="menu-label">Menu</span>
	</a>
</header>
<div class="wrap">