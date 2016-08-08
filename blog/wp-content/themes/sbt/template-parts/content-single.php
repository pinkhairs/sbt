<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="hero post-hero" style="background: url('<?php echo $featuredImage; ?>') no-repeat center; background-size:cover;"></div>

	<div class="row">
		<div class="small-12 columns">
			<div class="section pt0">
				<div class="row">
					<div class="small-12 large-2 large-offset-1 large-text-center columns">
						<div class="author-avatar avatar alignleft">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 170 ); ?>
						</div>

						<span class="lead lead-small">Written By<br><span class="author-name"><?php echo get_the_author(); ?></span></span>

						<hr width="40" class="mt0 small-hr desktop-only">

						<span class="date mt0"><?php the_date('m.d.y'); ?></span>

					</div>
					<div class="small-12 large-8 large-offset-1 columns">
						<div class="entry-content">
							<img src="<?php echo $featuredImage; ?>" class="seo-image" />
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<?php
								the_content();
							?>
						</div><!-- .entry-content -->
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
