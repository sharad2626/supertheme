<?php
/**
 * Template Name: Product Page Template
 */

get_header(); ?>

	<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf">
                	<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading"> <?php _e("Products", "supertheme");?></div>
					</div>
					<!-- END PAGE HEADING LEADERBOARD -->
					<!-- PAGE BREADCRUM -->
					<div id="page-breadcrum">
						 <?php _e("Home", "supertheme");?> / <span class="active-page"> <?php _e("Products", "supertheme");?></span>
					</div>
					<!-- END PAGE BREADCRUM -->
					<div class="product-content cf">
                    	<div class="main-features cf">
                        	<div class="one-third text-align-center">
								<div class="main-features-icon-panel">
									<img src="<?php bloginfo('template_url'); ?>/img/ic_free_shipping.png" alt="Free shipping">
								</div>
								<h3 class="text-align-center"><?php _e("Free Shipping & Returns ", "supertheme");?></h3>
								<p><?php _e("Your order delivered right to your door", "supertheme");?></p>
                            </div>
							<div class="one-third text-align-center">
								<div class="main-features-icon-panel">
									<img src="<?php bloginfo('template_url'); ?>/img/ic_gift_cards.png" alt="Free shipping">
								</div>
								<h3 class="text-align-center"><?php _e("Gift Cards & Wrapping", "supertheme");?></h3>
								<p><?php _e("The perfect way to bring a smile", "supertheme");?></p>
                            </div>
							<div class="one-third text-align-center last">
								<div class="main-features-icon-panel">
									<img src="<?php bloginfo('template_url'); ?>/img/ic_price_tag.png" alt="Free shipping">
								</div>
								<h3 class="text-align-center"><?php _e("New Season Prices", "supertheme");?></h3>
								<p><?php _e("Get great deals in our 2015 sale", "supertheme");?></p>
                            </div>
                        </div>
						<div class="fav-items-panel cf">
							<div class="our-fav-items one-half">
								<div class="our-fav-items-info">
									<div class="heading-box text-align-center">
										<span class="heading-text"><?php _e("Our Favorite Items", "supertheme");?></span>
									</div>
									<p class="text-align-center our-fav-items-text margin-bottom">
										<?php _e("Dress it up, dress it down, this is your all-purpose, everyday top and jacket combination. Available for less than $ 200, make a splash this party season with our hand-picked selection and get Suave when you hit the town.", "supertheme");?>
									</p>
									<h3 class="text-align-center"><?php _e("AVAILABLE IN MULTIPLE SIZES & COLORS", "supertheme");?></h3>
									<img src="<?php bloginfo('template_url'); ?>/img/product-page-fav-items.jpg" class="our-fav-items-img" alt="our fav items image"> 
								</div>
								<div class="our-fav-items-news cf">
									<div class="shopping-bag-icon-panel one-fourth margin-bottom-0">
										<img src="<?php bloginfo('template_url'); ?>/img/ic_shopping_bag.png" class="shopping-bag-icon" alt="Shopping bag">  
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3>
											<?php _e("2015 SALE ITEMS", "supertheme");?>
										</h3>
										<p class="our-fav-items-news-text ">
											<?php _e("Fill your Suave bags – now with up to 50% off!", "supertheme");?>
										</p>
									</div>
								</div>
							</div>


							<div class="one-half margin-bottom-0 last latest-products">  <!--Start the latest product layout  -->
							<?php
									$args				= array( 'post_type' => 'product','posts_per_page' => 4,	'order' => 'DESC');
									$prodarr			= get_posts($args);
									
								//	print_r($prodarr);

									$i= 0;
									foreach($prodarr as $prodrsl)
									{
																		//print_r(get_the_terms($prodrsl->ID));
										if($i % 2 == 0 )
										    {
							?>			
													 <div class="one-half product-overview-panel">
														<div class="product-img-panel">
														<?php	echo get_the_post_thumbnail($prodrsl->ID,'medium'); ?>
															<div class="product-img-hover-panel">
																<div class="add-to-fav-icon-panel"></div>
																<div class="quick-view-panel">
																	<p><?php _e("quick view", "supertheme");?></p>
																</div>
															</div>
														</div>
														<div class="prodcut-info-panel text-align-center">
															<p class="product-category"><?php//echo do_shortcode('[product_category category="women-tops"]');?> <?php _e("Women Tops", "supertheme");?></p>
															<h3 class="text-align-center"> <a href="<?php echo get_permalink($prodrsl->ID);?>"><?php echo $prodrsl->post_title; ?></a></h3>
															<ul class="product-rating-panel">
																<li class="product-rating-star-filled"></li>
																<li class="product-rating-star-filled"></li>
																<li class="product-rating-star-filled"></li>
																<li class="product-rating-star-filled"></li>
																<li></li>
															</ul>
															<!-- This is for Regular price and Sale Price       Add To Cart Button-->
															<?php   echo do_shortcode('[add_to_cart id="'.$prodrsl->ID.'"]'); ?>
														</div>
													</div>
								<?php
												}
												else
												{
								?>
									 <div class="one-half last product-overview-panel">
									<div class="product-img-panel">
									<?php	echo get_the_post_thumbnail($prodrsl->ID,'medium'); ?>
										<div class="product-img-hover-panel">
											<div class="add-to-fav-icon-panel"></div>
											<div class="quick-view-panel">
												<p><?php _e("quick view", "supertheme");?></p>
											</div>
										</div>
									</div>
									<div class="prodcut-info-panel text-align-center">
										<p class="product-category"><?php _e("Women tops", "supertheme");?></p>
										<h3 class="text-align-center"><a href="<?php echo get_permalink($prodrsl->ID);?>"><?php echo $prodrsl->post_title; ?></a></h3>
										<ul class="product-rating-panel">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
										</ul>
										<!-- This is for Regular price and Sale Price    Add To Cart Button-->
											<?php   echo do_shortcode('[add_to_cart id="'.$prodrsl->ID.'"]'); ?>
									</div>
								</div>
								<?php											
											}
										$i++; // $i increase for next record.
									}
									?>
							
	
							</div>  <!-- End Right box latest product-->
						</div>	
						<div class="recomended-products-panel cf">
							<div class="heading-box">
								<span class="heading-text"><?php _e("Recommended for you", "supertheme");?></span>
							</div>
									<?php
			
												$args				= array( 'post_type' => 'product','order' => 'ASC');
												$prodary_resl		= get_posts($args);
												$i= 1;
												foreach($prodary_resl as $prodrsl_ary)
												{
													$terms = wp_get_post_terms( $prodrsl_ary->ID, 'product_cat'); 
												
													if($i % 4 == 0 )
													{
							?>			

							<div class="one-fourth last product-overview-panel">
								<div class="product-img-panel">
										<?php	echo get_the_post_thumbnail($prodrsl_ary->ID,'medium'); ?>
									<div class="product-img-hover-panel">
										<div class="add-to-fav-icon-panel"></div>
										<div class="quick-view-panel">
											<p><?php _e("quick view", "supertheme");?></p>
										</div>
									</div>
								</div>
								<div class="prodcut-info-panel text-align-center">
									<?php foreach($terms as $term){  ?>
									<p class="product-category"><?php echo  $term->name; ?></p> <?php } ?>
									<h3 class="text-align-center"><a href="<?php echo get_permalink($prodrsl_ary->ID);?>"><?php echo $prodrsl_ary->post_title; ?></a></h3>
									<ul class="product-rating-panel">
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li></li>
									</ul>
											<?php echo do_shortcode('[add_to_cart id="'.$prodrsl_ary->ID.'"]');  ?>
								</div>
							</div>
							<?php
										}
									else
										{
								?>
								<div class="one-fourth product-overview-panel">
								<div class="product-img-panel">
										<?php	echo get_the_post_thumbnail($prodrsl_ary->ID,'medium'); ?>
									<div class="product-img-hover-panel">
										<div class="add-to-fav-icon-panel"></div>
										<div class="quick-view-panel">
											<p><?php _e("quick view,","supertheme"); ?></p>
										</div>
									</div>
								</div>
								<div class="prodcut-info-panel text-align-center">
									<?php foreach($terms as $term){  ?>
											<p class="product-category"><?php echo  $term->name; ?></p> <?php } ?>
									<h3 class="text-align-center"><a href="<?php echo get_permalink($prodrsl_ary->ID);?>"><?php echo $prodrsl_ary->post_title; ?></a></h3>
									<ul class="product-rating-panel">
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li></li>
									</ul>
											<?php echo do_shortcode('[add_to_cart id="'.$prodrsl_ary->ID.'"]');  ?>
								</div>
							</div>
						<?php 
										} $i++;
								} // End Foreach loop
									?>				
							</div>
						</div>

						<div class="offer-banners cf">
							<div class="one-half offer-banner-panel-one">
								<div class="offer-banner-panel">
									<h2>
									<?php _e("Get 10% off Menswear", "supertheme");?>	
									</h2>
									<div class="offer-banner-button-panel link-button green">
									<?php _e("View Range", "supertheme");?>	
									</div>
								</div>	
							</div>
							<div class="one-half last offer-banner-panel-two">
								<div class="offer-banner-panel">
									<h2>
									<?php _e("The 2015 Collection", "supertheme");?>	
									</h2>
									<div class="offer-banner-button-panel link-button green">
									<?php _e("View Range", "supertheme");?>	
									</div>
								</div>	
							</div>
						</div>
						<div class="just-arrived-products-panel cf">
							<div class="heading-box">
								<span class="heading-text"><?php _e("Just Arrived", "supertheme");?></span>
							</div>
								<?php
											$args				= array( 'post_type' => 'product');
											$prodarray 		= get_posts($args);
											$i= 1;
											foreach($prodarray as $prodrsljust)
											{
												if($i % 4 == 0 )
													{
									?>			
											<div class="one-fourth last product-overview-panel">
												<div class="product-img-panel">
													<?php	echo get_the_post_thumbnail($prodrsljust->ID,'medium'); ?>
													<div class="product-img-hover-panel">
														<div class="add-to-fav-icon-panel"></div>
														<div class="quick-view-panel">
															<p><?php _e("New Season Prices", "supertheme");?></p>
														</div>
													</div>
												</div>
												<div class="prodcut-info-panel text-align-center">
													<p class="product-category"><?php _e("Women tops", "supertheme");?></p>
													<h3 class="text-align-center"><a href="<?php echo get_permalink($prodrsljust->ID);?>"><?php echo $prodrsljust->post_title; ?></a></h3>
													<ul class="product-rating-panel">
														<li class="product-rating-star-filled"></li>
														<li class="product-rating-star-filled"></li>
														<li class="product-rating-star-filled"></li>
														<li class="product-rating-star-filled"></li>
														<li></li>
													</ul>
														<?php echo do_shortcode('[add_to_cart id="'.$prodrsljust->ID.'"]');  ?>
												</div>
											</div>
										<?php 
													}
													else
												{				
									?>
						
							<div class="one-fourth product-overview-panel">
								<div class="product-img-panel">
								<?php	echo get_the_post_thumbnail($prodrsljust->ID,'medium'); ?>
									<div class="product-img-hover-panel">
										<div class="add-to-fav-icon-panel"></div>
										<div class="quick-view-panel">
											<p><?php _e("quick view","supertheme"); ?></p>
										</div>
									</div>
								</div>
								<div class="prodcut-info-panel text-align-center">
									<p class="product-category"><?php _e("Women tops", "supertheme");?></p>
									<h3 class="text-align-center"><a href="<?php echo get_permalink($prodrsljust->ID);?>"><?php echo $prodrsljust->post_title; ?></a></h3>
									<ul class="product-rating-panel">
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li class="product-rating-star-filled"></li>
										<li></li>
									</ul>
										<?php echo do_shortcode('[add_to_cart id="'.$prodrsljust->ID.'"]'); ?>
										</div>
								</div>
							<?php
										}
											$i++;
									}	// foreach loop 
											?>
						</div>
						<!-- PURCHASE NOW LEADERBOARD -->
						<div id="purchase-leaderboard" class="full-width cf last">
							<div class="two-third margin-bottom-0 text-panel">
								<p class="discription-text"><span class="logo-text"><?php _e("Super theme", "supertheme");?></span> <?php _e("is responsive multilingual Clean template", "supertheme");?></p>
								<p><?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme");?></p>
							</div>
							<div class="one-third margin-bottom-0 last button-panel">
								<div class="link-button green">
									<?php _e("Purchase Now ", "supertheme");?>
								</div>
							</div>
						</div>
						<!-- END PURCHASE NOW LEADERBOARD -->
						<div class="other-products cf">
							<div class="new-products one-fourth">
								<div class="heading-box margin-bottom-0">
									<span class="heading-text"><?php _e("New In","supertheme"); ?></span>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-011.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
									<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-012.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-013.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-014.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
									<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="top-rated-products one-fourth">
								<div class="heading-box margin-bottom-0">
									<span class="heading-text"><?php _e("Our Picks", "supertheme");?></span>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-015.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-016.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
									<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-017.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-018.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="few-picks-products one-fourth">
								<div class="heading-box margin-bottom-0">
									<span class="heading-text"><?php _e("On Sale","supertheme"); ?></span>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-019.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
									<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-020.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-021.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
									<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-022.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
									<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="on-sale-products one-fourth last">
								<div class="heading-box margin-bottom-0">
									<span class="heading-text"><?php _e("Top Rated", "supertheme");?></span>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-023.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-024.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
									<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-025.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="other-product-view cf">
									<div class="one-third margin-bottom-0 product-img">
										<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-026.jpg" alt="Product Image">
									</div>
									<div class="two-third margin-bottom-0 last">
										<h3><?php _e("Edwin Blitz", "supertheme");?></h3>
										<p><?php _e("$ 40.00", "supertheme");?></p>
										<ul class="product-rating-panel text-align-left">
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li class="product-rating-star-filled"></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div><!-- ENDS WRAPPER -->
			</div>
		<!-- ENDS MAIN -->

	
<?php get_footer(); ?>
