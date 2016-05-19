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
	<title>Silicon Beach Talent | Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://siliconbeachtalent.com/css/foundation.css" type="text/css">
	<!-- <link rel="stylesheet" href="http://localhost:8888/sbt/css/style.css" type="text/css"> -->
	<link rel="stylesheet" href="http://madebyporter.com/clients/sbt/css/style.css" type="text/css">
	<!-- <link rel="stylesheet" href="http://siliconbeachtalent.com/css/style.css" type="text/css"> -->
	<?php wp_head(); ?>
</head>

<body>
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
								<a href="http://siliconbeachtalent.com/work.php" class="hmenu-text-link">Work</a>
							</li>
							<li class="hmenu-list-element hmenu-list-element-large">
								<small class="hmenu-text-small">Hire</small>
								<a href="http://siliconbeachtalent.com/talent.php" class="hmenu-text-link">Talent</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://siliconbeachtalent.com" class="hmenu-text-link">Home</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://siliconbeachtalent.com/contactus" class="hmenu-text-link">Contact Us</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://siliconbeachtalent.com/about.php" class="hmenu-text-link">About Us</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://siliconbeachtalent.com/blog" class="hmenu-text-link">Press &amp; Publications</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://siliconbeachtalent.com/jobs.php" class="hmenu-text-link">Jobs</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://siliconbeachtalent.com/contactus/referrals" class="hmenu-text-link">Referral Program</a>
							</li>
							<li class="hmenu-list-element">
								<a href="http://siliconbeachtalent.com/terms.php" class="hmenu-text-link">Terms &amp; Privacy</a>
							</li>
							<li class="hmenu-list-element hmenu-list-social">
								<small class="hmenu-text-small">Follow Us On</small>
								<ul class="social-links-list">
									<li><a href="https://twitter.com/loveyourworkca"><img src="http://siliconbeachtalent.com/images/twitter.svg" alt="Twitter"></a></li>
									<li><a href="https://facebook.com/siliconbeachtalent"><img src="http://siliconbeachtalent.com/images/facebook.svg" alt="Facebook"></a></li>
									<li><a href="https://linkedin.com/company/6390835"><img src="http://siliconbeachtalent.com/images/linkedin.svg" alt="LinkedIn"></a></li>
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
			<div class="small-12 medium-6 columns">
				<a href="http://siliconbeachtalent.com" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>">
					<img src="http://siliconbeachtalent.com/images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
				</a>
			</div>
			<div class="small-12 medium-6 columns">
					<div class="menu-trigger" id="menu-button"><span class="menu-label">Menu</span></div>
			</div>
		</div>
	</header>

	<div class="wrap">