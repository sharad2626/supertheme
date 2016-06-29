<?php 
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();
?> 
 
	<!-- SLIDER -->				
			<div class="main-slider"> 
				<div id="main-slider-owl-demo" class="owl-carousel">
					<!-- <img src="<?php bloginfo('template_url'); ?>/img/dummies/slides/01.jpg" title="" alt="alt" class="item" width="100%" /> -->
					<img src="<?php bloginfo('template_url'); ?>/img/dummies/slides/02.jpg" title="" alt="alt" class="item" width="100%" />
					<img src="<?php bloginfo('template_url'); ?>/img/dummies/slides/03.jpg" title="" alt="alt" class="item" width="100%" />
					<img src="<?php bloginfo('template_url'); ?>/img/dummies/slides/04.jpg" title="" alt="alt" class="item" width="100%" />
					<img src="<?php bloginfo('template_url'); ?>/img/dummies/slides/05.jpg" title="" alt="alt" class="item" width="100%" />
					<img src="<?php bloginfo('template_url'); ?>/img/dummies/slides/06.jpg" title="" alt="alt" class="item" width="100%" />				
				</div>
				<div class="customNavigation">
					<a class="btn prev-main-slider">Previous</a>
					<a class="btn next-main-slider">Next</a>
				</div>
			</div>
			<!-- ENDS SLIDER -->
			<!-- PURCHASE NOW LEADERBOARD -->
			<!-- <div id="purchase-leaderboard">
				<div class="two-third text-panel">
					<p class="discription-text"><span class="logo-text">Super theme</span> is responsive multilingual Clean template</p>
					<p>Loaded with Awsome features, Unlimited designs, Posibilities and Options</p>
				</div>
				<div class="one-third last button-panel">
					<div class="link-button green">
						Purchase Now
					</div>
				</div>
			</div> -->

			<!-- END PURCHASE NOW LEADERBOARD -->
			<!-- MAIN -->
			<div id="main">
				<div class="wrapper cf">
					<!-- PAGE HEADING LEADERBOARD -->
					<div id="page-heading-leaderboard">
						<div class="master-heading">Blog</div>
					</div>
					<!-- END PAGE HEADING LEADERBOARD -->
					<!-- PAGE BREADCRUM -->
					<div id="page-breadcrum">
						Home / <span class="active-page"> Blog</span>
					</div>
					<!-- END PAGE BREADCRUM -->

					<div id="page-content-sb" class="cf"> 
						<div class="blog-content">
                                          <div class="post-one full-width">
													
								<?php while ( have_posts() ) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php $cat= get_the_terms($post->ID,'blog-category'); 
$term_slugs_arr = array();
	foreach ($cat as $term) {
	    $term_slugs_arr[] = $term->slug;
	}
   $author = get_the_author($post->ID); 
  $date=get_the_date('', $post->ID);  
 
$comments_count = wp_count_comments($post->ID);
   
?>
								<div class="heading-box">
									<span class="heading-text"><?php echo the_title();?></span>
								</div>
								<div class="blog-meta-style-one">
									<div class="posted-on">
										<img src="<?php bloginfo('template_url'); ?>/img/ic_posted_on.png" border="0" alt="Posted on">
										Posted on
										<span>
											<?php echo mysql2date('j M Y', $date);
 ?>
 
										</span>
									</div>	
									<div class="posted-by">
										<img src="<?php bloginfo('template_url'); ?>/img/ic_post_by.png" border="0" alt="Posted on">
										By
										<span>
											<?php echo $author;?>
										</span>
									</div>
									<div class="posted-category">
										<img src="<?php bloginfo('template_url'); ?>/img/ic_post_category.png" border="0" alt="Posted on">
										In
										<span>
											<?php echo implode(",",$term_slugs_arr);?>
										</span>
									</div>
									<div class="posted-comment">
										<img src="<?php bloginfo('template_url'); ?>/img/ic_post_comment.png" border="0" alt="Posted on">
										<span>
											<?php echo $comments_count->total_comments;?>
										</span>
									</div>
								</div>
								  <img src="<?php echo $image[0];?>" width="100%"> 
								<?php the_content();?>

<?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?>
								 
							</div>
							<?php endwhile; ?>
							
						</div>
					</div>
					<!-- SIDEBAR -->
					<aside id="sidebar">
						<!-- AD WIDGET -->
						<div class="ad-widget">
							<div class="heading-box">
								<span class="heading-text">Advertisements</span>
							</div>
							<div class="ad-box">
								<ul>
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
								</ul>
							</div>
						</div>
						<!-- ENDS AD WIDGET -->
						<!-- CATEGORY WIDGET -->
						<div class="category-widget lists-arrow">
							<div class="heading-box">
								<span class="heading-text">Categories</span>
							</div>
							<ul>
							 

								<?php $cat=get_categories('taxonomy=blog-category');
								foreach($cat as $cats)
								{ ?>
								<li><?php echo $cats->name;?></li>
								<?php } ?> 
							</ul>
						</div>
						<!-- ENDS CATEGORY WIDGET -->
						<!-- ARCHIVE WIDGET -->
						<div class="archive-widget">
							<div class="heading-box">
								<span class="heading-text">Archives</span>
							</div>
							<div class="year">
								2011
							</div>
							<div class="month">
								<ul>
									<li>June</li>
									<li>May</li>
									<li>April</li>
									<li>March</li>
									<li>February</li>
									<li>January</li>
								</ul>
							</div>
						</div>
						<!-- ENDS ARCHIVE WIDGET -->
						<!-- LATEST POSTS -->
						<div class="latest-posts">
							<div class="heading-box">
								<span class="heading-text">Latest Posts</span>
							</div>
							<ul class="recentBlogPost">
								<li class="cat-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</li>
								<li class="cat-item">Quisque eu justo vel nisi euismod mattis</li>
								<li class="cat-item">Vivamus egestas lacus nec massa luctus, et eleifend augue euismod.</li>
							</ul>
						</div>
						<!-- ENDS LATEST POSTS -->
						<!-- NEWSLETTER WIDGET -->
						<div class="our-clients-widget">
							<div class="heading-box">
								<span class="heading-text">Newsletter</span>
							</div>
							<form id="newsletter-form-widget" action="#" method="post">
								<fieldset>
									<p>
										<label for="email" >Please enter your email</label>
										<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
										<input type="button" value="Send" name="submit" id="submit" class="send-button" />
									</p>
									<!-- send mail configuration -->
									<input type="hidden" value="your@email.com" name="to" id="to" />
									<input type="hidden" value="ENter the subject here" name="subject" id="subject" />
									<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
									<!-- ENDS send mail configuration -->
								</fieldset>
								<p class="privacy-text-newsletter-widget margin-bottom-0"><a href="">Privacy Policy</a></p>
							</form>
						</div>
						<!-- ENDS NEWSLETTER WIDGET -->
					</aside>
					<!-- ENDS SIDEBAR -->	
				</div><!-- ENDS WRAPPER -->
			</div>
			<!-- ENDS MAIN -->

<?php get_footer();  ?>
