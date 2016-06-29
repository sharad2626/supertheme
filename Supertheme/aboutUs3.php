<?php 
/*
Template Name: About Us3
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
			<!-- PURCHASE NOW LEADERBOARD -->
			<div id="purchase-leaderboard">
				<div class="two-third text-panel">
					<p class="discription-text"><span class="logo-text"><?php _e("Super theme", "supertheme");?></span> <?php _e("is responsive multilingual Clean template", "supertheme");?></p>
					<p><?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme");?></p>
				</div>
				<div class="one-third last button-panel">
					<div class="link-button green">
						<?php _e("Purchase Now ", "supertheme");?>
					</div>
				</div>
			</div>
			<!-- END PURCHASE NOW LEADERBOARD -->
			<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf">
					<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading"> <?php _e("About Us", "supertheme");?></div>
					</div>
					<!-- END PAGE HEADING LEADERBOARD -->
					<!-- PAGE BREADCRUM -->
					<div id="page-breadcrum">
						<?php _e("About us", "supertheme");?>  / <span class="active-page">  <?php _e("our vision", "supertheme");?></span>
					</div>
					<!-- END PAGE BREADCRUM -->
					<div class="our-vision">
						<div class="full-width margin-bottom-0">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Our Vision", "supertheme");?></span>
							</div>
							<!-- 3 cols -->

					<?php

								$args1			= array('post_type' =>'acme_ourvision' , 'post_per_pages'=>' 3' );
                                $resultdata	= get_posts($args1);
								//echo "<pre>"; print_r($resultdata);
								
								$i = 1;
								foreach($resultdata as $result)
								{
									if($i % 3 == 0)
									{  ?>
												<div class="one-third last">
													<?php   echo $result->post_content;   ?>
													<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text"> <?php _e("read more", "supertheme");?> &#187;</a></p>
												</div>	
									<?php 
										}
									else
									{   ?> 
												<div class="one-third">
													<?php   echo $result->post_content;   ?>
													<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text"> <?php _e("read more", "supertheme");?> &#187;</a></p>
												</div>

								<?php	}
								$i++;
								}


					?>
				<!-- 	<div class="one-third">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco
								<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
							</div>
							<div class="one-third">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco
								<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
							</div>
							<div class="one-third last">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco
								<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
							</div> -->
							<!-- ENDS 3 cols -->
						</div>
					</div>
					<div class="our-team cf">
						<div class="heading-box">
							<span class="heading-text"> <?php _e("Our Team", "supertheme");?></span>
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
										else: ?>
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

								<?php 	$args = array( 'post_type' => 'acme_ourclient');
												$clientResult = get_posts($args);
												$i = 1;
												foreach($clientResult as $clientR)
												{ 
								?>
									<div class="item logo-our-clients-border">
										<?php  	echo get_the_post_thumbnail($clientR->ID,'thumbnail' ) ; 	 ?>
									</div>

								<?php 
												}	
								
								?>
							
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

<?php  get_footer();?>