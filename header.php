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
<body class="<?php echo $pageBodyClass; ?> <?php if ($_COOKIE['preload'] != 1) echo 'loading-screen'; ?> ">

<div class="hmenu-wrapper" id="menu">
	<div class="hmenu-innerwrapper">
		<div class="row">
			<div class="small-12 large-4 large-offset-8 columns">
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
								<a href="blog" class="hmenu-text-link">Blog</a>
							</li>
							<li class="hmenu-list-element">
								<a href="jobs.php" class="hmenu-text-link">Jobs</a>
							</li>
							<li class="hmenu-list-element">
								<a href="referrals.php" class="hmenu-text-link">Referrals</a>
							</li>
							<li class="hmenu-list-element">
								<a href="press.php" class="hmenu-text-link">Press</a>
							</li>
							<li class="hmenu-list-element">
								<a href="terms.php" class="hmenu-text-link">Terms &amp; Privacy</a>
							</li>
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