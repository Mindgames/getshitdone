<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Restless
 * @since Restless 1.0
 */

get_header(); ?>

	
		<main id="single" class="site-main" role="main">

<!-- 16:9 aspect ratio -->
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>"></iframe>
</div>


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		
		// End the loop.
		endwhile;
		?>
<div class="row">
 
    <style type="text/css">
.col-xs-6 {
  width: 50%;
  padding: 10px;
}
    </style>



		<?php
// WP_Query arguments
$args = array (
	'post_type'              => 'video',
	'post_status'            => 'publish',
	'pagination'             => false,
	'posts_per_page'         => '4',
	'cache_results'          => true,
	'update_post_meta_cache' => true,
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail' );
				$thumbnail = $thumb['0']; 
				$url = get_permalink();

		
		// do something
		echo '';
		echo '<div class="col-xs-6 col-md-3"><a href="' . $url . '" class="thumbnail-video">';
		echo '<img src="' . $thumbnail . '" class="img-100" >';
		echo '<div style="  position: absolute;
  width: 100px;
  height: 100px;
  top: 50%;
  left: 50%;
  margin-top: -65px;
  margin-left: -50px;background:transparent;">
				<img src="/wp-content/uploads/2015/01/playbutton.png" class="img-responsive" style="" alt="Aldrig Vila VLog">
				</div></div></a>';

		
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>
</div>
		</main><!-- .site-main -->
	

<?php get_footer(); ?>
