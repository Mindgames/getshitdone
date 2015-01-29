	<?php
// WP_Query arguments
$args = array (
	'post_type'              => 'video',
	'post_status'            => 'publish',
	'pagination'             => false,
	'posts_per_page'         => '1',
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
		echo '<div class="vlog" style="background:url(' . $thumbnail . '); background-size:cover;">';
		echo '<div><h6><i class="fa fa-circle-o"></i> RESTLESS VLOG</h6></div>';
		echo '<a href="' . $url . '"><div style="  position: absolute;
  width: 100px;
  height: 100px;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -50px;background:transparent;"><img src="/wp-content/uploads/2015/01/playbutton.png" class="img-responsive" style="" alt="Aldrig Vila VLog">';
		echo'</div></a></div>';

		
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>