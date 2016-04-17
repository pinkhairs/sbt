<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="<?php echo $pageDescription; ?>">
<meta name="keywords" content="<?php echo $pageKeywords; ?>">

<?php
// If canonical URL is specified, include canonical link element
	if($pageCanonical)
	{
	echo '<link rel="canonical" href="' . $pageCanonical . '">';
	}
	// If meta robots content is specified, include robots meta tag
	if($pageRobots)
	{
	echo '<meta name="robots" content="' . $pageRobots . '">';
	}
?>

<link rel="stylesheet" href="css/foundation.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="icon" href="favicon-32.png" type="image/png" />

</head>
<body class="<?php echo $pageBodyClass; ?> <?php if ($_COOKIE['preload'] != 1) echo 'loading-screen'; ?> ">

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
								<a href="work.php" class="hmenu-text-link">Work</a>
							</li>
							<li class="hmenu-list-element hmenu-list-element-large">
								<small class="hmenu-text-small">Hire</small>
								<a href="talent.php" class="hmenu-text-link">Talent</a>
							</li>
							<li class="hmenu-list-element">
								<a href="index.php" class="hmenu-text-link">Home</a>
							</li>
							<li class="hmenu-list-element">
								<a href="contactus" class="hmenu-text-link">Contact Us</a>
							</li>
							<li class="hmenu-list-element">
								<a href="about.php" class="hmenu-text-link">About Us</a>
							</li>
							<li class="hmenu-list-element">
								<a href="blog" class="hmenu-text-link">Press &amp; Publications</a>
							</li>
							<li class="hmenu-list-element">
								<a href="jobs.php" class="hmenu-text-link">Jobs</a>
							</li>
							<li class="hmenu-list-element">
								<a href="contactus/referrals" class="hmenu-text-link">Referral Program</a>
							</li>
							<li class="hmenu-list-element">
								<a href="terms.php" class="hmenu-text-link">Terms &amp; Privacy</a>
							</li>
							<li class="hmenu-list-element hmenu-list-social">
								<small class="hmenu-text-small">Follow Us On</small>
								<ul class="social-links-list">
									<li><a href="https://twitter.com/loveyourworkca"><img src="images/twitter.svg" alt="Twitter"></a></li>
									<li><a href="https://www.facebook.com/siliconbeachtalent"><img src="images/facebook.svg" alt="Facebook"></a></li>
									<li><a href="https://www.linkedin.com/company/6390835"><img src="images/linkedin.svg" alt="LinkedIn"></a></li>
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
			<div class="small-4 small-offset-4 medium-6 medium-offset-0 columns end">
				<a href="index.php" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>">
					<img src="images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
				</a>
			</div>
			<div class="small-4 small-offset-4 medium-6 medium-offset-0 columns end">
					<div class="menu-trigger" id="menu-button">Menu</div>
			</div>
		</div>
	</header>

	<div class="wrap">