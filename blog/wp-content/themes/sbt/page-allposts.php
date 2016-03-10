<?php
/*
Template Name: All posts
*/
?>

<?php get_header(); ?>


<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <div class="blog-index">
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
            <div class="dropdown-label standalone-dropdown">Most Recent</div>
            <ul class="dropdown standalone-dropdown-options short-standalone">
              <li class="sort" data-sort="myorder:desc"><a href="#">Most Recent</a></li>
              <li class="filter" data-filter=".popular"><a href="#">Popular</a></li>
              <li class="filter" data-filter=".career"><a href="#">Career</a></li>
              <li class="filter" data-filter=".design"><a href="#">Design</a></li>
              <li class="filter" data-filter=".electric-vehicle"><a href="#">Electric Vehicle</a></li>
              <li class="filter" data-filter=".technology"><a href="#">Technology</a></li>
            </ul>
          </div>
          <div class="dropdown-container desktop-only">
            <ul class="dropdown standalone-dropdown-options short-standalone">
              <li class="active filter" data-filter="all"><span class="reverse">Recent</span></li>
              <li class="filter" data-filter=".popular"><span>Popular</span></li>
                <li class="dropdown-has-child"><label><span>Career</span>
                  <ul>
                    <li class="filter" data-filter=".career"><span>Career</span></li>
                    <li class="filter" data-filter=".design"><span>Design</span></li>
                    <li class="filter" data-filter=".electric-vehicle"><span>Electric Vehicle</span></li>
                    <li class="filter" data-filter=".technology"><span>Technology</span></li>
                  </ul>
                </label>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns">
        <div class="section pt0">
          <div class="row">
            <?php
            $current_date ="";
            $count_posts = wp_count_posts();
            $nextpost = 0;
            $published_posts = $count_posts->publish;
            $myposts = get_posts(array('posts_per_page'=>$published_posts)); 
            foreach($myposts as $post) :
              $nextpost++;
              setup_postdata($post);
              $date = get_the_date("F Y");   
              if($current_date!=$date): 
                if($nextpost>1): ?> 
                     </ol>
            <?php endif; ?> 
            <ol start = "<?php echo $nextpost; ?>" class="blog-post-list">
              <?php $current_date=$date; endif; ?>
              <li class="small-12 large-4 columns end mix <?php $category = get_the_category( $post->ID ); echo $category[0]->slug;?>" data-myorder="<?php global $post; echo $post->ID; ?>">
                <div class="post">
                  <div class="post-container">
                    <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <p class="blog-post-image">
                      <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                        } else { ?>
                        <img class="no-image" src="<?php bloginfo('template_directory'); ?>/images/default-image.png" alt="<?php the_title(); ?>" />
                        <?php } ?>
                      </a>
                    </p>
                    <p class="lead lead-small blog-category">
                      <?php 
                        $category = get_the_category( $post->ID );
                        echo $category[0]->cat_name; 
                      ?>
                    </p>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="full-width-button read-button">Read On</a>
                </div>
              </li>
              <?php endforeach; wp_reset_postdata(); ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>