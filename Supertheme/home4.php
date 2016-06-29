<?php
/*
	Template Name: Home Page 4
*/
get_header();
?>
		<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
					<?php 
					if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();
								/* Home page Slider Start*/
								/*	$args			= array( 'post_type' => 'sup_slider');
									$homeSlide = get_posts($args);
								
									foreach ($homeSlide as $hslide) 
									{	
										echo get_the_post_thumbnail($hslide->ID,'full'); 
									} */
							/* Home page Slider End*/
						?>
				</div>
				<!-- <div class="customNavigation">
					<a class="btn prev-main-slider"> <?php _e("Previous", "supertheme");?></a>
					<a class="btn next-main-slider"> <?php _e("Next", "supertheme");?> </a>
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
					<div id="page-content-sb" class="cf"> 
						<div class="home-content">
							<div class="featured-projects">
								<div class="full-width margin-bottom-0">
									<div class="heading-box">
										<span class="heading-text"><?php _e("Featured Projects", "supertheme"); ?></span>
									</div>
									<div id="featured-projects-owl-demo" class="owl-carousel">
									<?php
											$args2= array( 'post_type' => 'post','category' => 'featured-projects' ,'posts_per_page' => '3');
                                            $featuredpro = get_posts($args2);
											//echo "<pre>";print_r($featuredpro);

                                           foreach($featuredpro as $featuredProj) 
											{   ?>
													<div class="item">	
														<div class="one-half">
															<?php echo get_the_post_thumbnail($featuredProj->ID,'medium');   ?> 
														</div>
														<div class="one-half last">
															<h3 class="heading"><?php echo $featuredProj-> post_title; ?></h3>
															<p class="margin-bottom-0"><?php echo $featuredProj-> post_excerpt?></p>
															<p class="text-align-right"><a href="<?php echo $featuredProj->ID ; ?> class="read-more-text"> <?php _e("read more", "supertheme");?> &#187;</a></p>
														</div>
												</div><!-- Item div finish -->
											
										<?php	}
											?>						
									</div>
									<div class="customNavigation">
										<a class="btn prev-featured-projects"> <?php _e("Previous", "supertheme");?></a>
										<a class="btn next-featured-projects"> <?php _e("Next", "supertheme");?></a>
									</div>
								</div>
							</div>
							<div class="featured-posts">
								<div class="full-width margin-bottom-0">
									<div class="heading-box">
										<span class="heading-text"><?php _e("Featured Posts","supertheme"); ?></span>
									</div>
										<div id="featured-posts-owl-demo" class="owl-carousel">
											<?php 
															$args2 = array('post_type'=> 'post', 'category_name'=> 'featured-posts');
															$fpo_result = get_posts($args2);
															foreach($fpo_result as $fpo_rsl)
															{
											?>
												<div class="item">
													<?php echo get_the_post_thumbnail($fpo_rsl->ID,'medium');?>
													<!-- <img src="<?php bloginfo('template_url'); ?>/img/featured-posts-home-sample-four-001.jpg" width="100%" border="0" alt="Featured Projects"> -->
													<?php echo $fpo_rsl->post_excerpt; ?>
													<p class="text-align-right"><a href="" class="read-more-text"><?php _e("read more", "supertheme");?>>></a></p>
												</div>
												<?php } ?>									
									</div>
									<div class="customNavigation">
										<a class="btn prev-featured-posts"> <?php _e("Previous", "supertheme");?></a>
										<a class="btn next-featured-posts"> <?php _e("Next", "supertheme");?></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- SIDEBAR -->
					<aside id="sidebar">
						<!-- FEATURES WIDGET -->
						<div class="features-widget">
							<div class="heading-box">
								<span class="heading-text"><?php _e("Features", "supertheme");?></span>
							</div>
								<?php 
										global $post; 
										$args = array('post_type'=> 'post','category_name'=>'homecategory');
										$result = query_posts($args);
										//echo "<pre>";var_dump($result);
										$i=0;
									    
										foreach($result as $results)
										{	?>
											<h3 class="heading">
														<span class="easy-customization-icon"></span><?php  echo $results->post_title ?>
												</h3>
												<?php  echo $results->post_excerpt; ?>
												<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text"><?php _e("read more", "supertheme");?>>></a></p>
									
								<?php	}  	?>								
						</div>
						<!-- ENDS FEATURES WIDGET -->
					</aside>
					<!-- ENDS SIDEBAR -->	
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->
<?php get_footer();?>