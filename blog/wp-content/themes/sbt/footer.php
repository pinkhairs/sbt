<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div>
		<footer class="site-footer">
			<div class="row large-collapse">
				<div class="small-12 large-4 columns">
					<div class="medium-section large-pt color-section text-center large-text-left">
						<h4>Ready to find your next great gig?</h4>
						<p><a href="#" class="button">Get started</a></p>
					</div>
				</div>
				<div class="small-12 large-4 large-text-left columns">
					<h4 class="desktop-only large-pt">Connect with us</h4>
					<nav class="social-links">
						<ul class="flat-links mobile-only">
							<li><a href="https://twitter.com/loveyourworkca"><img src="http://localhost:8888/sbt/images/twitter.svg" alt="Twitter"></a></li>
							<li><a href="https://www.facebook.com/siliconbeachtalent"><img src="http://localhost:8888/sbt/images/facebook.svg" alt="Facebook"></a></li>
							<li><a href="https://www.linkedin.com/company/6390835"><img src="http://localhost:8888/sbt/images/linkedin.svg" alt="LinkedIn"></a></li>
							<li><a href="#"><img src="http://localhost:8888/sbt/images/googleplus.svg" alt="Google+"></a></li>
						</ul>
						<ul class="flat-links desktop-only">
							<li><a href="https://twitter.com/loveyourworkca"><img src="http://localhost:8888/sbt/images/twitter-white.svg" alt="Twitter"></a></li>
							<li><a href="https://www.facebook.com/siliconbeachtalent"><img src="http://localhost:8888/sbt/images/facebook-white.svg" alt="Facebook"></a></li>
							<li><a href="https://www.linkedin.com/company/6390835"><img src="http://localhost:8888/sbt/images/linkedin-white.svg" alt="LinkedIn"></a></li>
							<li><a href="#"><img src="http://localhost:8888/sbt/images/googleplus-white.svg" alt="Google+"></a></li>
						</ul>
					</nav>
				</div>
				<div class="small-12 large-4 large-text-left columns">
					<span class="colophon">Silicon Beach Talent <?php echo date('Y'); ?><br>
					<a href="#">Terms &amp; Conditions</a></span>
				</div>
			</div>
		</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<?php if ($_COOKIE['preload'] != 1) { ?>
<script src="http://localhost:8888/sbt/preload.js" type="text/javascript"></script>
<script src="http://localhost:8888/sbt/jquery.lazylinepainter-1.7.0.min.js" type="text/javascript"></script>
<script src="http://localhost:8888/sbt/loading-screen.js" type="text/javascript"></script>
<?php } ?>
<script src="http://localhost:8888/sbt/jquery.mobile.custom.min.js" type="text/javascript"></script>
<script src="http://localhost:8888/sbt/jfeed.js" type="text/javascript"></script>
<script src="http://localhost:8888/sbt/jrss.js" type="text/javascript"></script>
<script src="http://localhost:8888/sbt/custom.js" type="text/javascript"></script>
<script src="http://localhost:8888/sbt/jfeeditem.js" type="text/javascript"></script>
</body>
</html>