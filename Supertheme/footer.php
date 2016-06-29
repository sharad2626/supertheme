<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

			<!-- FOOTER -->
			<footer>
				<div class="wrapper cf">
					<!-- widgets -->
					<div class="one-third">
						<div class="heading-box">
							<span class="heading-text footer-heading-text"><?php echo _e("Blog Posts","supertheme");  ?></span>
						</div>
						<ul class="recentBlogPost">
							<?php 
								$args1= array( 'post_type' => 'acme_blog' , 'posts_per_page'   => 3, 'orderby' => 'post_date' , 'order' => 'DESC','suppress_filters'=>0);
								$blogPosts = get_posts($args1);
								foreach($blogPosts as $post) 
								{
									$testdesc = $post->post_content;
								 	if(ICL_LANGUAGE_CODE=='en')
										$desc = substr($testdesc,0,60);
									else
										$desc = substr($testdesc,0,100);
									?>
									<li class="cat-item">
										<?php if ( has_post_thumbnail() ) {?><span class="alignleft"><?php echo get_the_post_thumbnail($post->ID,array(50,50));   ?></span><?php }?>
										<span class="blogalignright">
											<a href = "<?php echo post_permalink($post->ID); ?>" ><?php echo $post->post_title;?></a>
											<p><?php echo $desc;?></p>
										</span>
									</li>
									<?php 
								} 
							?>	
						</ul>
					</div>

					<div class="one-third">
						<div class="heading-box">
							<span class="heading-text footer-heading-text">
									<?php echo _e("Recent Tweets","supertheme"); ?>
							</span>
						</div> 
						<?php dynamic_sidebar('sidebar-3'); ?>
					</div>
								
					<!-- This is last footer section -->
					<div class="one-third last">
						<div class="heading-box">
							<span class="heading-text footer-heading-text"> <?php  echo _e("Get In Touch","supertheme"); ?></span>
						</div>
					
						<form id="newsletterform" name="newsletterform" action="#" method="post">
							<fieldset>
								<p>
									<label for="name" ><?php _e('First Name','supertheme');  ?></label>
									<input name="name"  id="name" type="text" class="form-poshytip" title="<?php _e("Enter your full name","supertheme"); ?>" />
								</p>
								<p>
									<label for="email" ><?php _e('Email','supertheme');  ?></label>
									<input name="email"  id="email" type="text" class="form-poshytip" title="<?php _e("Enter your Email address","supertheme"); ?>" />
								</p>
								<!-- send mail configuration -->
									<input type="hidden" value="your@email.com" name="to" id="to" />
									<input type="hidden" value="ENter the subject here" name="subject" id="subject" />
									<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
									<input type="hidden" name="action" value="sendEmailForm" />
								<!-- ENDS send mail configuration -->
								<p> <input type="button" value="<?php _e('Send','supertheme');  ?>" name="submit" id="submit" /> </p>
							</fieldset>
						</form>
					</div>

					<div class="cf"></div>
					<!-- ENDS widgets -->

					<!-- bottom -->
					<div class="footer-bottom">
						<div class="copyright-text">
							<?php
								$options=unserialize(get_option('Footer_Text')) ;  
								if($options[0]!= '')
									echo $options[1] ;
								else
									echo "Footer text here";
							?>
						</div>
							
						<?php	 
							$defaults = array(
																'theme_location'  => '',
																'menu'            => 'footer-menu',
																'container'       => 'div',
																'container_class' => '',
																'container_id'    => '',
																'menu_class'      => '',
																'menu_id'         => '',
																'echo'            => true,
																'fallback_cb'     => 'wp_page_menu',
																'before'          => '',
																'after'           => '',
																'link_before'     => '',
																'link_after'      => '',
																'items_wrap'      => '<ul id="navigation-bar-bottom" class="cf">%3$s</ul>',
																'depth'           => 0,
																'walker'          => ''
															);
															wp_nav_menu($defaults); 
						?>
						<div class="musicPlayStopIcon">
							<img id="js-play-audio" title="Play Audio" alt="Audio Play" src="<?php bloginfo('template_url'); ?>/img/ic_play_audio.png" style="display: block;">
							<img id="js-pause-audio" title="Pause Audio" alt="Audio Pause" src=	"<?php bloginfo('template_url'); ?>/img/ic_pause_audio.png" style="display: none;">
					</div>
					<div class="fullScreenIcon">
							<img id="view-fullscreen" title="Fullscreen View" alt="Fullscreen View" src="<?php bloginfo('template_url'); ?>/img/ic_fullscreen.png">
 				  </div>
		</div>
	<!-- ENDS bottom -->
				</div>
			</footer>
			<!-- ENDS FOOTER -->
		</div>
	</div>
</body>
</html>


<script type="text/javascript">
	jQuery(function() {
		jQuery('div#slidemenu').mmenu({
			extensions	: [ 'effect-slide-menu', 'pageshadow' ],
			counters	: true,
			navbars	: [
			{
					position	: 'middle',
					content		: [
						'prev',
						'title',
						'close'
					]
				}
			]
		});
	});

	function loadcss(url) {
		if(url == 'boxed')
		{
			var head  = document.getElementsByTagName('head')[0];
			var link  = document.createElement('link');
			link.id   = "stylesheet_box";
			link.rel  = 'stylesheet';
			link.type = 'text/css';
			link.href = 'http://supertheme.php-dev.in/supertheme/wp-content/themes/Supertheme/css/stylesheet_wid.css';
			link.media = 'all';
			head.appendChild(link);
		}
		else
		{
			var head  = document.getElementsByTagName('head')[0];
			var link  = document.createElement('link');
			link.id   = "stylesheet_box";
			link.rel  = 'stylesheet';
			link.type = 'text/css';
			link.href = 'http://supertheme.php-dev.in/supertheme/wp-content/themes/Supertheme/css/stylesheet_box.css';
			link.media = 'all';
			head.appendChild(link);
		}
	} 	
</script>
<script type="text/javascript">
$("#submit").click(function(){
     var name = $("#name").val();
    var email = $("#email").val();
    var data = { action:'siteWideMessage', name:name, email:email };
    $.post('<?php echo admin_url("admin-ajax.php"); ?>', data, function(response) {
        //alert(response);
    });
});
</script>