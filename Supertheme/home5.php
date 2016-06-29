<?php 
/*
	Template Name: Home Page5
*/
get_header();
?>
<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
				<?php 
				if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();
							/* Home page Slider Start*/
									/*		$args			= array( 'post_type' => 'sup_slider');
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
					<a class="btn prev-main-slider"> <?php _e("Previous", "supertheme");?> </a>
					<a class="btn next-main-slider"> <?php _e("Next", "supertheme");?></a>
				</div> -->
			</div>
			<!-- ENDS SLIDER -->
	<!-- PURCHASE NOW LEADERBOARD -->
			<div id="purchase-leaderboard">
				<div class="two-third text-panel">
						<p class="discription-text"><span class="logo-text"><?php _e("Super theme", "supertheme"); ?></span> <?php _e("is responsive multilingual Clean template", "supertheme" ); ?></p>
					<p><?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme"); ?></p>
				</div>
				<div class="one-third last button-panel">
					<div class="link-button green">
						<?php _e("Purchase Now", "supertheme"); ?>
					</div>
				</div>
			</div>

			<!-- END PURCHASE NOW LEADERBOARD -->
			<!-- MAIN -->
			
			<div id="main">
				<div class="wrapper cf">
					<div class="home-sample-five-content">
						<!-- 3 cols -->

						<?php 
										//global $post; 
										$args2 = array('post_type'=> 'post','category_name'=>'homepage_cat_five' , 'post_per_page'=>'3');
										$resultArray = query_posts($args2);
										//echo "<pre>";var_dump($result);
									
										$i=1;
									    
										foreach($resultArray as $resultArr)
										{
												if($i%3 == 0) 
												{
													//echo "<pre>";	print_r($result);
												?>
																<div class="one-third last">
																	<?php echo get_the_post_thumbnail($resultArr->ID);   ?> 
																		<h3 class="heading"> <?php  echo $resultArr->post_title ?> </h3>
																		<?php  echo $resultArr->post_excerpt; ?>
																		<p class="text-align-right margin-bottom-0">
																				<a href="" class="read-more-text"><?php _e("read more", "supertheme");?>>></a>
																		</p>
																</div>
										<?php 
												}
												else
													{   ?>

														<div class="one-third">
																<?php echo get_the_post_thumbnail($resultArr->ID);   ?> 
																<h3 class="heading"><?php  echo $resultArr->post_title ?> </h3>
																<?php  echo $resultArr->post_excerpt; ?>
																<p class="text-align-right margin-bottom-0">
																	<a href="" class="read-more-text"><?php _e("read more", "supertheme");?>>></a>
																</p>
														</div>


											<?php 
												}
													$i++;
										}
								?>
																
						<!-- ENDS 3 cols -->
						<div class="cf"></div>
					</div>
					<div class="from-the-blog">
						<div class="two-third">
							<!-- <div class="heading-box">
								<span class="heading-text">From the blog</span>
							</div> -->
							<!-- TABS -->
							<ul class="tabs">
								<li><a href="#"><span>Tab1</span></a></li>
								<li><a href="#"><span>Tab2</span></a></li>
								<li><a href="#"><span>Tab3</span></a></li>
								<li><a href="#"><span>Tab4</span></a></li>
								<li><a href="#"><span>Tab5</span></a></li>
							</ul>
							<div class="panes">
								<div>
									<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
									
								</div>
								<div>
									<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								</div>
								
								<div>
									<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								</div>
								<div>
									<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								</div>
								<div>
									<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
								</div>

								<!-- ENDS TABS -->
							</div>
						</div>
					</div>
					<!-- TWEET WIDGET -->
					<div class="tweet-widget cf">
						<div class="one-third last block_side">
							<div class="heading-box ">
								<span class="heading-text"><?php _e("Recent Tweets","supertheme"); ?></span>
							</div>
							<p class="recent-tweet-date">
								25th Feb 2014  8.30
							</p>
							<p>
								"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" <a href="">http://consecteturadipisicing.com/consectetur</a>
							</p>
							<p class="recent-tweet-date">
								25th Feb 2014  8.30
							</p>
							<p>
								"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua" <a href="">http://consecteturadipisicing.com/consectetur</a>
							</p>
						</div>
					</div>
					<!-- ENDS TWEET WIDGET -->
					<div class="our-clients">
						<div class="heading-box">
							<span class="heading-text"><?php _e("Our Clients","supertheme"); ?></span>
						</div>
						<div class="full-width">
							<div id="our-clients-owl-demo" class="owl-carousel">

							<?php 		
												$args = array( 'post_type' => 'acme_ourclient');
												$clientResult = get_posts($args);
											
												foreach($clientResult as $clientR)
												{  ?>
														<div class="item logo-our-clients-border">
															<?php  	echo get_the_post_thumbnail($clientR->ID,'thumbnail'); 	 ?>
														</div>
								  
										<?php }   // Foreach for Our Client ?>
						
								
							</div>
							<div class="customNavigation">
								<a class="btn prev-our-clients"> <?php _e("Previous", "supertheme");?> </a>
								<a class="btn next-our-clients"> <?php _e("Next", "supertheme");?></a>
							</div>
						</div>
					</div>
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->


<?php  get_footer(); ?>