<?php
/*
Template Name: Frontpage
*/

get_header(); ?>
<style>
.col-md-4, .col-md-6 {padding-bottom:0px;padding-top:0px;}
.in {
}
</style>
<?php $upload_dir = wp_upload_dir(); ?>



<div id="billboard" class="row">
		<div id="box1" class="col-md-4 col-xs-12">
		<div>
			<?php include(get_template_directory() . "/inc/video-index.php");?>
			</div></div>
			<div id="box2" class="col-md-4 col-xs-12">
				<div>
					<div>
						<div>
							<h6><i class="fa fa-circle-o"></i> AVPOD</h6>
						</div>
						<pod class="podbox col-md-12">

						<p class="text-center">EPISODE #12<br>
						<strong>PING PONG SHOW</strong></p>
						<a href="http://hwcdn.libsyn.com/p/d/3/d/d3da1497d6526bab/AVPOD12.mp3?c_id=8078384&expiration=1422314314&hwt=0f50d3942e4b164eccdccdca0b2cc7a4" target="_blank">
						<div class="playbtn pod center-block" style=""><p class="text-center" style="margin-top:45px; vertical-align: middle;">PLAY</p></div></a>
						</pod>
						
					</div></div></div>
					<div id="box3" class="col-md-4 col-xs-12">
						<div>
							<div>
								<div>
									<h6><i class="fa fa-circle-o "></i> AVNETWORKS</h6>
								</div>
								<style type="text/css">.col-md-3 i, .col-xs-6 i {color:#fff;}</style>
								
								<yo id="networks">
								<div class="col-md-3 col-xs-6"><a href="https://facebook.com/aldrigvila" target="_blank" title="AldrigVila Facebook" rel="external"><div><i class="fa fa-facebook fa-lg"></i></div></a></div>
								<div class="col-md-3 col-xs-6"><a href="https://twitter.com/AVMHollsten" target="_blank" title="AldrigVila Twitter" rel="external"><div><i class="fa fa-twitter fa-lg"></i></div></a></div>
								<div class="col-md-3 col-xs-6"><a href="https://instagram.com/avmhollsten" target="_blank" title="AldrigVila Instagram" rel="external"><div><i class="fa fa-instagram fa-lg"></i></div></a></div>
								<div class="col-md-3 col-xs-6"><a href="https://youtube.com/aldrigvila" target="_blank" title="AldrigVila Youtube" rel="external"><div><i class="fa fa-youtube fa-lg"></i></div></a></div>
								<div class="col-xs-6">
									<a href="http://store.aldrigvila.se" target="_blank"><div><p>SHOP</p></div></a>
								</div>

								<div class="col-xs-6">
									<a href="/blog"><div><p>BLOG</p></div></a>
								</div>
								<div class="col-xs-12">
									<a href="http://therestless.se" target="_blank"><div><p style="letter-spacing: 2px;
line-height: 20px;"><span style="font-family:futura light;color: #4579AE;">ALDRIGVILA</span><br>COMMUNITY</p></div></a>
								</div>
								</yo>
							</div></div></div>
							<div id="box4" class="col-md-8 col-xs-12">
								<div>
									<div>
										<div>
											<h6><i class="fa fa-circle-o"></i> AVBLOG</h6>
										</div>
										<feed>
										<?php include(get_template_directory() . "/inc/single-index.php");?>
										</feed>
										
									</div></div></div>
									<div id="box5" class="col-md-4 col-xs-12">
										<div>
											<div>
												<a href="http://www.sportkost.se/pwo-prestationshojare/pre-workout/aldrig-vila-gateway.html" target="_blank"> <img src="wp-content/uploads/2015/01/gateway-ad-1-e1422387826516.png" class="img-100" alt="img-100"></a>
											</div>
											</div> 
											</div>
										</div>
										
										<div id="main">
											
											<div class='row'>

						<img src="wp-content/uploads/2015/01/mikael-hollsten.png" alt="" class="center-block">

												<div class="col-md-12"><h1 class="text-center"><?php the_title();?></h1>
<div class="line"></div>
												</div>


												 <div class='col-md-12'>
												<div class="intro-text">
												<?php the_content();?>
													<br><br>
													<p>
													<span style="font-family:futura light;color:#6FC0F4;font-size:130%;"> MIKAEL HOLLSTEN</span><br>
													<span style="font-family:futura;color:#fff">CEO, ALDRIGVILA</span>
													</p>
													</div>

												</div>
								

<script>
var playListURL = 'http://gdata.youtube.com/feeds/api/playlists/PLWCHwmw-Qyyx1ycYwa7ThG36X6guol_K1?v=2&alt=json&callback=?';
var videoURL= 'http://www.youtube.com/watch?v=';
$.getJSON(playListURL, function(data) {
    var list_data="";
    $.each(data.feed.entry, function(i, item) {
        var feedTitle = item.title.$t;
        var feedURL = item.link[1].href;
        var fragments = feedURL.split("/");
        var videoID = fragments[fragments.length - 2];
        var url = videoURL + videoID;
        var thumb = "http://img.youtube.com/vi/"+ videoID +"/0.jpg";
        list_data += '<a href="'+ url +'" title="'+ feedTitle +'"><img class="img-responsive img-100" style="" alt="'+ feedTitle+'" src="'+ thumb +'"></a>';
         return false;
    });
   // $(list_data).appendTo(".vlog");
});





</script>


												</div><!-- .row -->
												</div> <!-- #main -->
												<script>
																//$('#box1').addClass('animated bounceInLeft');
																//$('#box2').addClass('animated bounceInDown');
																//$('#box3').addClass('animated bounceInRight');
																//$('#box4').addClass('animated bounceInDown');
																//$('#box5').addClass('animated bounceInRight');
												</script>
												
												<?php get_footer(); ?>