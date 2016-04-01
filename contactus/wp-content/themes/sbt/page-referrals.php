<?php
/*
Template Name: Referrals
*/
?>

<?php get_header(); ?>


<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <div class="blog-index">
    <div class="row">
      <div class="small-12 columns">
        <div class="section medium-section text-center">
          <h1>Referral Program</h1>
          <p class="lead mt0">Silicon Beach Talent</p>
          <p><img src="http://www.madebyporter.com/clients/sbt/images/line.svg" alt=""></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns">
        <div class="section pt0">
          <div id="contact-form">
            <div id="contact-form-referrals" class="contact-form-content active">
              <?php echo do_shortcode( '[contact-form-7 id="8" title="Referrals"]' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>