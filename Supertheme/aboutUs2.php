<?php 

/*
Template Name: About Us2
*/
get_header(); 
?>

<div class="main-slider"><!-- SLIDER -->
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
</div> <!-- ENDS SLIDER -->

<!-- PURCHASE NOW LEADERBOARD -->
<div id="purchase-leaderboard">
    <div class="two-third text-panel">
        <p class="discription-text"><span class="logo-text"><?php _e("Super theme", "supertheme");?></span> <?php _e("is responsive multilingual Clean template", "supertheme");?></p>
        <p><?php _e("Loaded with Awsome features, Unlimited designs, Posibilities and Options", "supertheme");?></p>
    </div>
    <div class="one-third last button-panel">
        <div class="link-button green">
            <?php _e("Purchase Now ", "supertheme");?>
        </div>
    </div>
</div><!-- END PURCHASE NOW LEADERBOARD -->

	<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf">
						<?php  the_content();  ?>
					<!-- SIDEBAR -->
					<aside id="sidebar">
						<!-- TESTIMONIALS ONE -->
						<div class="testimonials-widget cf">
							<div class="heading-box">
								<span class="heading-text">Testimonials</span>
							</div>
							<div class="testimonial-text-panel-white">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate eros sit amet nibh feugiat, venenatis interdum dolor congue. Etiam eu ipsum in leo condimen tum viverra. Sed vehicula augue in lacus pulvinar, quis lobortis tellus iaculis. Sed vehicula augue in lacus pulvinar, quis lobortis tellus iaculis.
								</p>
							</div>
							<div class="testimonial-user-info-panel">
								<img  src="img/ic_user_testimonial.jpg" class="testimonial-user-image" />
								<div class="testimonial-user-info-text">
									<div class="testimonial-user-name">JOHN DOE</div>
									<div class="testimonial-user-designation">Founder & CEO</div>
									<a href="#">www.testmywebsite.com</a>
								</div>
							</div>
						</div>
						<!-- ENDS TESTIMONIALS ONE -->
						
					</aside>	<!-- ENDS SIDEBAR -->	
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->
<?php get_footer(); ?>
