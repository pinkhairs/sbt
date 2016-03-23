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

<link rel="stylesheet" href="css/foundation.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<script src="https://use.typekit.net/jfs8zip.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>
<body class="<?php if ($_COOKIE['preload'] != 1) echo 'loading-screen'; ?> <?php echo $pageBodyClass; ?>">

<!-- Slide Out Menu -->
<div class="menu-container" id="menu">
	<div class="menu-inner">
		<div class="row">
			<div class="small-12 columns">
				<p class="text-right menu-close-button desktop-only"><a href="#"><img src="images/close-modal.svg" alt=""></a></p>
				<a href="#" class="logo mobile-only" id="close-button">
					<img src="images/close.svg" alt="" class="close-title">
					<span class="menu-label">Close</span>
				</a>
				<p class="lead midnight">Find</p>
				<h2 class="menu-link-heading" id="menu-work-link"><a href="work.php">Work</a></h2>
				<p class="lead midnight">Hire</p>
				<h2 class="menu-link-heading" id="menu-work-link"><a href="talent.php">Talent</a></h2>
				<nav id="talent-links">
					<ul class="menu-links">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contactus">Contact Us</a></li>
						<li><a href="blog">Blog</a></li>
						<li><a href="jobs.php">Jobs</a></li>
						<li><a href="terms.php">Terms &amp; Privacy</a></li>
					</ul>
				</nav>
				<div class="row">
					<div class="small-12 columns">
						<div class="short-section pt0">
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
</div>

<main class="site-wrap">
	<div id="loading"></div>
	<header class="site-header">
		<div class="row">
			<div class="small-12 large-6 columns">
				<a href="index.php" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>">
					<img src="images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
				</a>
			</div>
			<div class="small-12 large-6 columns">
					<div class="menu-trigger" id="menu-button"><span class="menu-label">Menu</span></div>
			</div>
		</div>
	</header>
	<div class="wrap">