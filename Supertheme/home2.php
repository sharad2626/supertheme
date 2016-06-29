<?php 
/*
Template Name: Home Page
*/

get_header(); ?>


<script type="text/javascript">
 /*$(document).ready(function()
 {
     setupRotator();
 });
 function setupRotator()
 {
     if($('.textItem').length > 1)
     {
         $('.textItem:first').addClass('current').fadeIn(1000);
         setInterval('textRotate()', 3000);
     }
 }
     function textRotate()
     {
         var current = $('#quotes > .current');
         if(current.next().length == 0)
         {
             current.removeClass('current').fadeOut(1000);
             $('.textItem:first').addClass('current').fadeIn(1000);
         }
         else
         {
             current.removeClass('current').fadeOut(1000);
             current.next().addClass('current').fadeIn(1000);
         }
     }*/
</script>
	<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
						<?php 
						if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();
								/* Home page Slider Start*/
										/*	$args				= array( 'post_type' => 'sup_slider');
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
					<div id="page-content-sb" class="cf adj_pageContentSb"> 
						<div class="home-content">
							<div class="one-third hp02_hdr_img_r">
								<img src="<?php bloginfo('template_url'); ?>/img/homePageOptionTwo.jpg" width="100%" border="0" alt="Home page sample 2">
							</div>
							<!-- TOGGLE -->
							<div class="two-third text-panel last hp02_hdr_aco">
								<?php 
									$args_togg = array('post_type'=>'post','post_per_pages'=>'2','category_name' => 'featured-posts');
									$togg_resl = get_posts($args_togg);
									//print_r($togg_resl);
									foreach($togg_resl as $togg_r) {
								?>
										<div class="toggle-trigger"><?php echo $togg_r->post_title; ?></div>		
										<div class="toggle-container"><?php echo $togg_r->post_excerpt; ?>	</div>
								<?php } ?>
								<!-- <div class="toggle-trigger">Toggle</div>			
								<div class="toggle-container">
									Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
								</div>
								<div class="toggle-trigger">Toggle</div>			
								<div class="toggle-container">
										Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
								</div>
								<div class="toggle-trigger">Toggle</div>			
								<div class="toggle-container">
									Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
								</div> -->
							</div>
							<!-- ENDS TOGGLE -->
							<div class="featured-projects">
								<div class="full-width margin-bottom-0">
									<div class="heading-box">
										<span class="heading-text"> <?php _e("Featured Projects", "supertheme");?></span>
									</div>
										<?php
											$args1= array( 'post_type' => 'sup_work' ,'order' => 'ASC','category' => 'work-category');
                                            $featured_project = get_posts($args1);

                                             $i = 1;                                         
                                           foreach($featured_project as $featuredProject) 
											{   
												if($i % 3 == 0)
												{
												?>
												<div class="one-third last">
														<?php echo get_the_post_thumbnail($featuredProject->ID,array(200,200)); ?>
															<?php  //echo $featuredProject->post_excerpt;  ?>
														<p class="text-align-right margin-bottom-0"><a href="<?php echo get_permalink($featuredProject-ID); ?>" class="read-more-text" <?php _e("read more", "supertheme");?> &#187;</a></p>
												</div>
										<?php	}
												else
												{     ?>
												<div class="one-third">
															<?php echo get_the_post_thumbnail($featuredProject->ID,array(200,200)); ?>
															<?php  //echo $featuredProject->post_excerpt;  ?>
														<p class="text-align-right margin-bottom-0"><a href="<?php echo get_permalink($featuredProject-ID); ?>" class="read-more-text"> <?php _e("read more", "supertheme");?> &#187;</a></p>
												</div>
											<?php 
												}
												$i++;
											}
											?>

									</div>
							</div>
							<div class="our-team">
								<div class="one-third">
									<div class="heading-box">
										<span class="heading-text"> <?php _e("Our Team", "supertheme");?></span>
									</div>
									<ul id="our-team-owl-demo" class="owl-carousel">
									<?php	$args = array( 'post_type' => 'acme_ourteam');
												$ourTeams = get_posts($args);
												foreach($ourTeams as $ourTeam) 
													{    
												?>
												<li><?php echo get_the_post_thumbnail($ourTeam->ID,'thumbnail'); ?></li>
										<?php } ?>
									</ul>
								</div>
							</div>
							<div class="our-skills">
								<div class="two-third last">
									<div class="heading-box">
										<span class="heading-text"> <?php _e("Our Skills", "supertheme");?></span>
									</div>
									<span class="progress-bar-text">PHP</span>
									<div class="progress-bar-bg">
										<div class="progress-bar progress-bar-php">
										</div>
									</div>
									<span class="progress-bar-text">HTML</span>
									<div class="progress-bar-bg">
										<div class="progress-bar progress-bar-html">
										</div>
									</div>
									<span class="progress-bar-text">CSS</span>
									<div class="progress-bar-bg">
										<div class="progress-bar progress-bar-css">
										</div>
									</div>
									<span class="progress-bar-text">Java Script</span>
									<div class="progress-bar-bg">
										<div class="progress-bar progress-bar-java-script">
										</div>
									</div>
									<span class="progress-bar-text">SEO</span>
									<div class="progress-bar-bg">
										<div class="progress-bar progress-bar-seo">
										</div>
									</div>
								</div>
							</div>
						<div class="services">
								<div class="full-width margin-bottom-0">
									<div class="heading-box">
										<span class="heading-text"> <?php _e("Services", "supertheme");?></span>
									</div>
													<?php
																global $post; 
																$args = array('post_type'=> 'post','category_name'=>'service_cat');
																$serviceRes = query_posts($args);
																//echo "<pre>";var_dump($serviceRes);
																
																	$i=1;
																
																	foreach($serviceRes as $Serresults)
																	{	
																			if($i % 3 == 1)
																			{
																		?>
																						<div class="one-third last">
																								<?php echo  get_the_post_thumbnail($Serresults->ID, 'thumbnail');   ?>
																								<h3 class="heading text-align-center"><?php  echo $Serresults->post_title ?></h3>
																											<?php  echo $Serresults->post_excerpt; ?>
																								<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
																						</div>
																			
																		<?php	} 
																					else
																					{          ?>

																							<div class="one-third">
																								<?php get_the_post_thumbnail($Serresults->ID, 'thumbnail');   ?>
																								<h3 class="heading text-align-center"><?php  echo $Serresults->post_title ?></h3>
																											<?php  echo $Serresults->post_excerpt; ?>
																								<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">read more &#187;</a></p>
																						</div>

																				<?php }

																	}
																?>		
												</div>
							</div>

							<div class="from-the-blog">
								<div class="full-width">
									<div class="heading-box">
										<span class="heading-text"> <?php _e("From the blog", "supertheme");?></span>
									</div>
									<!-- TABS -->
									<ul class="tabs">
										<li><a href="#"><span> <?php _e("Recent", "supertheme");?></span></a></li>
										<li><a href="#"><span> <?php _e("Popular", "supertheme");?></span></a></li>
										<li><a href="#"><span> <?php _e("Featured", "supertheme");?></span></a></li>
									</ul>
									<div class="panes">
											<?php
														$args3= array( 'post_type' => 'acme_blog' ,'post_per_pages' => '3' )  ;
														$NewsR = get_posts($args3);

													   foreach($NewsR as $newsresult) 
														{   ?>
															<div>
																<p> <?php  echo $newsresult->post_excerpt;  ?></p>
																<p class="text-align-right margin-bottom-0"><a href="<?php get_permalink($newsresult->ID) ?>" class="read-more-text"><?php _e("read more", "supertheme");?> &#187;</a></p>
															</div>
													<?php	}
														?>
										<!-- ENDS TABS -->
									</div>
								</div>
							</div>
							<div class="events">
								<div class="two-third text-panel">
									<div class="heading-box">
										<span class="heading-text"> <?php _e("Events", "supertheme");?></span>
									</div>
																		<p>
																			<span class="event-date">
																				25th Feb 2014
																			</span>
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit
																		</p>
																		<p>
																			<span class="event-date">
																				25th Feb 2014
																			</span>
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit
																		</p>
																		<p>
																			<span class="event-date">
																				25th Feb 2014
																			</span>
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit
																		</p>
																		<p>
																			<span class="event-date">
																				25th Feb 2014
																			</span>
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit
																		</p>
																		<p>
																			<span class="event-date">
																				25th Feb 2014
																			</span>
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit
																		</p>
																		<p class="margin-bottom-0">
																			<span class="event-date">
																				25th Feb 2014
																			</span>
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit
																		</p>
								</div>
							</div>
							<div class="publications">
								<div class="one-third last">
									<div class="heading-box">
										<span class="heading-text"> <?php _e("Publication", "supertheme");?></span>
									</div>
									<p class="margin-bottom-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt ut labore et dolore magna aliqua"
									</p>
									<a href="#">Download PDF</a>
									<p class="margin-bottom-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt ut labore et dolore magna aliqua"
									</p>
									<a href="#">Download PDF</a>
								</div>
							</div>
						</div>
					</div>
					<!-- SIDEBAR -->
					<aside class="new_side sidebar_adj01 news " id="sidebar"> 
						<!-- NEWS WIDGET -->
						<div class="news-widget">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("News", "supertheme");?></span>
							</div>
							<ul class="tabs">
								<li>
									<a href="#"><span> <?php _e("Recent", "supertheme");?></span></a>
								</li>
								<li>
									<a href="#"><span> <?php _e("Popular", "supertheme");?></span></a>
								</li>
								<li>
									<a href="#"><span> <?php _e("Featured", "supertheme");?></span></a>
								</li>
							</ul>
							<div class="panes">
								<?php
											$args2= array( 'post_type' => 'post' ,'category' => 'news_category');
                                            $News = get_posts($args2);

                                           foreach($News as $newses) 
											{   ?>
												<div>
													<p> <?php  echo $newses->post_excerpt;  ?></p>
													<p class="text-align-right margin-bottom-0"><a href="<?php get_permalink($newses->ID) ?>" class="read-more-text"> <?php _e("read more", "supertheme");?> &#187;</a></p>
												</div>
							    <?php	
											}
											?>
							
							</div>
						</div>
						<!-- ENDS NEWS WIDGET -->
						<!-- TWEET WIDGET -->
						<div id="quotes">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Recent Tweets", "supertheme");?></span>
							</div>
														
										<div class="textItem">Before turning to those moral and mental aspects of the matter which
												present the greatest difficulties, let the inquirer begin by mastering
												more elementary problems.
										</div>

										<div>How often have I said to you that when you have eliminated the
												impossible, whatever remains, however improbable, must be the truth?
										</div>

										<div>It is a capital mistake to theorize before one has data.
												Insensibly one begins to twist facts to suit theories, instead of
												theories to suit facts.
										</div>

										<div>We must fall back upon the old axiom that when all other contingencies
												fail, whatever remains, however improbable, must be the truth.
										</div>
														
															<!-- <p class="recent-tweet-date">
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
 -->						</div>
						<!-- ENDS TWEET WIDGET -->
						<!-- TEXT WIDGET -->
						<div class="text-widget">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Text Widget", "supertheme");?></span>
							</div>
							   <?php
								   
												$args = array(
																			'smallest'                  => 8, 
																			'largest'                   => 22,
																			'unit'                      => 'pt', 
																			'number'                    => 45,  
																			'format'                    => 'flat',
																			'separator'                 => "\n",
																			'orderby'                   => 'name', 
																			'order'                     => 'ASC',
																			'exclude'                   => null, 
																			'include'                   => null, 
																			'topic_count_text_callback' => default_topic_count_text,
																			'link'                      => 'view', 
																			'taxonomy'                  => 'post_tag', 
																			'echo'                      => true,
																			'child_of'                  => null, // see Note!
																		); 
																	wp_tag_cloud( $args );																		
								?>
						</div>
						<!-- ENDS TEXT WIDGET -->
						<!-- FLICKR FEED WIDGET -->
						<div class="flickr-feed-widget cf">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Flickr Feed", "supertheme");?> </span>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image001.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image002.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image003.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image last">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image004.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image005.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image006.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image007.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image last">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image008.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image009.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image010.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image011.jpg" width="100%" border="0" alt=""></a>
							</div>
							<div class="flickr-feed-image last">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/img/flickr-feed-image012.jpg" width="100%" border="0" alt=""></a>
							</div>
						</div>
						<!-- ENDS FLICKR FEED WIDGET -->
						
						<!-- TESTIMONIALS WIDGET -->
						<div class="testimonials-widget cf">
								<div class="heading-box">
									<span class="heading-text"><?php echo _e("Testimonials","supertheme"); ?></span>
								</div>
									<div class="testimonial-text-panel">
										<?php 
													$post_id = 26;
													//$args		 = array( 'post_id'=>$post_id, 'post_type' => 'testimonial', 'post_per_page'=> '1','post_status' => 'publish');
													$args		 = array( 'post_id'=>$post_id);
													$testimonial = get_posts($args);
													//echo "<pre>"; print_r($testimonial); die;
													foreach ($testimonial as $testimonials)
													{	echo $testimonials->post_content;  	?>
										</div>

										<div class="testimonial-user-info-panel">
													<?php   $attr = array( 'class'=>'testimonial-user-image');
														echo get_the_post_thumbnail($testimonials->ID,'thumbnail', $attr);   ?>
													<div class="testimonial-user-info-text">
														<div class="testimonial-user-name"><?php  echo $testimonials->_ikcf_client; ?></div>
														<div class="testimonial-user-designation"><?php	echo $testimonials->_ikcf_position; ?></div>
														<a href="#"><?php echo get_post_meta($testimonials->ID,'_website',true); ?></a>
										<?php 	}  		?>
											</div>
									</div>
						</div>
						<!-- ENDS TESTIMONIALS WIDGET -->

						<!-- OUR CLIENTS WIDGET -->
						<div class="our-clients-widget cf clear">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Our Clients", "supertheme");?></span>
							</div>

								<?php 	$args = array( 'post_type' => 'acme_ourclient');
												$clientResult = get_posts($args);
												$i = 1;
												foreach($clientResult as $clientR)
												{ 
													if($i%2 == 1) :
													?>
														<div class="logo-our-clients">
															<?php  	echo get_the_post_thumbnail($clientR->ID,'thumbnail',array(141,68)); 	 ?>
														</div>
								          <?php  else:  ?>
														<div class="logo-our-clients last">
															<?php  	echo get_the_post_thumbnail($clientR->ID,'thumbnail' , array(141,68)) ; 	 ?>
														</div>
									<?php 	endif;
											$i++;
											}// Foreach for Our Client ?>
						
						</div>
						<!-- ENDS OUR CLIENTS WIDGET -->
						<!-- NEWSLETTER WIDGET -->
						<div class="our-clients-widget">
							<div class="heading-box">
								<span class="heading-text"><?php echo _e("Newsletter","supertheme"); ?></span>
							</div>
							<?php 
									if(shortcode_exists('[simpleSubscribeForm]') )
									{		echo do_shortcode('[simpleSubscribeForm]');  }
									else
									{
									?>
							 <form id="newsletter-form-widget" action="#" method="post">
								<fieldset>
									<p>
										<label for="email" > <?php _e("Please enter your email", "supertheme");?></label><br>
										
										<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
										<input type="button" value="Send" name="submit" id="submit" class="send-button" />
									</p>
									 <?php _e("send mail configuration", "supertheme");?>

									<input type="hidden" value="your@email.com" name="to" id="to" />
									<input type="hidden" value="ENter the subject here" name="subject" id="subject" />
									<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
									<!-- ENDS send mail configuration -->
							</fieldset>
								<p class="privacy-text-newsletter-widget margin-bottom-0"><a href=""> <?php _e("Privacy Policy", "supertheme");?> </a></p>
							</form> 
							<?php } ?>
						</div>
						<!-- ENDS NEWSLETTER WIDGET -->
					</aside>
					<!-- ENDS SIDEBAR -->	
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->
	



<?php get_footer(); ?>