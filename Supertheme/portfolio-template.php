<?php
/**
 * Template Name: Portfolio Template
 */

get_header(); ?>

   <div id="main">
			<div class="wrapper cf">
			    <div class="home-content">
								
                                <div id="primary" class="content-area">

                                    <div id="content" class="site-content" role="main">
				
                                        <!-- Filter container -->
                                        <div id="filter-container" class="cf">
					<?php
					
					global $post;
                                        global $wp_query;

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$portfolio_result = unserialize(get_option('portfolio_details')) ;
				       
					if($portfolio_result['grid_pagination_type'] == 'Pagination') 
					{ 
                                          $portfolio_perpage = $portfolio_result['itemsPerPage'];  
                                        }
                                        else{ $portfolio_perpage = '-1';}

					$args = array(
					'posts_per_page'   => $portfolio_perpage,
					'category'         => '',
					'category_name'    => '',
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'post_type'        => 'sup_portfolio',
					'post_status'      => 'publish',
					'paged' => $paged,
					);
					
					$wp_query = new WP_Query( $args);

					// The Loop
					while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					
					<figure class="web print">
						<a href="<?php get_post_permalink(); ?>" class="thumb">
						<?php echo get_the_post_thumbnail($post->ID,'full');?>
						</a>
						<figcaption>
							<a href="<?php the_permalink(); ?>"><h3 class="heading"><?php the_title(); ?></h3></a>
								
							<div class="portfolio-cat">
								<a href="#" >web</a>,
								<a href="#" >print</a>
							</div>	
						</figcaption>
					</figure>
					<?php
					endwhile;

					if($portfolio_result['grid_pagination_type'] == 'Pagination') 
					{ ?>
						<!-- page-navigation -->
						<div class="page-navigation cf">
						    
						    <div class="page-number-box">
							<?php get_numeric_pagination();?>
						    </div>
						    
						</div>
						<!--ENDS page-navigation -->
					<?php }
                                        

					// Reset Query
					wp_reset_query();
					?> 
				    </div><!-- ENDS Filter container -->
                                </div><!-- #content -->
                            </div><!-- #primary -->
                        </div><!-- #Main  -->
                    </div><!-- wrapper_cf -->
                </div> <!--  home_content-->


<?php get_footer(); ?>
