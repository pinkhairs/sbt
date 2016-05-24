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

  // Enable prefixes for urls
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

  if (strpos($url,'referral') !== false) {
    $prefix = "../../";
  } else if (strpos($url,'blog') !== false) {
    $prefix = "../";
  } else if (strpos($url,'contactus') !== false) {
    $prefix = "../";
  } else {
    $prefix = "";
  }
  
?>

<link rel="stylesheet" href="css/foundation.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="icon" href="favicon-32.png" type="image/png" />

</head>
<body class="<?php echo $pageBodyClass; ?> <?php if ($_COOKIE['preload'] != 1) echo 'loading-screen'; ?> ">

<!-- Site Menu --> 
<?php include 'menu.php' ?>

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
