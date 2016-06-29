<?php
/*
 * The Header template for our theme
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js" dir="ltr">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php _e("Super Theme","supertheme"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
<?php 
	if(ICL_LANGUAGE_CODE == 'ar') { 	?> 
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/stylesheet_ar.css" media="screen" />
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/comments.css"  />
	<?php } else  {     ?>
			<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
	<?php }    ?>	
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/custom_login.css" />
	<link rel="stylesheet" media="screen" href="<?php bloginfo('template_directory'); ?>/css/superfish.css" />
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/elements.css" />
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/skin.css" />
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/lessframework.css" />
	<link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet">

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/tabs.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/css3-mediaqueries.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.columnizer.min.js"></script>
	<!-- <script src="<?php bloginfo('template_directory'); ?>/js/custom_login.js"></script> -->

	<!-- superfish -->
	<script src="<?php bloginfo('template_directory'); ?>/js/superfish-1.4.8/js/hoverIntent.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/superfish-1.4.8/js/superfish.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/superfish-1.4.8/js/supersubs.js"></script>
	<!-- ENDS superfish -->

	<!--  Js for Theme options tab  START  -->
	<script src="<?php bloginfo('template_directory'); ?>/js/easyResponsiveTabs.js"></script>
	<!--  Js for Theme options tab END   -->
	<!-- poshytip -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/poshytip-1.1/src/tip-twitter/tip-twitter.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/easy-responsive-tabs.css" />
	<script src="<?php bloginfo('template_directory'); ?>/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
	<!-- ENDS poshytip -->
	<!-- JCarousel -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.jcarousel.min.js"></script>
	<link rel="stylesheet" media="screen" href="<?php bloginfo('template_directory'); ?>/css/carousel.css" />
	<!-- ENDS JCarousel -->
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

	<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
	
	<!-- This is for fav Icon for site -->
	<?php
			$fav_options = unserialize(get_option('Fav_Details'));
			//print_r($fav_options);
	?>
			<link rel="shortcut icon" href="<?php echo  $fav_options[0]; ?>" sizes="16x16" type="image/x-icon" />

		<?php wp_head();   ?>
</head>

<!-- this is for  displaying the toolset -->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/toolset/css/demo.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/toolset/dist/css/jquery.mmenu.all.css" />
<link type="text/css" rel="stylesheet" href="" id="stylesheet_box"/>

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/toolset/dist/js/jquery.mmenu.min.all.js"></script>

<div id="page_sidebar">
	<div class="sidebar_toolset">
		<a href="#slidemenu"></a>
	</div>
	
	<div id="slidemenu">
	 	<span>Layouts </span></br>
		<input type="button" name="boxed"value="Boxed" id="boxed" onclick="loadcss('boxed') "/>
		<input type="button" name="wide"value="Wide" id="wide" onclick=" loadcss('wide'); "/>
	</div>		
</div>
<!-- End the toolset -->

<body class="home">
	<div id="box">
		<div id="outer-wrapper">
			<!-- HEADER -->
			<header>
				<div class="wrapper cf">
					<div id="topBarPanel">
						<div class="topbarContent">
							<div class="languageSelector">
								<?php do_action('icl_language_selector'); ?>
							</div>
							<div class="login">
								<?php  
									$login_options = unserialize(get_option('Login_option')) ;   
									//print_r($login_options);
									if($login_options == 'Simple')
									{
										?>
										<a href="<?php echo wp_login_url(); ?>"><span class="loginIcon"></span><?php _e("Login", "supertheme");?></a>
										<?php 
									}
									else if($login_options == 'popup')
									{
										?>
										<a id="loginLink">Login</a>
											<div class="overlay" style="display: none;">
												<div class="login-wrapper">
													<div class="login-content" id="loginTarget">
														<a class="close">x</a>
														<h3>Sign in</h3>
														<form method="post" action="login.php">
															<label for="username">
																Username:
																<input type="text" name="username" id="username" placeholder="Username " pattern="^[a-zA-Z][a-zA-Z0-9-_\.]$" required />
															</label>
															<label for="password">
																Password:
																<input type="password" name="password" id="password" placeholder="Password" pattern="(?=^.$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required />
															</label>
															<button type="submit">Login</button>
														</form>
													</div>
												</div>
											</div>
											<script>
											$(document).ready(function() {
																$("#loginLink").click(function( event ){
																	   event.preventDefault();
																	   $(".overlay").fadeToggle("fast");
																 });
																
																$(".overlayLink").click(function(event){
																	event.preventDefault();
																	var action = $(this).attr('data-action');
																	
																	$("#loginTarget").load("ajax/" + action);
																	
																	$(".overlay").fadeToggle("fast");
																});
																
																$(".close").click(function(){
																	$(".overlay").fadeToggle("fast");
																});
																
																$(document).keyup(function(e) {
																	if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) { 
																		event.preventDefault();
																		$(".overlay").fadeToggle("fast");
																	}
																});
															});
											</script>
										<?php
									}
									else if($login_options == 'Popup Slide')
									{
										?>
													<div class="content">
														<a class="activator" id="activator"> Login</a>
													</div>       
													<!-- The overlay and the box -->
													<div class="overlay" id="overlay" style="display:none;"></div>
													<div class="loginbox" id="loginbox">
														 <div class="login-wrapper">
																<div class="login-content" id="loginTarget">
																	<a class="boxclose" id="boxclose"></a>
																	<h3>Sign in</h3>
								  <form method="post" action="login.php">
								      <label for="username">Username:</label>
                                            <input type="text" name="username" id="username" placeholder="Username " pattern="^[a-zA-Z][a-zA-Z0-9-_\.]$" required />                    
								       <label for="password">Password:</label>												                    <input type="password" name="password" id="password" placeholder="Password" pattern="(?=^.$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required />
								           <button type="submit">Login</button>
				                   </form>
																</div>
														</div>
													</div>
													<script>
													  $(document).ready(function() {
																$('#activator').click(function(){
																	$('#overlay').fadeIn('fast',function(){
																		$('#loginbox').animate({'top':'160px'},500);
																	});
																});
																$('#boxclose').click(function(){
																	$('#loginbox').animate({'top':'-350px'},500,function(){
																		$('#overlay').fadeOut('fast');
																	});
																});

															});
													</script>
											<?php 
									}
								?>
							</div>
						
							<div class="socialIconsTop">
								<?php 
						            $social_options=unserialize(get_option('Social_Data')) ; 
									if($social_options[0] != ""){
                                        echo '<a target="_blank" href="'.$social_options[0].'" class="facebookIcon"></a>';
                                    }
                                    if($social_options[1] != ""){
                                       echo '<a target="_blank" href="'.$social_options[1].'" class="twitterIcon"></a>';
                                    }
                                    if($social_options[2] != ""){
                                        echo '<a target="_blank" href="'.$social_options[2].'" class="linkedInIcon"></a>';
                                    }
                                    if($social_options[3] != ""){
                                        echo '<a target="_blank" href="'.$social_options[3].'" class="flickrIcon"></a>';
                                    }
                                    if($social_options[4] != ""){
                                        echo '<a target="_blank" href="'.$social_options[4].'" class="rssIcon"></a>';
                                    }
                                    if($social_options[5] != ""){
                                        echo '<a target="_blank" href="'.$social_options[5].'" class="vimeoIcon"></a>';
                                    }
                                    if($social_options[6] != ""){
                                        echo '<a target="_blank" href="'.$social_options[6].'" class="youtubeIcon"></a>';
                                    }
                                    if($social_options[7] != ""){
                                        echo '<a target="_blank" href="'.$social_options[7].'" class="tumblrIcon"></a>';
                                    }
                                    if($social_options[8] != ""){
                                        echo '<a target="_blank" href="'.$social_options[8].'" class="dribbbleIcon"></a>';
                                    }
                                    if($social_options[9] != ""){
                                        echo '<a target="_blank" href="'.$social_options[9].'" class="blogger Icon"></a>';
                                    }
                                    if($social_options[10] != ""){
                                        echo '<a target="_blank" href="'.$social_options[10].'" class="yahooIcon"></a>';
                                    }						
								?>								
							</div>

							<div class="searchTop">
								<form action="/" method="get">
									<fieldset>
										<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php _e("Search here...", "supertheme");?>" />
									</fieldset>
								</form>
							</div>
						</div>
					</div>

				 	<div class="hdr_logo">	 
						<?php $logo_options = unserialize(get_option('Logo_Details'));
						if ( $logo_options[0] != '' ): ?>
							<div id="logo">
								<a href="<?php echo  home_url();  ?>"> <img src="<?php echo $logo_options[0]; ?>" /> </a>
                            </div><!--  Inner logo div closed -->															
						<?php  endif; ?>
					</div><!--  Outer logo div closed -->

					<!-- nav Start-->
					<?php 
						$menuar = array(
															'theme_location'  => '',
															'menu'            => 'primary	',
															'container'       => '',
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
															'items_wrap'      => '<ul id="" class="menu  hdr_menu">
																					<li class="toggle_showhide" >
																						<div class="nav_toggle_btn">
																						<span class="menu_title">Menu</span>
																						<span class="toggle_btn">
																							<em></em>
																							<em></em>
																							<em></em>
																							<em></em>
																						</span>
																							</div>
																					</li>
				                                            %3$s</ul>',
															'depth'           => 0,
															'walker'          => ''
														);
											
						wp_nav_menu($menuar);  
						?>
					<!--  Nav End -->
				</div>
			</header>

<script>
jQuery(document).ready(function(){
 jQuery(".login_here").click(function(){
    jQuery(".login_box").slideToggle();
  });
});
</script>