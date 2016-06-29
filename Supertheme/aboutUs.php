<?php 

/*
Template Name: About Us1
*/


get_header(); ?>

<!-- SLIDER -->
<div class="main-slider"> 
	<div id="main-slider-owl-demo" class="owl-carousel">
		<?php 
							if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();

					/* Home page Slider Start*/
				/*			$args = array( 'post_type' => 'sup_slider', 'post_status'=>'publish', 'suppress_filters' => 0	);
							$homeSlide = get_posts($args);
							$slider_result = unserialize(get_option('slider_details')) ; 
							
							$slider_width = $slider_result['sliderWidth'];
							$slider_height = $slider_result['sliderHeight'];			
							
							foreach ($homeSlide as $hslide) 
							{	
								echo get_the_post_thumbnail($hslide->ID, array( $slider_width,  $slider_height) );
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
<!-- PURCHASE NOW LEADERBOARD -->
<div id="purchase-leaderboard">
	<div class="two-third text-panel">
		<p class="discription-text"><span class="logo-text"><?php _e("Super theme", "supertheme");?></span> <?php _e("is responsive multilingual Clean template", "supertheme");?>
		</p>
		<p><?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme");?></p>
	</div>
	<div class="one-third last button-panel">
		<div class="link-button green">
			<?php _e("Purchase Now ", "supertheme");?>
		</div>
	</div>
</div>			<!-- END PURCHASE NOW LEADERBOARD -->

<!-- MAIN -->
<div id="main">
	<div class="wrapper cf">
		<div class="about-us">
			<div class="one-half">
			<?php 
			        the_content(); 
				?>
			</div>
		</div>
		<div class="our-skills cf">
			<div class="one-half last">
				<div class="heading-box">
					<span class="heading-text"><?php _e("Our Skills","supertheme"); ?></span>
				</div>
				<span class="progress-bar-text"><?php _e("PHP","supertheme"); ?></span>
				<div class="progress-bar-bg">
					<div class="progress-bar progress-bar-php">
					</div>
				</div>
				<span class="progress-bar-text"><?php _e("HTML","supertheme"); ?></span>
				<div class="progress-bar-bg">
					<div class="progress-bar progress-bar-html">
					</div>
				</div>
				<span class="progress-bar-text"><?php _e("CSS","supertheme"); ?></span>
				<div class="progress-bar-bg">
					<div class="progress-bar progress-bar-css">
					</div>
				</div>
				<span class="progress-bar-text"><?php _e("Java Script","supertheme"); ?></span>
				<div class="progress-bar-bg">
					<div class="progress-bar progress-bar-java-script">
					</div>
				</div>
				<span class="progress-bar-text"><?php _e("SEO","supertheme"); ?></span>
				<div class="progress-bar-bg">
					<div class="progress-bar progress-bar-seo">
					</div>
				</div>
			</div>
		</div>
		<div class="our-team cf">
			<div class="heading-box">
				<span class="heading-text"><?php _e("Our Team","supertheme"); ?></span>
			</div>
			<?php 
							$args = array( 'post_type' => 'acme_ourteam');
							global $post; $myposts = get_posts($args);
							$i=1;

							foreach($myposts as $post) :
							if($i%2 == 1) :
						?>
										<div class="one-half">
											<div class="one-third fixed-one-third">
												<div class="our-team-img-panel"> <?php echo get_the_post_thumbnail($post->ID,'thumbnail'); ?></div>
											</div>
											<div class="two-third fixed-two-third last">
													<div class="name-and-designatin-panel">
														<?php echo $post->post_title; ?>  /<span class="designation"><?php echo get_post_meta($post->ID,'_designation',true); ?></span>
													</div>
														<?php echo $post->post_content; ?>
														<div class="social-icons-our-team">
															<a href="<?php echo get_post_meta($post->ID,'_fburl',true); ?>" class="facebook-icon-our-team"></a>
															<a href="<?php echo get_post_meta($post->ID,'_twurl',true); ?>" class="twitterIcon-our-team"></a>
															<a href="<?php echo get_post_meta($post->ID,'_gurl',true); ?>" class="gPlusIcon-our-team"></a>
															<a href="<?php echo get_post_meta($post->ID,'_lnurl',true); ?>" class="linkedInIcon-our-team"></a>
														</div> 
											</div>
										</div>
								<?php  else: ?>
										<div class="one-half last">
													<div class="one-third fixed-one-third">
														<div class="our-team-img-panel"><?php echo get_the_post_thumbnail($post->ID,'thumbnail'); ?></div>
													</div>
											<div class="two-third fixed-two-third last">
													<div class="name-and-designatin-panel">
														<?php echo $post->post_title; ?>  / <span class="designation"><?php echo get_post_meta($post->ID,'_designation',true); ?></span>
													</div>
												<?php echo $post->post_content; ?>
												<div class="social-icons-our-team">
													<a href="<?php echo get_post_meta($post->ID,'_fburl',true); ?>" class="facebook-icon-our-team"></a>
													<a href="<?php echo get_post_meta($post->ID,'_twurl',true); ?>" class="twitterIcon-our-team"></a>
													<a href="<?php echo get_post_meta($post->ID,'_gurl',true); ?>" class="gPlusIcon-our-team"></a>
													<a href="<?php echo get_post_meta($post->ID,'_lnurl',true); ?>" class="linkedInIcon-our-team"></a>
												</div> 
											</div>

									</div>
									<?php
											endif;
											$i++;
											endforeach;
								?>
			</div>
		</div>
		
		<div class="our-clients">
						<div class="heading-box">
							<span class="heading-text"> <?php _e("Our Clients", "supertheme");?></span>
						</div>
						<div class="full-width">
							<div id="our-clients-owl-demo" class="owl-carousel">

								<?php 
												$args = array( 'post_type' => 'acme_ourclient');
												$clientResult = get_posts($args);
												$i = 1;
												
												foreach($clientResult as $clientR)
												{ 
								?>
									<div class="item logo-our-clients-border">
										<?php  	echo get_the_post_thumbnail($clientR->ID,'thumbnail' ) ; 	 ?>
									</div>
								<?php 		}		?>
							</div>
							<div class="customNavigation">
								<a class="btn prev-our-clients"> <?php _e("Previous", "supertheme");?></a>
								<a class="btn next-our-clients"> <?php _e("Next", "supertheme");?> </a>
							</div>
						</div>
					</div>
	</div><!-- ENDS WRAPPER -->
</div>
<!-- ENDS MAIN -->

<?php   get_footer(); ?>