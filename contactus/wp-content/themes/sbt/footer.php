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
				<div class="site-footer-ele color-section large-text-left">
					<div class="site-footer-ele-inner">
						<h4>Ready to find your next great gig?</h4>
						<a href="contactus" class="button">Get started</a>
					</div>
				</div>
			</div>
			<div class="small-12 large-4 large-text-left columns">
				<div class="site-footer-ele color-section large-text-left">
					<div class="site-footer-ele-inner">
						<h4 class="desktop-only">Connect with us</h4>
						<nav class="social-links">
						<ul class="social-links-list">
							<li><a href="https://twitter.com/loveyourworkca"><img src="http://www.madebyporter.com/clients/sbt/images/twitter.svg" alt="Twitter"></a></li>
							<li><a href="https://www.facebook.com/siliconbeachtalent"><img src="http://www.madebyporter.com/clients/sbt/images/facebook.svg" alt="Facebook"></a></li>
							<li><a href="https://www.linkedin.com/company/6390835"><img src="http://www.madebyporter.com/clients/sbt/images/linkedin.svg" alt="LinkedIn"></a></li>
						</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="small-12 large-4 large-text-left columns">
				<div class="site-footer-ele color-section large-text-left">
					<div class="site-footer-ele-inner">
						<span class="colophon">
							<h4>Silicon Beach Talent &copy;<?php echo date('Y'); ?></h4>
							<a href="http://www.madebyporter.com/clients/sbt/jobs.php">Jobs</a>
							<a href="http://www.madebyporter.com/clients/sbt/terms.php">Privacy &amp; Terms</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
</main>

<div class="header-catch"></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74978027-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="https://code.jquery.com/jquery-1.12.2.min.js" type="text/javascript"></script>
<?php if ($_COOKIE['preload'] != 1) { ?>
<script src="http://madebyporter.com/clients/sbt/js/preload.js" type="text/javascript"></script>
<script src="http://madebyporter.com/clients/sbt/js/jquery.lazylinepainter-1.7.0.min.js" type="text/javascript"></script>
<script src="http://madebyporter.com/clients/sbt/js/loading-screen.js" type="text/javascript"></script>
<?php } ?>
<!-- <script src="js/jquery.mobile.custom.min.js" type="text/javascript"></script> -->
<script src="http://madebyporter.com/clients/sbt/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="http://madebyporter.com/clients/sbt/js/sticky.min.js" type="text/javascript"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script src="http://madebyporter.com/clients/sbt/js/custom.js" type="text/javascript"></script>
</body>
</html>