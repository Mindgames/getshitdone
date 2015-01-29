<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Restless
 * @since Restless 1.0
 */
?>

	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			Restless
			
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->
    </div><!-- /container -->
    </div><!-- /container-fluid -->
    	<nav class="outer-nav right vertical">
				<a href="/" class=""><i class="fa fa-home"></i> AldrigVila</a>
				<a href="http://aldrigvila.libsyn.com" target="_blank" class=""><i class="fa fa-headphones"></i> Podcast</a>
				<a href="http://youtube.com/aldrigvila" class="" target="_blank"><i class="fa fa-play"></i> Vlog</a>

	
				
			</nav>
</div><!-- /perspective -->

<?php wp_footer(); ?>



<script type="text/javascript">
function share() {
FB.ui({
  method: 'share',
  href: '<?php the_permalink();?>',
}, function(response){});
}
</script>
</body>
</html>
