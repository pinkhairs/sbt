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

	<div class="row">
		<div class="small-12 columns">
			<div class="section medium-section text-center">
				<p class="lead">I'm ready to</p>
				<h1>Contact</h1>
				<p class="lead mt0">Silicon Beach Talent</p>
				<p><img src="http://madebyporter.com/clients/sbt/images/line.svg" alt=""></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-12 large-10 large-text large-centered large-text-center columns">
			<div class="section pt0">
				<p>Ready to get started? Follow the instructions and fill out the form below. We respond within 48 hours.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<div class="section pt0 large-pt">
					
				<div class="large-text-center">
					<h2>Reason for Contact</h2>
					<ul class="contact-select">
            <li class="contact-select-ele active">
              <input value="work" type="radio" name="dropdown_eg" id="contact-select-work">
              <label for="contact-select-work">I'm Looking to Find Work</label>
            </li>
            <li class="contact-select-ele">
              <input type="radio" value="talent" name="dropdown_eg" id="contact-select-talent">
              <label for="contact-select-talent">I'm Looking to Hire Talent</label>
            </li>
            <li class="contact-select-ele">
              <input type="radio" value="general" name="dropdown_eg" id="contact-select-general">
              <label for="contact-select-general">Just a General Inquiry</label>
            </li>
          </ul>
				</div>
				<div id="contact-form">
          <div class="contact-form-content">
            <!-- <?php echo do_shortcode( '[contact-form-7 id="8" title="SBT Form"]' ); ?> -->
            <?php echo do_shortcode( '[contact-form-7 id="16" title="SBT Form"]' ); ?>
          </div>

					<!-- <div id="contact-form-work" class="contact-form-content active">
						<?php echo do_shortcode( '[contact-form-7 id="4" title="Looking for Work"]' ); ?>
					</div> -->
<!-- 					<div id="contact-form-talent" class="contact-form-content">
						<?php echo do_shortcode( '[contact-form-7 id="6" title="Looking for Talent"]' ); ?>
					</div>
					<div id="contact-form-general" class="contact-form-content">
						<?php echo do_shortcode( '[contact-form-7 id="7" title="General Inquiry"]' ); ?>
					</div> -->
				</div>

			</div>
		</div>
	</div>
<?php get_footer(); ?>
