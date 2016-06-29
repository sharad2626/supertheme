<?php

/*
Template Name: Blog Page2
*/
get_header(); ?>
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
        <a class="btn prev-main-slider"> <?php _e("Previous", "supertheme");?> </a>
        <a class="btn next-main-slider"> <?php _e("Next", "supertheme");?> </a>
    </div> -->
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
						<div id="page-heading-leaderboard">
								<div class="master-heading"> <?php _e("Blog", "supertheme");?></div>
						</div> <!-- END PAGE HEADING LEADERBOARD -->
		<div id="page-content-sb" class="cf">
				<div class="blog-content">
							<?php
										$args1= array( 'post_type' => 'acme_blog' , 'posts_per_page'   => 4, 'orderby' => 'post_date' , 'order' => 'ASC','paged' => $paged);
										$wp_query = new WP_Query($args1);

									while ( $wp_query->have_posts() ) : $wp_query->the_post();
											$terms = get_the_terms($post->ID, 'blog-category' );

												if ($terms && ! is_wp_error($terms)) :
													$term_slugs_arr = array();

															foreach ($terms as $term)
															{
																$terms_slug_str = $term_slugs_arr[] = $term->slug;
															}
												endif;
									$comments_count = wp_count_comments($post->ID);
									$author_name = get_userdata($post->post_author)->display_name;

							?>

        <div class="post-one full-width last">
            <div class="one-half margin-bottom-0"">
            <?php  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'single-post-thumbnail');  	 ?>
            <img src="<?php echo $large_image_url[0];?>" width="100%" border="0" alt="">

            <div class="blog-meta-style-two cf">
                <div class="posted-by">
                    By	<span>	<?php echo $author_name; ?>		</span>
                    <img src="<?php bloginfo('template_url'); ?>/img/ic_post_by.png" border="0" alt="Posted on">
                </div>

                <div class="posted-on">
                    Posted on  <span>	<?php echo mysql2date('j M Y', $post->post_date); ?>  </span>
                    <img src="<?php bloginfo('template_url'); ?>/img/ic_posted_on.png" border="0" alt="Posted on">
                </div>

                <div class="posted-comment">
                    <span> <?php echo $post->comment_count ;?> </span>
                    <img src="<?php bloginfo('template_url'); ?>/img/ic_post_comment.png" border="0" alt="Posted on">
                </div>

                <div class="posted-category">
                    In  <span>	 
					<?php //echo implode(",",$term_slugs_arr);?>
					<?php echo $term_slugs_arr;?>
					
					</span>
                    <img src="<?php bloginfo('template_url'); ?>/img/ic_post_category.png" border="0" alt="Posted on">
                </div>
            </div>
        </div>
        <div class="one-half last margin-bottom-0"">
        <div class="heading-box">
            <span class="heading-text"><?php echo $post->post_title; ?></span>
        </div>
        <?php echo $post->post_excerpt; ?>
        <p class="text-align-right margin-bottom-0"><a href="<?php echo post_permalink($post->ID); ?> " class="read-more-text">
		 <?php _e("Continue reading", "supertheme");?> &#187;</a></p>
    </div>
</div>
<?php
endwhile;

?>




<!-- <div class="post-two full-width last">
								<div class="one-half margin-bottom-0"">
									<img src="<?php bloginfo('template_url'); ?>/img/blog-sample-two-image002.jpg" width="100%" border="0" alt="Blog Two">
									<div class="blog-meta-style-two cf">
										<div class="posted-by">
											By
											<span>
												Admin
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_by.png" border="0" alt="Posted on">
										</div>
										<div class="posted-on">
											Posted on
											<span>
												May 22, 2011
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_posted_on.png" border="0" alt="Posted on">
										</div>
										<div class="posted-comment">
											<span>
												34
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_comment.png" border="0" alt="Posted on">
										</div>
										<div class="posted-category">
											In
											<span>
												Category Name
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_category.png" border="0" alt="Posted on">
										</div>
									</div>
								</div>
								<div class="one-half last margin-bottom-0"">
									<div class="heading-box">
										<span class="heading-text">2nd Post</span>
									</div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
									<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">Continue reading &#187;</a></p>
								</div>
							</div>
							<div class="post-three full-width last">
								<div class="one-half margin-bottom-0"">
									<img src="<?php bloginfo('template_url'); ?>/img/blog-sample-two-image003.jpg" width="100%" border="0" alt="Blog Two">
									<div class="blog-meta-style-two cf">
										<div class="posted-by">
											By
											<span>
												Admin
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_by.png" border="0" alt="Posted on">
										</div>
										<div class="posted-on">
											Posted on
											<span>
												May 24, 2011
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_posted_on.png" border="0" alt="Posted on">
										</div>
										<div class="posted-comment">
											<span>
												05
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_comment.png" border="0" alt="Posted on">
										</div>
										<div class="posted-category">
											In
											<span>
												Category Name
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_category.png" border="0" alt="Posted on">
										</div>
									</div>
								</div>
								<div class="one-half last margin-bottom-0"">
									<div class="heading-box">
										<span class="heading-text">3rd Post</span>
									</div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
									<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">Continue reading &#187;</a></p>
								</div>
							</div>
							<div class="post-four full-width last">
								<div class="one-half margin-bottom-0"">
									<img src="<?php bloginfo('template_url'); ?>/img/blog-sample-two-image004.jpg" width="100%" border="0" alt="Blog Two">
									<div class="blog-meta-style-two cf">
										<div class="posted-by">
											By
											<span>
												Admin
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_by.png" border="0" alt="Posted on">
										</div>
										<div class="posted-on">
											Posted on
											<span>
												June 05, 2011
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_posted_on.png" border="0" alt="Posted on">
										</div>
										<div class="posted-comment">
											<span>
												26
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_comment.png" border="0" alt="Posted on">
										</div>
										<div class="posted-category">
											In
											<span>
												Category Name
											</span>
											<img src="<?php bloginfo('template_url'); ?>/img/ic_post_category.png" border="0" alt="Posted on">
										</div>
									</div>
								</div>
								<div class="one-half last margin-bottom-0"">
									<div class="heading-box">
										<span class="heading-text">4th Post</span>
									</div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
									<p class="text-align-right margin-bottom-0"><a href="" class="read-more-text">Continue reading &#187;</a></p>
								</div>
							</div> -->



<!-- page-navigation -->
<div class="page-navigation cf">
    <div class="nav-previous">
        <?php previous_posts_link( 'Older Entries &#187;' );?>
    </div>
    <div class="page-number-box">
        <?php get_numeric_pagination();?>
    </div>
    <div class="nav-next">
        <?php next_posts_link( '&#171; Newer Entries', $wp_query->max_num_pages ); ?>
    </div>
</div>
<!--ENDS page-navigation -->
</div>
</div>
<!-- SIDEBAR -->
<aside class="new_side" id="sidebar" > 
    <!-- AD WIDGET -->
    <div class="ad-widget">
        <div class="heading-box">
            <span class="heading-text"><?php _e("Advertisements", "supertheme");?> </span>
        </div>
        <div class="ad-box">
            <ul>
                <?php $google_result = unserialize(get_option('google_ads_details')) ;
                if(!empty($google_result)){
                    for($i = 1 ; $i<=$google_result[1];$i++) { ?>
                        <li style = "height : 130px;">
                            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                                <!-- Begin BidVertiser code -->
                                <SCRIPT LANGUAGE="JavaScript1.1" src="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=&bid=" type="text/javascript"></SCRIPT>
                            <noscript><a href="http://www.bidvertiser.com/bdv/BidVertiser/bdv_advertiser.dbm">pay per click</a></noscript>
                            <!-- End BidVertiser code -->
                        </li>
                    <?php } } else {  ?>
                    <li>
                        <h5>Lorem ipsum dolor sit amet</h5>
                        <p class="margin-bottom-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#">www.supertheme.com</a>
                    </li>
                    <li>
                        <h5>Lorem ipsum dolor sit amet</h5>
                        <p class="margin-bottom-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#">www.supertheme.com</a>
                    </li>
                    <li>
                        <h5>Lorem ipsum dolor sit amet</h5>
                        <p class="margin-bottom-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#">www.supertheme.com</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- ENDS AD WIDGET -->
    <!-- CATEGORY WIDGET -->
    <div class="category-widget lists-arrow">
        <div class="heading-box">
            <span class="heading-text"> <?php _e("Categories", "supertheme");?></span>
        </div>
        <ul>
            <?php $cat=get_categories('taxonomy=blog-category&type=acme_blog');
            $new_cat=array();
            foreach($cat as $cats){
                $term_link = get_term_link( $cats);
                ?>
                <li><a href="<?php echo $term_link; ?>"><?php echo $cats->name;?></a></li>

            <?php }  ?>
        </ul>
    </div>
    <!-- ENDS CATEGORY WIDGET -->
    <!-- ARCHIVE WIDGET -->
    <div class="archive-widget">
        <div class="heading-box">
            <span class="heading-text"> <?php _e("Archives", "supertheme");?></span>
        </div>
        <div class="year">
            2011
        </div>
        <div class="month">
            <ul>
                <?php

                $args = array(
                    'post_type'    => 'acme_blog',
                    'type'         => 'monthly',
                    'echo'         => 1
                );

                $archivesArr = wp_get_archives( $args );
                ?>

            </ul>
        </div>
    </div>
    <!-- ENDS ARCHIVE WIDGET -->
    <!-- LATEST POSTS -->
    <div class="latest-posts">
        <div class="heading-box">
            <span class="heading-text"> <?php _e("Latest Posts", "supertheme");?></span>
        </div>
        <ul class="recentBlogPost">
            <?php
				$args1= array( 'post_type' => 'acme_blog' , 'posts_per_page'   => 3, 'orderby' => 'post_date' , 'order' => 'DESC');
				$blogPosts = get_posts($args1);
				foreach($blogPosts as $post) { 
			?>
			<li class="cat-item"><a href = "<?php echo post_permalink($post->ID); ?>"><?php echo $post->post_title;?></a></li>
			<?php } ?>
        </ul>
    </div>
    <!-- ENDS LATEST POSTS -->
    <!-- NEWSLETTER WIDGET -->
    <div class="our-clients-widget">
        <div class="heading-box">
            <span class="heading-text"> <?php _e("Newsletter", "supertheme");?></span>
        </div>
        <form id="newsletter-form-widget" action="#" method="post">
            <fieldset>
                <p>
                    <label for="email" > <?php _e("Please enter your email", "supertheme");?></label>
                    <input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
                    <input type="button" value="Send" name="submit" id="submit" class="send-button" />
                </p>
                <!-- send mail configuration -->
                <input type="hidden" value="your@email.com" name="to" id="to" placeholder="your@email.com" />
                <input type="hidden" value="Enter the subject here" name="subject" id="subject" />
                <input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
                <!-- ENDS send mail configuration -->
            </fieldset>
            <p class="privacy-text-newsletter-widget margin-bottom-0"><a href=""> <?php _e("Privacy Policy", "supertheme");?> </a></p>
        </form>
    </div>
    <!-- ENDS NEWSLETTER WIDGET -->
</aside>
<!-- ENDS SIDEBAR -->
</div><!-- ENDS WRAPPER -->
</div>
<!-- ENDS MAIN -->


<?php get_footer();?>
