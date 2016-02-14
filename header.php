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
<div class="loading-screen">
<div id="loading" class="">

</div>
</div>
<div class="menu-container" id="menu">
	<div class="row">
		<div class="small-12 columns">
			<p class="text-right menu-close-button desktop-only"><a href="#"><img src="images/close-modal.svg" alt=""></a></p>
			<a href="#" class="logo mobile-only" id="close-button">
				<img src="images/close.svg" alt="" class="close-title">
				<span class="menu-label">Close</span>
			</a>
			<p class="lead midnight">I'm looking for</p>
			<h2 class="menu-link-heading" id="menu-work-link"><a href="work.php">Work</a></h2>
			<h2 class="menu-link-heading" id="menu-work-link"><a href="talent.php">Talent</a></h2>
			<nav id="talent-links">
				<ul class="menu-links">
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="submit.php">Form Submitted</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="post-alt.php">Post</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Referrals</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Terms &amp; Privacy</a></li>
				</ul>
			</nav>
			<div class="row">
				<div class="small-12 columns">
					<div class="section pt0">
						<p class="lead">Follow us on</p>
						<nav class="menu-social-links">
							<ul class="flat-links">
								<li><a href="https://twitter.com/loveyourworkca"><img src="images/twitter_bluegrey.svg" alt="Twitter"></a></li>
								<li><a href="https://www.facebook.com/siliconbeachtalent"><img src="images/facebook_bluegrey.svg" alt="Facebook"></a></li>
								<li><a href="https://www.linkedin.com/company/6390835"><img src="images/linkedin_bluegrey.svg" alt="LinkedIn"></a></li>
								<!-- <li><a href="#"><img src="images/googleplus_bluegrey.svg" alt="Google+"></a></li> -->
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<header class="site-header">
	<div class="row">
		<div class="small-12 large-6 columns">
			<a href="index.php" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>">
				<img src="images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
			</a>
		</div>
		<div class="small-12 large-6 columns">
				<a href="#" id="menu-button"><span class="menu-label">Menu</span></a>
			</a>
		</div>
	</div>
</header>
<div class="wrap">