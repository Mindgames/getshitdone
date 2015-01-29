<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


	<?php 
		// Post thumbnail.
		#twentyfifteen_post_thumbnail();
	?>

<?php if (is_singular('video')) { ?>

<?php
			if ( is_single() ) :
				the_title( '<h1 class="video-title hidden-xs hidden-sm text-uppercase">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title text-uppercase"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	<div class="line"></div>

<?php	} else { ?>
	
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title text-uppercase">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title text-uppercase"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	<div class="line"></div>



	<div class="entry-content">
	<?php 	
if ( is_home() ) {
  // blog page
	the_excerpt();

} else {
  //everything else
		the_content();

} 
	
 ?>

		<button class="btn btn-primary text-center text-uppercase" style="margin:10px 0 0 0;" onclick="share()"><i class="fa fa-facebook"></i>   Dela</button>	
		
	</div><!-- .entry-content -->

	<?php } ?>

	<?php
		// Author bio.
		#if ( is_single() && get_the_author_meta( 'description' ) ) :
		#	get_template_part( 'author-bio' );
		#endif;
	?>

	


