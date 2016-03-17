<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage SBT
 * @since SBT 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
	<title>Silicon Beach Talent</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://madebyporter.com/clients/sbt/css/foundation.css" type="text/css">
	<link rel="stylesheet" href="http://localhost:8888/sbt/css/style.css" type="text/css">
	<?php wp_head(); ?>
</head>

<body <?php if ($_COOKIE['preload'] != 1) echo 'class="loading-screen"'; ?> <?php body_class(); ?>>
<div id="loading">

</div>
<div class="menu-container" id="menu">
	<div class="row">
		<div class="small-12 columns">
			<p class="text-right menu-close-button desktop-only"><a href="#"><img src="http://madebyporter.com/clients/sbt/images/close-modal.svg" alt=""></a></p>
			<a href="#" class="logo mobile-only" id="close-button">
				<img src="http://madebyporter.com/clients/sbt/images/close.svg" alt="" class="close-title">
				<span class="menu-label">Close</span>
			</a>
			<p class="lead midnight">I'm looking for</p>
			<h2 class="menu-link-heading" id="menu-work-link"><a href="http://madebyporter.com/clients/sbt/work.php">Work</a></h2>
			<h2 class="menu-link-heading" id="menu-work-link"><a href="http://madebyporter.com/clients/sbt/talent.php">Talent</a></h2>
			<nav id="talent-links">
				<ul class="menu-links">
					<li><a href="http://madebyporter.com/clients/sbt/index.php">Home</a></li>
					<li><a href="http://madebyporter.com/clients/sbt/contact">Contact Us</a></li>
					<li><a href="http://madebyporter.com/clients/sbt/about.php">About Us</a></li>
					<li><a href="http://madebyporter.com/clients/sbt/blog">Blog</a></li>
					<li><a href="http://madebyporter.com/clients/sbt/jobs.php">Jobs</a></li>
					<li><a href="#">Referrals</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="http://madebyporter.com/clients/sbt/terms.php">Terms &amp; Privacy</a></li>
				</ul>
			</nav>
			<div class="row">
				<div class="small-12 columns">
					<div class="section pt0">
						<p class="lead">Follow us on</p>
						<nav class="menu-social-links">
							<ul class="flat-links">
								<li><a href="https://twitter.com/loveyourworkca"><img src="http://madebyporter.com/clients/sbt/images/twitter_bluegrey.svg" alt="Twitter"></a></li>
								<li><a href="https://www.facebook.com/siliconbeachtalent"><img src="http://madebyporter.com/clients/sbt/images/facebook_bluegrey.svg" alt="Facebook"></a></li>
								<li><a href="https://www.linkedin.com/company/6390835"><img src="http://madebyporter.com/clients/sbt/images/linkedin_bluegrey.svg" alt="LinkedIn"></a></li>
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
			<a href="http://madebyporter.com/clients/sbt/index.php" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>">
				<img src="http://madebyporter.com/clients/sbt/images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
			</a>
		</div>
		<div class="small-12 large-6 columns">
				<a href="#" id="menu-button"><span class="menu-label">Menu</span></a>
			</a>
		</div>
	</div>
</header>
<div class="wrap">