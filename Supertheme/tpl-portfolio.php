<?php
/*
	Template Name: Portfolio Templete 1
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
			<!-- 	<div class="customNavigation">
					<a class="btn prev-main-slider">Previous</a>
					<a class="btn next-main-slider">Next</a>
				</div> -->
			</div>
			<!-- ENDS SLIDER -->


		<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf">
					<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading">Work</div>
					</div>

					<div class="services-content cf">
						<!-- 2 cols -->
						<div class="one-half">
							<p> <?php
													while ( have_posts() ) : the_post();	
														the_content();								
														endwhile; 
									 ?> </p>
						</div>
						
						<!-- ENDS 2 cols -->
					</div>
						<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
					
			<!-- portfolio content-->
        	<div id="portfolio-content" class="cf">        	
				<?php					
							 $terms = get_terms( 'work-category' );
								//echo "<pre>"; print_r($terms);	
				?>
				 <ul id="filter-buttons">
							<?php 
										foreach($terms as $term_result)
										{
	 							?>
										<li><a href="javascript:void(0);" data-filter="*" id="termlist" onclick="getresult(<?php echo $term_result->term_id ; ?>)" value="<?php echo $term_result->term_id ; ?>"><?php echo  $term_result->name;   ?></a>
										</li>
										<!-- <li><a href="#" data-filter=".web">web</a></li>
										<li><a href="#" data-filter=".print">print</a></li>
										<li><a href="#" data-filter=".design">design</a></li>
										<li><a href="#" data-filter=".photo">photo</a></li> -->
										<?php  }  ?>
				</ul> 

				<!-- Filter container -->
				<div id="filter-container" class="cf">
							<?php 
									global $posts;
									$i= 0;
									$args				= array( 'post_type' => 'sup_work');
									$workresults	= get_posts($args);
									
									foreach($workresults as $resultwrk)
									{
										// $categories = get_the_terms($workresults[$i]->ID, "work-category");
										//echo $workresults[$i]->ID;
										$categories=   wp_get_post_terms( $workresults[$i]->ID, 'work-category' );
									//	 echo "<pre>";
									// print_r($categories);
									 //echo "</pre>";
									//	exit;
									?>
												<figure class="web print">
													<a href="#" class="thumb"><img src="<?php bloginfo('template_url'); ?>/img/dummies/featured/01.jpg" alt="alt" /></a>
													<figcaption>
														<a href="#"><h3 class="heading"><?php echo $resultwrk->post_title; ?> </h3></a>
														<div class="portfolio-cat">
															<a href="#" ><?php echo $categories[$i]->name;   ?></a>
														
														</div>
													</figcaption>
												</figure>
									<?php
															$i++;
															}
															

								
										?>

				</div>		<!-- ENDS Filter container -->
				
			</div>  	<!-- ENDS featured -->
		
		</div><!-- ENDS WRAPPER -->
			
		</div>
		<!-- ENDS MAIN -->
			<div class="cf"></div>

<!--  This is code for  javascript to accpet term ID when user click on terms -->

<script>

function getresult(id) 
	{
	            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	
						jQuery.ajax({
                        url: ajaxurl,
						data: {
								'action': 'get_custom_post_using_terms',
								'term_id': id
						},
						dataType: 'json',
                        method: 'POST',
                        success: function(response) {
                           // alert("Status Updated Successfully"+response.data);
							console.log(response.data);
							jQuery("#filter-container").html(response.data);
                        }
						});
                    return true;
            
				
          }
</script>

<!-- End -->

<?php get_footer(); ?>
