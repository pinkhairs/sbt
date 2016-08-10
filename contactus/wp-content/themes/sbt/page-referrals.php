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
      <div class="small-12 large-8 large-offset-2 columns large-text">
        <div class="section medium-section text-center">
          <h1>Referral Program</h1>
          <p class="lead mt0">Silicon Beach Talent</p>
          <p><img src="../../images/line.svg" alt=""></p>
        </div>
        <div class="section pt0 large-text-center">
          <p>“Great people know great people.”  It is a phrase almost as cliché as it is true.  At Silicon Beach Talent, our network on and our professional reputation is one and the same.  We believe in forming true partnerships, which is why we offer a referral bonus if we place someone that you introduce us to.</p>

          <p>We are not one of those “throw as many referrals at the wall and see what sticks” companies though.  Our clients depend on us to submit highly qualified and exceptionally talented individuals, and our candidates depend on us to tell them about a potential opportunity in-depth confidentially, so they have the information they need to decide whether they are interested.</p>

          <p>If you have someone you think we should speak with, please contact us using the form below and we will go from there.</p>
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