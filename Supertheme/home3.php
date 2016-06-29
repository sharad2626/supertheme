<?php 
/*
Template Name: Home Page 3
*/

get_header();
?>

	<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
					<?php 
					if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();
							/* Home page Slider Start*/
								/*			$args			= array( 'post_type' => 'sup_slider');
											$homeSlide = get_posts($args);
											//echo "<pre>"; print_r($homeSlide);	
											
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
					<p class="discription-text">
						<span class="logo-text"><?php _e("Super theme", "supertheme");?></span> <?php _e("is responsive multilingual Clean template", "supertheme");?>
					</p>
					<p>
						<?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme");?>
					</p>
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
					<div class="home-content">
						<!-- 2 cols -->
						<div class="one-half">
							<img src="<?php bloginfo('template_url'); ?>/img/welcomeWebsiteHomeThree.jpg" width="100%"
								alt="Welcome To Our Website" />
						</div>
						<div class="one-half last">
							<?php while ( have_posts() ) : the_post();   ?>
								<div class="heading-box">
										<pre id="tw-target-text" class="tw-data-text vk_txt tw-ta tw-text-medium" dir="rtl" data-fulltext="" data-placeholder="Translation"><span lang="ar">	<?php the_title(); ?></span></pre>
								</div>
								<?php the_content(); ?>
						
							<?php endwhile;?>
						</div>

						<!-- ENDS 2 cols -->
						<div class="cf"></div>
					</div>
					<div class="latest-blog custom_blog">
						<div class="heading-box">
							<span class="heading-text"> <?php _e("Latest Blog Posts", "supertheme");?></span>
						</div>
									<?php
												$args1			=   array('post_type' => 'acme_blog', 'order' => 'desc','posts_per_page' => '4') ;
												$getlatestb	=    get_posts($args1);
												//echo "<pre>"; 	print_r($getlatestb);
												
												$i = 1;
												foreach( $getlatestb as $getResult)
												{
														if($i % 4 == 0)
														{   ?>
																		<div class="one-fourth last">
																				<?php echo get_the_post_thumbnail($getResult->ID); ?>
																				<?php   echo $getResult->post_excerpt;    ?>
																			<p class="text-align-right margin-bottom-0">
																				<a href="" class="read-more-text"><?php _e("read more","supertheme"); ?>&#187;</a>
																			</p>
																		</div>

												<?php 
															}
															else
															{      ?>
																				<div class="one-fourth">
																						<?php echo get_the_post_thumbnail($getResult->ID); ?>
																						<?php   echo $getResult->post_excerpt;    ?>
																							<p class="text-align-right margin-bottom-0">
																								<a href="" class="read-more-text"><?php _e("read more","supertheme"); ?>&#187;</a>
																						   </p>
																				</div>
												<?php }
															$i++;
												}



									?>

					</div>
					<div class="cf"></div>
					<div class="tweets">
						<div class="tweet-box cf">
							<div class="tweet-icon-big">
								<img src="<?php bloginfo('template_url'); ?>/img/tweeter-icon.jpg" width="100%" alt="Tweeter Icon" />
							</div>
							<div class="tweet-chat">
								<h3 class="heading"> <?php _e("Tweets", "supertheme");?></h3>
								<span class="tweets-date">January 26 12:05</span>
								<p class="tweet-text">"Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut labore et dolore magna aliqua. Sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua"</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- ENDS WRAPPER -->
			<!-- ENDS MAIN -->



<?php  get_footer(); ?>