<?php
/**
 * Template Name: Product Page Template 2
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
						<div class="popular-products full-width last">
							<!-- TABS -->
							<ul class="tabs">
								<li><a href="#"><span> <?php _e("Jewellery", "supertheme"); ?></span></a></li>
								<li><a href="#"><span> <?php _e("Smart Phones", "supertheme"); ?></span></a></li>
								<li><a href="#"><span> <?php _e("Womens Tops", "supertheme"); ?></span></a></li>
								<!-- <li><a href="#"><span>Smart Phones</span></a></li> -->
							</ul>
							<div class="panes">
								<div class="cf">
								
									<div class="new-offer-banner-panel-three one-third margin-bottom-0">
										<div class="new-offer-banner-panel">
											<h2> <?php _e("Get 10% off Menswear", "supertheme");?>	</h2>
											<h4> <?php _e("Free shipping for order over $10", "supertheme");?></h4>
										</div>
									</div>
									<div class="two-third last margin-bottom-0">
									<?php  $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'jewellery', 'orderby' => 'rand' );
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
													<div class="one-third margin-bottom-0 product-overview-panel">
														<div class="product-img-panel new-product-img-panel">
															<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
															<div class="product-img-hover-panel">
																<div class="add-to-fav-icon-panel"></div>
																<div class="large-view-icon-panel"></div>
															</div>
														</div>
											
											<div class="product-info-panel">
												<span class="new-product-category"><?php the_title(); ?></span>
												<p>
													<?php the_content();?>
												</p>
												<div class="product-price-panel">
													 <span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
													<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
												</div>
											</div>
											
										</div>
										<?php endwhile; ?>
										
									</div>
								</div>
								<div class="cf">
									<div class="new-offer-banner-panel-four one-third margin-bottom-0">
										<div class="new-offer-banner-panel">
											<h2> <?php _e("Get 10% off Menswear", "supertheme");?>	</h2>
											<h4> <?php _e("Free shipping for order over $10", "supertheme");?></h4>
										</div>
									</div>
									<div class="two-third last margin-bottom-0">
										<?php  $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'mobile-phones', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
										<div class="one-third margin-bottom-0 product-overview-panel">
											<div class="product-img-panel new-product-img-panel">
												<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
												<div class="product-img-hover-panel">
													<div class="add-to-fav-icon-panel"></div>
													<div class="large-view-icon-panel"></div>
												</div>
											</div>
											<div class="product-info-panel">
												<span class="new-product-category"><?php the_title(); ?></span>
												<p>
													<?php the_content();?>
												</p>
												<div class="product-price-panel">
													 <span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
													<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
												</div>
											</div>
										</div>
										<?php endwhile; ?>
										
										
									
									</div>
								</div>
								<div class="cf">
									<div class="new-offer-banner-panel-five one-third margin-bottom-0">
										<div class="new-offer-banner-panel">
												<h2> <?php _e("Get 10% off Menswear", "supertheme");?>	</h2>
											<h4> <?php _e("Free shipping for order over $10", "supertheme");?></h4>
										</div>
									</div>
									<div class="two-third last margin-bottom-0">
									<?php  $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'womens-tops', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
										<div class="one-third margin-bottom-0 product-overview-panel">
											<div class="product-img-panel new-product-img-panel">
												<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
												<div class="product-img-hover-panel">
													<div class="add-to-fav-icon-panel"></div>
													<div class="large-view-icon-panel"></div>
												</div>
											</div>
											<div class="product-info-panel">
												<span class="new-product-category"><?php the_title();?></span>
												<p>
													<?php the_content();?>
												</p>
												<div class="product-price-panel">
												 <span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
													<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
												</div>
											</div>
										</div>
									<?php endwhile;?>
									</div>
								</div>
								<!-- <div class="cf">
									<div class="new-offer-banner-panel-six one-third margin-bottom-0">
										<div class="new-offer-banner-panel">
											<h2>
												Get 10% off Menswear
											</h2>
											<h4>
												Free shipping for order over $10
											</h4>
										</div>
									</div>
									<div class="two-third last margin-bottom-0">
										<div class="one-third margin-bottom-0 product-overview-panel">
											<div class="product-img-panel new-product-img-panel">
												<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-040.jpg" alt="Product Image 1">
												<div class="product-img-hover-panel">
													<div class="add-to-fav-icon-panel"></div>
													<div class="large-view-icon-panel"></div>
												</div>
											</div>
											<div class="product-info-panel">
												<span class="new-product-category">Blazer and Suit</span>
												<p>
													Lorem ipsum dolor sit amet, consect etur adiua consectetur adiua
												</p>
												<div class="product-price-panel">
													<span class="product-buy-price">$ 220.00</span>
													<span class="product-discount-price">$ 157.00</span>
												</div>
											</div>
										</div>
										<div class="one-third margin-bottom-0 product-overview-panel">
											<div class="product-img-panel new-product-img-panel">
												<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-023.jpg" alt="Product Image 1">
												<div class="product-img-hover-panel">
													<div class="add-to-fav-icon-panel"></div>
													<div class="large-view-icon-panel"></div>
												</div>
											</div>
											<div class="product-info-panel">
												<span class="new-product-category">Blazer and Suit</span>
												<p>
													Lorem ipsum dolor sit amet, consect etur adiua consectetur adiua
												</p>
												<div class="product-price-panel">
													<span class="product-buy-price">$ 220.00</span>
													<span class="product-discount-price">$ 157.00</span>
												</div>
											</div>
										</div>
										<div class="one-third last margin-bottom-0 product-overview-panel">
											<div class="product-img-panel new-product-img-panel">
												<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-015.jpg" alt="Product Image 1">
												<div class="product-img-hover-panel">
													<div class="add-to-fav-icon-panel"></div>
													<div class="large-view-icon-panel"></div>
												</div>
											</div>
											<div class="product-info-panel">
												<span class="new-product-category">Blazer and Suit</span>
												<p>
													Lorem ipsum dolor sit amet, consect etur adiua consectetur adiua
												</p>
												<div class="product-price-panel">
													<span class="product-buy-price">$ 220.00</span>
													<span class="product-discount-price">$ 157.00</span>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- ENDS TABS -->
							</div>	
						</div>
<?php  $args = array( 'post_type' => 'product', 'showposts' => 1,'orderby' => 'id','offset'=>0 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<div class="one-half new-products-panel">
							<div class="margin-bottom-0 product-overview-panel">
								<div class="product-img-panel full-height-product-img-panel">
									<?php	echo get_the_post_thumbnail($loop->the_ID,'large'); ?>
									<div class="product-img-hover-panel">
										<div class="add-to-fav-icon-panel"></div>
										<div class="large-view-icon-panel"></div>
									</div>
								</div>
								<div class="product-info-panel">
									<span class="new-product-category"><?php the_title()?></span>
									<p>
										<?php the_content();?>
									</p>
									<div class="product-price-panel">
										<span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
										<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
									</div>
								</div>
							</div>
						</div>
<?php endwhile;?>
<?php  $args = array( 'post_type' => 'product', 'showposts' => 1, 'orderby' => 'id','offset'=>1 );
        $loop = new WP_Query( $args );
		//echo "<pre>"; print_r($loop);
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<div class="one-half last new-products-panel">
							<div class="full-width product-overview-panel">
								<div class="one-half margin-bottom-0">
									<div class="product-img-panel two-third-height-product-img-panel">
										<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
										<div class="product-img-hover-panel">
											<div class="add-to-fav-icon-panel"></div>
											<div class="large-view-icon-panel"></div>
										</div>
									</div>
								</div>
								<div class="one-half last margin-bottom-0 margin-top-75">	
									<div class="product-info-panel">
										<span class="new-product-category"><a href="<?php echo get_permalink($loop->ID);?>"><?php the_title();?></a></span>
										<p>
											<?php the_content();?>
										</p>
										<div class="product-price-panel">
											<span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
											<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
										</div>
									</div>
								</div>	
							</div>

							<?php endwhile;?>
							
							<div class="full-width margin-bottom-0 latest-products">
							<?php  $args = array( 'post_type' => 'product', 'showposts' => 3, 'orderby' => 'id','offset'=>2 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
								<div class="one-third margin-bottom-0 product-overview-panel">
									<div class="product-img-panel new-product-img-panel">
										<?php	echo get_the_post_thumbnail($loop->the_ID,'small'); ?>
										<div class="product-img-hover-panel">
											<div class="add-to-fav-icon-panel"></div>
											<div class="large-view-icon-panel"></div>
										</div>
									</div>
									<div class="product-info-panel">
										<span class="new-product-category"><a href="<?php echo get_permalink($loop->ID);?>"><?php the_title();?> </a></span>
										<p>
											<?php the_content();?>
										</p>
										<div class="product-price-panel">
											<span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
											<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
										</div>
									</div>
								</div>
								<?php endwhile;?>
							
							</div>
						</div>
						<div class="full-width last">
							<div class="one-fourth margin-bottom-0 product-overview-panel">
								<div class="heading-box">
									<span class="heading-text"> <?php _e("New Arrivals", "supertheme");?></span>
								</div>
								<?php $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 1, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
								<div class="product-img-panel two-third-height-product-img-panel">
									<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
									<div class="product-img-hover-panel">
										<div class="add-to-fav-icon-panel"></div>
										<div class="large-view-icon-panel"></div>
									</div>
								</div>
								<div class="product-info-panel">
									<span class="new-product-category"><a href="<?php echo get_permalink($loop->ID);?>"><?php the_title();?> </a></span>
									<p>
										<?php the_content();?>
									</p>
									<div class="product-price-panel">
										<span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
										<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
							<div class="one-half margin-bottom-0 product-overview-panel">
								<div class="heading-box">
									<span class="heading-text"> <?php _e("Best Sellers", "supertheme");?></span>
								</div>
										<?php $args = array(
										'post_type' => 'product',
										'posts_per_page' => 4,
										'meta_key' => 'total_sales',
										'orderby' => 'meta_value_num',
										);
										$loop = new WP_Query( $args );
										if ( $loop->have_posts() ) {
										$i=0;
										while ( $loop->have_posts() ) : $loop->the_post();
										if($i%2==0){
										?>
 
								<div class="one-half margin-bottom-0">
									<div class="one-half margin-bottom-0">
										<div class="product-img-panel new-product-img-panel">
											<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
											<div class="product-img-hover-panel">
												<div class="add-to-fav-icon-panel"></div>
												<div class="large-view-icon-panel"></div>
											</div>
										</div>
									</div>
									<div class="one-half last margin-bottom-0">	
										<div class="product-info-panel">
											<span class="new-product-category"><a href="<?php echo get_permalink($loop->ID);?>"><?php the_title();?></a></span>
											<p>
												<?php the_content();?>
											</p>
											<div class="product-price-panel">
												<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
											</div>
										</div>
									</div>	
								</div>
								<?php } else{?>
								<div class="one-half last margin-bottom-0">
									<div class="one-half margin-bottom-0">
										<div class="product-img-panel new-product-img-panel">
											<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
											<div class="product-img-hover-panel">
												<div class="add-to-fav-icon-panel"></div>
												<div class="large-view-icon-panel"></div>
											</div>
										</div>
									</div>
									<div class="one-half last margin-bottom-0">	
										<div class="product-info-panel">
											<span class="new-product-category"><a href="<?php echo get_permalink($loop->ID);?>"><?php the_title();?></a></span>
											<p>
												<?php the_content();?>
											</p>
											<div class="product-price-panel">
												<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
											</div>
										</div>
									</div>	
								</div>
								<?php } $i++;
								
							endwhile;
 }
								?>
							
								<div class="full-width new-offer-banner-panel-seven margin-bottom-0">
									<div class="new-offer-banner-panel latest-offer-banner-panel">
										<h2> <?php _e("Get 10% off Menswear", "supertheme");?>	</h2>
											<h4> <?php _e("Free shipping for order over $10", "supertheme");?></h4>
									</div>
								</div>	
							</div>
							<div class="one-fourth last margin-bottom-0 product-overview-panel">
								<div class="heading-box">
									<span class="heading-text"> <?php _e("Jewelry", "supertheme");?></span>
								</div>
								<?php 
 $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'jewellery', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 

		?>
	 <div class="full-width last margin-bottom">
									<div class="one-half margin-bottom-0">
										<div class="product-img-panel new-product-img-panel">
										<?php	echo get_the_post_thumbnail($loop->the_ID,'medium'); ?>
											<div class="product-img-hover-panel">
												<div class="add-to-fav-icon-panel"></div>
												<div class="large-view-icon-panel"></div>
											</div>
										</div>
									</div>
									<div class="one-half last margin-bottom-0">	
										<div class="product-info-panel">
											<span class="new-product-category"><a href="<?php echo get_permalink($loop->ID);?>"><?php the_title();?></a></span>
											<p>
											<?php	the_content();?>
											</p>
											<div class="product-price-panel">
												<span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
													<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
											</div>
										</div>
									</div>	
								</div>
		<?php
	endwhile; ?>
								</div>
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
											
												foreach($clientResult as $clientR)
												{  ?>
														<div class="item logo-our-clients-border">
															<?php  	echo get_the_post_thumbnail($clientR->ID,'thumbnail'); 	 ?>
														</div>
								  
										<?php }   // Foreach for Our Client ?>
						
								
							</div>
							<div class="customNavigation">
								<a class="btn prev-our-clients"> <?php _e("Previous", "supertheme");?></a>
								<a class="btn next-our-clients"> <?php _e("Next", "supertheme");?></a>
							</div>
						</div>
					</div>
						<div class="full-width last promotion-full-width" >
							<img src="<?php bloginfo('template_url'); ?>/img/dummies/slides/05.jpg" alt="Promotion Full width">
							<div class="promotion-full-width-text-panel">
								<h3 class="text-align-center"><?php _e("Autumn Campain", "supertheme");?></h3>
								<h4><?php _e("A/W Goodly Collection 2015", "supertheme");?></h4>
								<p><?php _e("Free Shipping", "supertheme");?></p>
								<p><?php _e("Free Return in 24 hour", "supertheme");?></p>
							</div>
						</div>
						<div class="main-features cf">
                        	<div class="one-third text-align-center">
								<div class="main-features-icon-panel">
									<img src="<?php bloginfo('template_url'); ?>/img/ic_fav.png" alt="Free shipping">
								</div>
								<h3 class="text-align-center"><?php _e("Amazing customer service", "supertheme");?></h3>
								<p><?php _e("Get Free Shipping on all orders over $75", "supertheme");?></p>
                            </div>
							<div class="one-third text-align-center">
								<div class="main-features-icon-panel">
									<img src="<?php bloginfo('template_url'); ?>/img/ic_gift_cards.png" alt="Free shipping">
								</div>
								<h3 class="text-align-center"><?php _e("Many treats & deals", "supertheme");?></h3>
								<p><?php _e("The perfect way to bring a smile", "supertheme");?></p>
                            </div>
							<div class="one-third text-align-center last">
								<div class="main-features-icon-panel">
									<img src="<?php bloginfo('template_url'); ?>/img/ic_refund.png" alt="Free shipping">
								</div>
								<h3 class="text-align-center"><?php _e("Refunds in 72 hours", "supertheme");?></h3>
								<p><?php _e("The total billed at checkout", "supertheme");?></p>
                            </div>
                        </div>
						<div class="one-half half-page-slider"> 
							<img src="<?php bloginfo('template_url'); ?>/img/porduct-images/product-page-046.jpg" alt="New Product">
						</div>
						<div class="one-half last new-products-panel">
							<div class="full-width margin-bottom-0 latest-products">
								<div class="heading-box">
									<span class="heading-text"> <?php _e("Featured Product", "supertheme");?></span>
								</div>
										<?php $args = array(
											'post_type' => 'product',
											'meta_key' => '_featured',
											'meta_value' => 'yes',
											'posts_per_page' => 3
										);
										$featured_query = new WP_Query( $args );
											
										if ($featured_query->have_posts()) :
											while ($featured_query->have_posts()) :
											
												$featured_query->the_post();
												
												$product = get_product( $featured_query->post->ID );
												
												// Output product information here
												
											 // Remember to reset
										 ?>
								<div class="one-third margin-bottom-0 product-overview-panel">
									<div class="product-img-panel new-product-img-panel">
										<?php	echo get_the_post_thumbnail($loop->the_ID,'small'); ?>
											<div class="add-to-fav-icon-panel"></div>
											<div class="large-view-icon-panel"></div>
										</div>
									
									<div class="product-info-panel">
										<span class="new-product-category"><a href="<?php echo get_permalink($loop->ID);?>"><?php the_title(); ?></a></span>
										<p>
											<?php the_content();?>
										</p>
										<div class="product-price-panel">
											 <span class="product-buy-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?></span> 
											<span class="product-discount-price"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
										</div>
									</div>
								</div>
					<?php endwhile;
						
					endif;
					wp_reset_query();?>
							</div>
						</div>
						<!-- PURCHASE NOW LEADERBOARD -->
						<div id="purchase-leaderboard" class="full-width cf last">
							<div class="two-third margin-bottom-0 text-panel">
								<p class="discription-text"><span class="logo-text"> <?php _e("Super theme", "supertheme");?></span> 
								<?php _e("is responsive multilingual Clean template", "supertheme");?>
								</p>
								<p><?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme");?></p>
							</div>
							<div class="one-third margin-bottom-0 last button-panel">
								<div class="link-button green">
									<?php _e("Purchase Now ", "supertheme");?>
								</div>
							</div>
						</div>
						<!-- END PURCHASE NOW LEADERBOARD -->
                    </div>
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->
			

	
<?php get_footer(); ?>
