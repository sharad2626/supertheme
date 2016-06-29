<?php  
	/*
	Template Name: Main Home Page
	*/

 get_header(); ?>

<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
						<?php 
						if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider();
								/* Home page Slider Sechotart*/
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
<div id="purchase-leaderboard" class="sp_hFW">
	<div class="two-third text-panel sp_hr">
		<p class="discription-text">
			<span class="logo-text"><?php _e("Super theme", "supertheme");?></span> <?php _e("is responsive multilingual Clean template", "supertheme");?>
		</p>
		<p><?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme");?></p>
	</div>
	<div class="one-third last button-panel sp_hl">
		<div class="link-button green"><?php _e("Purchase Now ", "supertheme");?></div>
	</div>
</div>
<!-- END PURCHASE NOW LEADERBOARD -->

<!-- MAIN -->
<div id="main">
	<div class="wrapper cf">
		<div class="home-content">
			<!-- 3 cols -->			
			<?php 
				$args = array(
					'post_type'=> 'post', 
					'post_per_page'=>'3',
					'orderby'=>'date',
					'order'=>'ASC',
					'tax_query' => array(
						  array(
						   'taxonomy' => 'category',
						   'field'    => 'slug',
						   'terms'    => 'home-portfolio'
						  )
					),
					'suppress_filters' => 0	
				);
				$result = query_posts($args);
				$i=1;
			    
				foreach($result as $results)
				{
				 	$proID =  $results->ID;
					if($i%3 == 0) 
					{
					
						?>
						<div class="one-third last">
							<h3 class="heading">
								<span class="fully-responsive-icon"></span><?php  echo $results->post_title ?>
							</h3>
							<?php $des = $results->post_content;
									echo substr($des, 0,300); ?>
							<p class="text-align-right margin-bottom-0">
								<a href="<?php echo get_permalink($proID); ?>" class="read-more-text"><?php _e("read more", "supertheme");?></a>
							</p>
						</div>
						<?php 
					}
					else
					{   
						?>
						<div class="one-third">
							<h3 class="heading">
									<span class="fully-responsive-icon"></span><?php  echo $results->post_title ?>
							</h3>
							<?php $des = $results->post_content;
								  echo substr($des, 0,300); ?>
							<p class="text-align-right margin-bottom-0">
								<a href="<?php echo get_permalink($proID); ?>" class="read-more-text"><?php _e("read more", "supertheme");?>>></a>
							</p>
						</div>
						<?php 
					}
					$i	++;
				}
			?>									
			<!-- ENDS 3 cols -->
			<div class="cf"></div>
		</div>

		<div class="recent_workWrap">
			<div class="recent-work">
				<div class="heading-box">
					<span class="heading-text"><?php _e("Recent Work","supertheme"); ?></span>
				</div>
				<?php
					$args = array('post_type'=> 'sup_work','suppress_filters' => 0,'orderby' =>'date','order'=>'DESC');
					$Recent_work = get_posts($args);

					$i = 1;
					foreach($Recent_work as $recentwork)
					{ 
						if($i %3 == 0)
						{

							?>
							<div class="one-third last">
								<?php echo get_the_post_thumbnail($recentwork->ID,'full'); ?>
							</div> 									
							<?php 	
						}
						else
						{
							?>
							<div class="one-third ">
								<?php echo get_the_post_thumbnail($recentwork->ID,'full'); ?>
							</div> 
							<?php 	
						}
						$i++;
					}
				?>
			</div>

			<div class="why-us rww_R">
				<div class="two-third lists-check">
					<div class="heading-box"><span class="heading-text"><?php _e("Why us?", "supertheme");?></span></div>
				<?php    
					wp_reset_query();
					the_content();
				?>
				</div>
			</div>

			<div class="testimonials rww_L">
				<div class="one-third last">
					<div class="heading-box">
						<span class="heading-text"><?php echo _e("Testimonials","supertheme"); ?></span>
					</div>
					
					<?php 
						$args = array( 'post_type' => 'testimonial','posts_per_page'=>1,'suppress_filters' => 0	);
						$testimonial = get_posts($args);

						foreach ($testimonial as $testimonials)
						{	
							$testdesc = $testimonials->post_content;
							if(ICL_LANGUAGE_CODE=='en')
								$desc = substr($testdesc,0,300);
							else
								$desc = substr($testdesc,0,550);
							$website = get_post_meta($testimonials->ID,'_website',true);
							echo '<div class="testimonial-text-panel">'.$desc.'</div>';?>
							<div class="testimonial-user-info-panel">
								<?php   
										$attr = array( 'class'=>'testimonial-user-image');
										echo get_the_post_thumbnail($testimonials->ID,'thumbnail', $attr);   ?>
								<div class="testimonial-user-info-text">
									<div class="testimonial-user-name"><?php  echo $testimonials->_ikcf_client; ?></div>
									<div class="testimonial-user-designation"><?php	echo $testimonials->_ikcf_position; ?></div>
									<a href="http://<?php echo $website;?>"><?php echo $website; ?></a>
								</div>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div>
	</div><!-- ENDS WRAPPER -->
</div><!-- ENDS MAIN -->

<?php get_footer(); ?>
