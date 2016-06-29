<?php 
/*
Template Name: Services Templete 
*/

get_header(); ?>

	<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
						<?php 
											/* Home page Slider Start*/
											$args				= array( 'post_type' => 'sup_slider');
											$homeSlide	= get_posts($args);

											foreach ($homeSlide as $hslide) 
											{	
													echo get_the_post_thumbnail($hslide->ID,'full'); 
											} 
							/* Home page Slider End*/
						?>
				</div>
				<div class="customNavigation">
					<a class="btn prev-main-slider"> <?php _e("Previous", "supertheme"); ?></a>
					<a class="btn next-main-slider"> <?php _e("Next", "supertheme"); ?></a>
				</div>
			</div>
			<!-- ENDS SLIDER -->
			
			<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf services_main_content">
					<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading"> <?php _e("Services", "supertheme"); ?></div>
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
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Our Process", "supertheme"); ?></span>
							</div>

							<p>
									<?php
													while ( have_posts() ) : the_post();	
															the_content();
															
													
									?>
							</p>
							
							<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more <?php _e("", "supertheme"); ?> &#187;</a></p>
						</div>
						<div class="one-half">
							<img src="img/servicesImage001.jpg" width="100%" alt="Welcome To Our Website" />
							<?php		
											get_the_post_thumbnail($post->ID,'thumbnail'); 
							
							endwhile; 
							
							
							
							
							?>
						</div>
						<!-- ENDS 2 cols -->
					</div>
					<div class="latest-blog">
						<div class="heading-box">
							<span class="heading-text"> <?php _e("Services", "supertheme"); ?></span>
						</div>
									<?php
														// Diplay the content dynamically from backend with service post type and service category.
														$argsService	= array('post_type' => 'sup_service','category' => 'service_page_category','posts_per_page' => '8',);
														$resultset			= get_posts($argsService);
														//echo "<pre>"; print_r($resultset);

														$i = 1;
														foreach($resultset as $resultsets)
														{
																if($i % 4 == 0)
																{       ?>
																		<div class="one-fourth">
																			<div class="services-page-icon">
																					<?php echo get_the_post_thumbnail($resultsets->ID,'thumbnail'); ?>
																			</div>
																			<div>
																				<h3 class="heading"><?php echo $resultsets->post_title; ?></h3>
																						<?php  echo $resultsets -> post_excerpt;  ?>
																				<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text"> <?php _e("read more", "supertheme"); ?> &#187;</a></p>
																			</div>
																	</div>
															<?php 
																	}
																else 
																{	
																	?>
																		<div class="one-fourth">
																				<div class="services-page-icon">
																					<?php echo get_the_post_thumbnail($resultsets->ID,'thumbnail'); ?>
																				</div>
																				<div>
																					<h3 class="heading"><?php echo $resultsets->post_title; ?></h3>
																						<?php  echo $resultsets -> post_excerpt;      ?>
																					<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text"> <?php _e("read more", "supertheme"); ?> &#187;</a></p>
																				</div>
																			</div>
														<?php
																	}
														}
									?>

								<!-- <div class="one-fourth">
										<div class="services-page-icon">
											<img src="img/ic_resopnsive_big_100.png" width="100%" border="0" alt="Responsive">
										</div>
										<div>
											<h3 class="heading">Responsive</h3>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
										</div>
								</div>
								<div class="one-fourth">
										<div class="services-page-icon">
											<img src="img/ic_HTML5.png" width="100%" border="0" alt="HTML 5">
										</div>
										<div>
											<h3 class="heading">HTML 5</h3>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
										</div>
								</div>
								<div class="one-fourth">
										<div class="services-page-icon">
											<img src="img/ic_flashlike.png" width="100%" border="0" alt="Flashlike">
										</div>
										<div>
											<h3 class="heading">Flashlike</h3>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
										</div>
								</div>
								<div class="one-fourth last">
										<div class="services-page-icon">
											<img src="img/ic_cross_browser.png" width="100%" border="0" alt="Cross Browser">
										</div>
										<div>
											<h3 class="heading">Cross Browser</h3>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
										</div>
								</div>
								<div class="one-fourth">
									<div class="services-page-icon">
										<img src="img/ic_admin_panel.png" width="100%" border="0" alt="Admin Panel">
									</div>
									<div>
										<h3 class="heading">Admin Panel</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
									</div>
								</div>
								<div class="one-fourth">
									<div class="services-page-icon">
										<img src="img/ic_easy_customization.png" width="100%" border="0" alt="Easy Customization">
									</div>
									<div>
										<h3 class="heading">Easy Customization</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
									</div>
								</div>
								<div class="one-fourth">
									<div class="services-page-icon">
										<img src="img/ic_support.png" width="100%" border="0" alt="Support">
									</div>
									<div>
										<h3 class="heading">Support</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
									</div>
								</div>
								<div class="one-fourth last">
									<div class="services-page-icon">
										<img src="img/ic_sliders.png" width="100%" border="0" alt="Sliders">
									</div>
									<div>
										<h3 class="heading">Sliders</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
									</div>
								</div> -->
							</div>
					<div class="cf"></div>

					<!-- GET IT NOW LEADERBOARD -->
					<div class="get-it-now-leaderboard cf">
						<div class="two-third margin-bottom-0">
							<p class=" header-text">Get a Free Quote</p>
							<p class="margin-bottom-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="one-third last button-panel margin-bottom-0">
							<div class="link-button green">
								Get it Now
							</div>
						</div>
					</div>
					<!-- END GET IT NOW LEADERBOARD -->
					<!-- TESTIMONIALS ONE -->
                    <div class="testimonial_content">
                        <div class="one-half">
                            <div class="testimonials-widget cf">
                                <div class="heading-box">
                                    <span class="heading-text"> <?php _e("Testimonials", "supertheme"); ?></span>
                                </div>
                                <div class="testimonial-text-panel-white">
                                        <?php
                                                    $args		 = array( 'post_type' => 'testimonial');
                                                    $testimonial = get_posts($args);

                                                        foreach ($testimonial as $testimonials)
                                                        {	echo $testimonials->post_content;  	?>
                                  </div>
                                <div class="testimonial-user-info-panel">
                                    <?php echo get_the_post_thumbnail($testimonials->ID,'thumbnail'); ?>
                                    <div class="testimonial-user-info-text">
                                    <div class="testimonial-user-name"><?php  echo $testimonials->_ikcf_client; ?></div>
                                                            <div class="testimonial-user-designation"><?php	echo $testimonials->_ikcf_position; ?></div>
                                                            <a href="#"><?php echo get_post_meta($testimonials->ID,'_website',true); ?></a>
                                            <?php 	}  		?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ENDS TESTIMONIALS ONE -->
                        <!-- OUR CLIENTS WIDGET -->
                        <div class="one-half last">
                            <div class="our-clients-widget cf">
                                <div class="heading-box">
                                    <span class="heading-text"> <?php _e("Our Clients", "supertheme"); ?></span>
                                </div>
                                            <?php   $args = array( 'post_type' => 'acme_ourclient','posts_per_page' => '6');
                                                    $clientResult = get_posts($args);
                                                    foreach($clientResult as $clientR)
                                                    {  ?>
                                            <div class="logo-our-clients-border our-clients-service-page">
                                                <?php echo get_the_post_thumbnail($clientR->ID,'thumbnail'); ?>
                                                <!--<img src="img/our-clients-logo001.jpg" width="100%" alt="Our Clients Logo 001 " />									-->
                                            </div>
                                            <?php } ?>
                            </div>
                        </div>
                        <!-- ENDS OUR CLIENTS WIDGET -->
                       </div><!--testimonial_content-->    
                        
                    </div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->
			


<?php get_footer(); ?>
