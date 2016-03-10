<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="row">
			 	<div class="small-12 columns">
					<div class="section medium-section text-center">
						<h1>Blog</h1>
						<p class="lead mt0">Silicon Beach Talent</p>
						<p><img src="http://localhost:8888/sbt/images/line.svg" alt=""></p>
					</div>
				</div>
			</div>

			<div class="row">
			 	<div class="small-12 columns">
					<div class="section pt0 pb0 text-center">
						<div class="dropdown-container mobile-only">
							<div class="dropdown-label standalone-dropdown ">Most Recent</div>
							<ul class="dropdown standalone-dropdown-options short-standalone">
								<li><a href="#">Popular</a></li>
								<li><a href="#">Career</a></li>
								<li><a href="#">Design</a></li>
								<li><a href="#">Electric Vehicle</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
						</div>
						<div class="dropdown-container desktop-only">
							<ul class="dropdown standalone-dropdown-options short-standalone">
								<li class="active"><a href="#" class="reverse">Recent</a></li>
								<li><a href="#">Popular</a></li>
									<li class="dropdown-has-child"><label>Design
										<ul>
											<li><a href="#">Electric Vehicle</a></li>
											<li><a href="#">Technology</a></li>
										</ul>
									</label>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				// End the loop.
				endwhile;

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
