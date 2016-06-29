<?php
/*
	Template Name: Portfolio Template 2
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
					<a class="btn next-main-slider"><?php _e("Next", "supertheme");?></a>
				</div> -->
			</div>
			<!-- ENDS SLIDER -->

			<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf portfolio_gall">
                	<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading"> <?php _e("Portfolio", "supertheme");?></div>
					</div>
					<!-- END PAGE HEADING LEADERBOARD -->
					<!-- PAGE BREADCRUM -->
					<div id="page-breadcrum">
					<?php	_e("Home","supertheme"); ?> / <span class="active-page"> <?php _e("Portfolio", "supertheme");?></span>
					</div>
					<!-- END PAGE BREADCRUM -->
					<div class="portfolio-content cf">
                    	<div class="recent-work-portfolio-panel">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Recent Work", "supertheme");?></span>
							</div>
								<?php 
											/* Recent work  Start*/
											$args				    = array( 'post_type' => 'post','category'=> 'recent_work');
											$RecentwrkRsl	= get_posts($args);
											//print_r($RecentwrkRsl);
											//exit;
											$i=1;
											foreach ($RecentwrkRsl as $Recentwork) 
											{	
												if($i%3 == 0) 
												{
												?>
												<div class="one-third portfolio-img last">
													<?php echo get_the_post_thumbnail($Recentwork->ID,'medium');  ?> 
														 <div class="portfolio-img-hover-panel">
																	<div class="portfolio-img-hover-buttons-panel">
																					<a href="#">
																						<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_info.png">
																					</a>
																					<a href="#">
																						<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_link.png">
																					</a>
																				</div>	
														</div>
											</div>												
										<?php
												}
												else
												{
													?>
														<div class="one-third portfolio-img">
															<?php echo get_the_post_thumbnail($Recentwork->ID,'medium');  ?> 
																 <div class="portfolio-img-hover-panel">
																			<div class="portfolio-img-hover-buttons-panel">
																							<a href="#">
																								<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_info.png">
																							</a>
																							<a href="#">
																								<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_link.png">
																							</a>
																						</div>	
																</div>
													</div>		
										<?php
												}
													$i++;
											} 
									/* Recent work End*/
									?>
								</div>
                        </div>
						<div class="recent-work-portfolio-panel">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Old Work", "supertheme");?></span>
							</div>
							<?php 
											/* Recent work  Start*/
											$args				    = array( 'post_type' => 'post','category'=> 'recent_work');
											$RecentwrkRsl	= get_posts($args);
											//print_r($RecentwrkRsl);
											//exit;
											$i=1;
											foreach ($RecentwrkRsl as $Recentwork) 
											{	
												if($i%3 == 0) 
												{
												?>
												<div class="one-third portfolio-img last">
													<?php echo get_the_post_thumbnail($Recentwork->ID,'medium');  ?> 
														 <div class="portfolio-img-hover-panel">
																	<div class="portfolio-img-hover-buttons-panel">
																					<a href="#">
																						<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_info.png">
																					</a>
																					<a href="#">
																						<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_link.png">
																					</a>
																				</div>	
														</div>
											</div>												
										<?php
												}
												else
												{
													?>
														<div class="one-third portfolio-img">
															<?php echo get_the_post_thumbnail($Recentwork->ID,'medium');  ?> 
																 <div class="portfolio-img-hover-panel">
																			<div class="portfolio-img-hover-buttons-panel">
																							<a href="#">
																								<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_info.png">
																							</a>
																							<a href="#">
																								<img src="<?php echo get_template_directory_uri(); ?>/img/ic_portfolio_link.png">
																							</a>
																						</div>	
																</div>
													</div>		
										<?php
												}
													$i++;
											} 
									/* Recent work End*/
									?>
							<!-- <div class="one-third portfolio-img">
								<img src="img/portfolio-images/portfolio-images-007.jpg" alt="Portfolio Image 7">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img">
								<img src="img/portfolio-images/portfolio-images-008.jpg" alt="Portfolio Image 8">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img last">
								<img src="img/portfolio-images/portfolio-images-009.jpg" alt="Portfolio Image 9">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img">
								<img src="img/portfolio-images/portfolio-images-010.jpg" alt="Portfolio Image 10">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img">
								<img src="img/portfolio-images/portfolio-images-011.jpg" alt="Portfolio Image 11">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img last">
								<img src="img/portfolio-images/portfolio-images-012.jpg" alt="Portfolio Image 12">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img">
								<img src="img/portfolio-images/portfolio-images-013.jpg" alt="Portfolio Image 13">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img">
								<img src="img/portfolio-images/portfolio-images-014.jpg" alt="Portfolio Image 14">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div>
							<div class="one-third portfolio-img last">
								<img src="img/portfolio-images/portfolio-images-015.jpg" alt="Portfolio Image 15">
								<div class="portfolio-img-hover-panel">
									<div class="portfolio-img-hover-buttons-panel">
										<a href="#">
											<img src="img/ic_portfolio_info.png">
										</a>
										<a href="#">
											<img src="img/ic_portfolio_link.png">
										</a>
									</div>	
								</div>
							</div> -->

                        </div>
                    </div>
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->
<?php get_footer(); ?>
