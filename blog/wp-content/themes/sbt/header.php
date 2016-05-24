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

  global $prefix;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="UTF-8">
  <title>Silicon Beach Talent | Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $prefix; ?>css/foundation.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $prefix; ?>css/style.css" type="text/css">
  <link rel="icon" href="<?php echo $prefix; ?>favicon-32.png" type="image/png" />
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'loading-screen' ); ?>>

<!-- Site Menu --> 
<?php include '../menu.php'; ?>

<main class="site-wrap">
  <div id="loading"></div>
  <header class="site-header">
    <div class="row">
      <div class="small-12 medium-6 columns">
        <a href="<?php echo $prefix; ?>" class="logo<?php if ($_GET['v'] == 2) echo '-2 logo'; ?>">
          <img src="<?php echo $prefix; ?>images/sbt-logo<?php if ($_GET['v'] == 2) echo '-2'; ?>.svg" alt="Silicon Beach Talent" class="site-title">
        </a>
      </div>
      <div class="small-12 medium-6 columns">
          <div class="menu-trigger" id="menu-button"><span class="menu-label">Menu</span></div>
      </div>
    </div>
  </header>

  <div class="wrap">