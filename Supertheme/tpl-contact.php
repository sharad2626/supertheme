<?php
/*
	Template Name: Contact us 1
*/
		get_header(); 
?>
			<!-- SLIDER -->				
					<?php     	$gmap_options=unserialize(get_option('Google_map_address')) ;
										//print_r($gmap_options);
							?>
					 <div class="main-slider"> 
								<div id="main-slider-owl-demo" class="owl-carousel">
											<iframe src="https://www.google.com/maps?q=<?php echo $gmap_options['gmap_address']; ?>&output=embed" width="1024" height="360" frameborder="0" style="border:0"></iframe>
								</div>
						</div> 
			<!-- ENDS SLIDER -->


		<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf">
					<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading"> <?php _e("Contact Us", "supertheme"); ?></div>
					</div>
					<!-- END PAGE HEADING LEADERBOARD -->
					<!-- PAGE BREADCRUM -->
					<!-- <div id="page-breadcrum">
						Home / <span class="active-page">Services</span>
					</div> -->
					<!-- END PAGE BREADCRUM -->
					<div class="services-content cf">
						<!-- 2 cols -->
						<div class="one-half">
							<!-- <div class="heading-box">
								<span class="heading-text">Our Process</span>
							</div> -->
							<p>
							<?php
								while ( have_posts() ) : the_post();	

									$content = get_the_content();	

											if(has_shortcode( $content, 'contact-form-7' ) )
											{
												echo "this is in contact form";
												echo do_shortcode( $content);
											}
											else
											{
												the_content();
											}
									endwhile; 
							?>
							</p>						
						</div>
						
						<!-- ENDS 2 cols -->
					</div>
							
					<div class="cf"></div>

							
			</div>
			<!-- ENDS MAIN -->


<?php get_footer(); ?>
