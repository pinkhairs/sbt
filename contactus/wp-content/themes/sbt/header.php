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
	<link rel="stylesheet" href="http://madebyporter.com/clients/sbt/css/style.css" type="text/css">

	<script src="https://use.typekit.net/jfs8zip.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'loading-screen' ); ?>>
<div class="hmenu-wrapper" id="menu">
	<div class="hmenu-innerwrapper">
		<div class="row">
			<div class="small-12 columns">
				<div class="row">
					<div class="small-12">
						<div id="hmenu-close" class="hmenu-close-button">Close</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12">
						<ol class="hmenu-list">
							<li class="hmenu-list-element hmenu-list-element-large">
								<small class="hmenu-text-small">Find</small>
								<a href="http://www.madebyporter.com/clients/sbt/work.php" class="hmenu-text-link">Work</a>
							</li>
							<li class="hmenu-list-element hmenu-list-element-large">
								<small class="hmenu-text-small">Hire</small>
								<a href="http://www.madebyporter.com/clients/sbt/talent.php" class="hmenu-text-link">Talent</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://www.madebyporter.com/clients/sbt/index.php" class="hmenu-text-link">Home</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://www.madebyporter.com/clients/sbt/contactus" class="hmenu-text-link">Contact Us</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://www.madebyporter.com/clients/sbt/about.php" class="hmenu-text-link">About Us</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://www.madebyporter.com/clients/sbt/blog" class="hmenu-text-link">Press &amp; Publications</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://www.madebyporter.com/clients/sbt/jobs.php" class="hmenu-text-link">Jobs</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://www.madebyporter.com/clients/sbt/referrals.php" class="hmenu-text-link">Referral Program</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://www.madebyporter.com/clients/sbt/terms.php" class="hmenu-text-link">Terms &amp; Privacy</a>
							</li>
							<li class="hmenu-list-element hmenu-list-social">
								<small class="hmenu-text-small">Follow Us On</small>
								<ul class="social-links-list">
									<li><a href="https://twitter.com/loveyourworkca"><img src="http://www.madebyporter.com/clients/sbt/images/twitter.svg" alt="Twitter"></a></li>
									<li><a href="https://www.facebook.com/siliconbeachtalent"><img src="http://www.madebyporter.com/clients/sbt/images/facebook.svg" alt="Facebook"></a></li>
									<li><a href="https://www.linkedin.com/company/6390835"><img src="http://www.madebyporter.com/clients/sbt/images/linkedin.svg" alt="LinkedIn"></a></li>
								</ul>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<main class="site-wrap">
	<div id="loading"></div>
	<header class="site-header">
		<div class="row">
			<div class="small-12 large-6 columns">
				<a href="http://www.madebyporter.com/clients/sbt/index.php" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>">
					<img src="http://madebyporter.com/clients/sbt/images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
				</a>
			</div>
			<div class="small-12 large-6 columns">
					<div class="menu-trigger" id="menu-button"><span class="menu-label">Menu</span></div>
			</div>
		</div>
	</header>

	<div class="wrap">