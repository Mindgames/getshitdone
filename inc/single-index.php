<?php
// WP_Query arguments
$args = array (
	'post_type'              => 'post',
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
		// do something
		echo '<div class="col-md-1"></div><div class="col-md-3 style="margin-top:20px;"c>';
		the_title( sprintf( '<h3 style="margin-top:27px" class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		echo '</h3></div><div class="col-md-8" style="margin-top:20px;">';
		echo '<p>' . wp_trim_words( get_the_content(), 60 ) . '</p>';
		echo '</div>';
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>