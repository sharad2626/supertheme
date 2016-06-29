<?php
/*
	Template Name: Portfolio Templete 3
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
						<div class="master-heading"> <?php _e("Portfolio", "supertheme");?> </div>
					</div>
					<!-- END PAGE HEADING LEADERBOARD -->
					<!-- PAGE BREADCRUM -->
					<div id="page-breadcrum">
						Home / <span class="active-page"> <?php _e("Portfolio", "supertheme");?></span>
					</div>
					<!-- END PAGE BREADCRUM -->
					
					<!-- PAGE MAIN CONTENT -->
					<div class="home-featured">
					<?php		 $terms = get_terms( 'work-category' );  ?>
			
						<ul id="filter-buttons">
						<?php    	foreach($terms as $term_result)  { 		?>
								<li><a href="javascript:void(0);" data-filter="*" id="termlist" onclick="getresult(<?php echo $term_result->term_id ; ?>)" value="<?php echo $term_result->term_id ; ?>"><?php echo  $term_result->name;   ?></a>
										</li>
								<?php } ?>
						</ul>
						
						<!-- Filter container -->
						<div id="filter-container" class="cf">
						<?php	/* Recent work  Start*/
											$args				    = array( 'post_type' => 'post','category'=> 'recent_work');
											$RecentwrkRsl	= get_posts($args);
										
											$i=1;
											foreach ($RecentwrkRsl as $Recentwork) 
											{	
												if($i%3 == 0) 
												{
											?>
											<figure class="portfolio-img web">
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
											</figure>
											<?php
												}
												else
												{
													?>
													<figure class="portfolio-img web">
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
													</figure>
										<?php
												}
													$i++;
											} 
									/* Recent work End*/
									?>
							<!-- <figure class="portfolio-img print">
								<img src="img/portfolio-images/portfolio-images-004.jpg" alt="Portfolio Image 4">
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
							</figure>
							<figure class="portfolio-img design">
								<img src="img/portfolio-images/portfolio-images-006.jpg" alt="Portfolio Image 6">
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
							</figure>
							<figure class="portfolio-img photo">
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
							</figure>
							<figure class="portfolio-img web photo">
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
							</figure>
							<figure class="portfolio-img web print">
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
							</figure>
							<figure class="portfolio-img photo">
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
							</figure>
							<figure class="portfolio-img web photo">
								<img src="img/portfolio-images/portfolio-images-003.jpg" alt="Portfolio Image 3">
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
							</figure>
							<figure class="portfolio-img web print">
								<img src="img/portfolio-images/portfolio-images-005.jpg" alt="Portfolio Image 5">
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
							</figure> -->

						</div><!-- ENDS Filter container -->
					</div><!-- ENDS PAGE MAIN CONTENT -->
					
					
					
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->

<?php get_footer(); ?>
