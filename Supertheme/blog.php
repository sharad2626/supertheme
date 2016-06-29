<?php 
/*
Template Name: Blog Page
*/
get_header();
?>

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
					<a class="btn prev-main-slider"> <?php _e("Previous", "supertheme");?></a>
					<a class="btn next-main-slider"> <?php _e("Next", "supertheme");?></a>
				</div>
			</div>
			<!-- ENDS SLIDER -->
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
					</div>
					<!-- END PURCHASE NOW LEADERBOARD -->
	<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">	
				<!-- posts list -->
	        	<div id="posts-list" class="cf">        	
						 <?php
									$args1= array( 'post_type' => 'acme_blog' ,'orderby' => 'post_date' , 'order' => 'ASC');
									$blog_result = get_posts($args1);
										//echo "<pre>";	 print_r($news_result);
								   foreach($blog_result as $blogresl) 
									{
										 $terms = get_the_terms($blogresl->ID, 'blog-category' );
											if ($terms && ! is_wp_error($terms)) :
												$term_slugs_arr = array();
													foreach ($terms as $term) 
													{
														$terms_slug_str =  $term_slugs_arr[] = $term->slug;
													}	 //$terms_slug_str = join( " ", $term_slugs_arr);
											endif;
											//echo $terms_slug_str;
										$comments_count = wp_count_comments($blogresl->ID);
										$author_name = get_userdata($blogresl->post_author)->display_name; 
						?>			
					<article class="format-audio">	<!-- Audio -->
						<div class="box cf"> 
									<div class="entry-date">
											<div class="number"><?php echo mysql2date('j', $blogresl->post_date);  ?></div>
											<div class="month"><?php		echo mysql2date('M', $blogresl->post_date); ?></div>
									</div>
									<div class="excerpt">
										<a href="#" class="post-heading" ><?php echo $blogresl->post_title; ?></a>
										<?php echo $blogresl->post_excerpt; ?>
									</div>
									<div class="meta">
										<span class="format">Audio</span>
										<span class="user"><a href="#"> <?php echo $author_name; ?> , </a></span>
										<span class="comments"><?php echo $blogresl->comment_count;?></span>
										<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span>
									</div>
						</div>
					</article> <!-- ENDS Audio -->
	        		<?php		
							}
						 ?> 	
				<!-- page-navigation -->
					<div class="page-navigation cf">
						<div class="nav-next"><a href="#">&#8592; Older Entries </a></div>
						<div class="nav-previous"><a href="#">Newer Entries &#8594;</a></div>
					</div>
					<!--ENDS page-navigation -->
					
				
        		</div>
        		<!-- ENDS posts list -->
			
				<!-- sidebar -->
        	<aside class="blog_side_left" id="sidebar">
        		
        		<ul>
	        		<li class="block">
		        		<?php  dynamic_sidebar('sidebar-4'); ?>
	        		</li>
	        		<div class="category-widget lists-arrow">
	        			<li class="block">
		        			<div class="heading-box">
								<span class="heading-text"> <?php _e("Categories", "supertheme");?></span>
							</div>
						<ul>
								<?php $cat=get_categories('taxonomy=blog-category&type=acme_blog');
											$new_cat=array();
											foreach($cat as $cats)
											{
												 $term_link = get_term_link( $cats);							   
											 ?>
												<li><a href="<?php echo $term_link; ?>"><?php echo $cats->name;?></a></li>
								<?php }  ?> 
							<!-- <li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li> -->
						</ul>
	        		</li>
	        		</div>	
					
					<div class="archive-widget"><!-- ARCHIVE WIDGET -->
						<li class="block">
							<div class="heading-box">
								<span class="heading-text"> <?php _e("Archives", "supertheme");?></span>
							</div>
							<div class="year">
								2011
							</div>
							<div class="month">
                                <ul>
                                    <?php
											/* $args = array(
														'type'            => 'acme_blog',
														'limit'           => '',
														'format'          => 'html', 
														'before'          => '',
														'after'           => '',
														'show_post_count' => false,
														'echo'            => 1,
														'order'           => 'DESC'
													);
													wp_get_archives( $args ); */
                                    $args = array(
                                        'post_type'    => 'acme_blog',
                                        'type'         => 'monthly',
                                        'echo'         => 1
                                    );

                                    $archivesArr = wp_get_archives( $args );
                                    ?>

                                </ul>
								</div>
							</li>
						</div>
						<!-- ENDS ARCHIVE WIDGET -->       		
        		</ul>
        		
        	</aside>
			<!-- ENDS sidebar -->
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		



<?php  get_footer()?>