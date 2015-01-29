<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Restless
 * @since Restless 1.0
 */ ?>

<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

	
	</div><!-- .sidebar -->


		<?php# if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<!-- <div id="widget-area" class="widget-area" role="complementary"> --~
				<?php# dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php #endif; ?>

	</div><!-- .secondary -->


