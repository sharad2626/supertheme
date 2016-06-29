<?php
/*
	Template Name: Contact us Template 3
*/
	get_header(); 
?>	
	<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
						<?php 
						if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();
							/* Home page Slider Start*/
							/*$args				= array( 'post_type' => 'sup_slider');
							$homeSlide	= get_posts($args);

							foreach ($homeSlide as $hslide) 
							{	
									echo get_the_post_thumbnail($hslide->ID,'full'); 
							} */
							/* Home page Slider End*/
						?>
				</div>
				<!-- <div class="customNavigation">
							<a class="btn prev-main-slider"> <?php _e("Previous", "supertheme");?></a>
							<a class="btn next-main-slider"> <?php _e("Next", "supertheme");?></a>
				</div> -->
			</div>
			<!-- ENDS SLIDER -->
			
			<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf">
					<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading"> <?php  echo get_the_title( ); ?></div>
					</div>
					<!-- END PAGE HEADING LEADERBOARD -->
					<!-- PAGE BREADCRUM -->
					<div id="page-breadcrum">
						<?php _e("Home" ,"supertheme")?> / <span class="active-page"> <?php  echo get_the_title( ); ?></span>
					</div>
					<!-- END PAGE BREADCRUM -->
					<div class="contact-us">
						<div class="full-width cf map-contactus">
							<?php     	$gmap_options=unserialize(get_option('Google_map_address')) ; ?>
										<div id="map_canvas" class="map-result conatct-page-map" ><iframe src="https://www.google.com/maps?q=<?php echo $gmap_options['gmap_address']; ?>&output=embed" width="900" height="295" frameborder="0" style="border:0"></iframe>
						</div>
						<div class="left-side-content one-half">
						<?php 
									if ( have_posts() ) : while ( have_posts() ) : the_post();       
										  the_content(); // displays whatever you wrote in the wordpress editor
									 endwhile; endif; //ends the loop
									 ?>
					</div>
						<div class="right-side-content conatct-form">
							<div class="one-half margin-bottom-0 last">
									<?php dynamic_sidebar('sidebar-5');?>
							</div>
						</div>
					</div>		
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->

<?php get_footer(); ?>
