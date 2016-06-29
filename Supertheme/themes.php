<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Supertheme Theme Options</title>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/easy-responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom_css.css" />
    <script src=" <?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/framework/js/custom_script.js" type="text/javascript"></script>

</head>
<body>
   
       <?php
	     	/*This is for Footer Condition*/
			if(isset($_POST['footer_submit']))  
			{
				   $data = array($_POST['footerchk'],$_POST['footrtext'] );
				   $footerdata= serialize($data);
				   $tru = update_option( 'Footer_Text', $footerdata);
				   
				   if($tru == 1)
					{
						$message = "Options Updated";
					}
				
			}

			/*This code is for the Flicker plugins*/
			if(isset($_POST['flicker_submit']))
			{
				 require_once(ABSPATH .'/wp-admin/includes/plugin.php');
				 $fl_plugin_pth = 'flickr-badges-widget/index.php';
				 
				 $flicker_array = array($_POST['flicker_plugin_detail']);
				 $flicker_reslt = serialize($flicker_array);

					if($_POST['flicker_plugin_detail']!=null && $_POST['flicker_plugin_detail'] != '')
							{
								if(!is_plugin_active($fl_plugin_pth))
								{
									update_option('flicker_details' , $flicker_reslt);
									$tru = activate_plugin($fl_plugin_pth);

									if($tru == 1)
									{
										$message = "Options Updated";
									}
								}

							}
							else
							{
								$tru = deactivate_plugins($fl_plugin_pth);
								update_option('flicker_details' , $flicker_reslt);
								if($tru == 1)
								{
									$message = "Options Updated";
								}
							}
			} // flicker option
			

			/*This is for Logo upload Condition*/
			if(isset($_POST['logo_submit']))
			{
					$logo_array= array($_POST['site_logo'],$_POST['logo_retina_upload'],   
						                              $_POST['retina_logo_width'],$_POST['retina_logo_height']);
					$logoData= serialize($logo_array);
					$tru = update_option("Logo_Details", $logoData);
					if($tru == 1)
					{
						$message = "Options Updated";
					}
			}

			/* This is for the Home page slider */
			if(isset($_POST['simpleslider_submit']))
			{
				 require_once(ABSPATH .'/wp-admin/includes/plugin.php');
				 $ssl_plugin_pth = 'simple-slider-ssp/wp-slider.php';
				 
				 $slider_array = array($_POST['ss_plugin_detail']);
				 $slider_reslt = serialize($slider_array);

					if($_POST['ss_plugin_detail']!=null && $_POST['ss_plugin_detail'] != '')
							{
								if(!is_plugin_active($ss_plugin_detail))
								{
									update_option('simple_slider_details' , $slider_reslt);
									$tru = activate_plugin($ss_plugin_detail);

									if($tru == 1)
									{
										$message = "Options Updated";
									}
								}

							}
							else
							{
								$tru = deactivate_plugins($ssl_plugin_pth);
								update_option('simple_slider_details' , $slider_reslt);
								if($tru == 1)
								{
									$message = "Options Updated";
								}
							}
				}
			/* End Home page slider*/
			
			/*This code is for the cyclone plugins*/
			if(isset($_POST['cyclone_slider_submit']))
			{
				 require_once(ABSPATH .'/wp-admin/includes/plugin.php');
				 $cs_plugin_pth = 'cyclone-slider-2/cyclone-slider.php';
				 
				 $cs_array = array($_POST['cs_plugin_detail']);
				 $cs_reslt = serialize($cs_array);

					if($_POST['cs_plugin_detail']!=null && $_POST['cs_plugin_detail'] != '')
							{
								if(!is_plugin_active($fl_plugin_pth))
								{
									update_option('flicker_details' , $cs_reslt);
									$tru = activate_plugin($cs_plugin_pth);

									if($tru == 1)
									{
										$message = "Options Updated";
									}
								}
							}
							else
							{
								$tru = deactivate_plugins($cs_plugin_pth);
								update_option('flicker_details' , $cs_reslt);
								if($tru == 1)
								{
									$message = "Options Updated";
								}
							}
			} // Cyclone option

			/*This is for Fav Icon condition*/
			if(isset($_POST['fav_icon_submit']))
			{
					$fav_array = array($_POST['favicon_upload'] ,$_POST['iphone_icon_upload'] ,$_POST['iphone_icon_retina_upload'],
					                             $_POST['ipad_icon_upload'],$_POST['ipad_icon_retina_upload'] );
					$favIconData = serialize($fav_array);
					$tru = update_option("Fav_Details",$favIconData);
					if($tru == 1)
					{
						$message = "Options Updated";
					}
			}

			/*This is Social Media Condition*/
			if(isset($_POST['socialsubmit']))  
			{
						$social_arry = array($_POST['fblink'], $_POST['twlink'],$_POST['LinkedInlink'],$_POST['flickerlink'],
						$_POST['rsslink'], $_POST['vimeolink'], $_POST['youtubelink'] , $_POST['tumblrlink'],
						$_POST['dribbblelink'] , $_POST['bloggerlink'],$_POST['yahoolink'] );
					   
							   $SocailData= serialize($social_arry);
							   $tru = update_option( 'Social_Data', $SocailData);
							   if($tru == 1)
							   {
									$message = "Options Updated";
							   }
						
			} 

			/*This code is for the twitter plugins*/
			if(isset($_POST['twitter_submit']))
			{
				 require_once(ABSPATH .'/wp-admin/includes/plugin.php');
				 $plugin_pth = 'latest-tweets-widget/latest-tweets.php';
				 
				 $twitter_array = array($_POST['twitter_plugin_detail']);
				 $twitter_reslt = serialize($twitter_array);

					if($_POST['twitter_plugin_detail']!=null)
							{
								if(!is_plugin_active($plugin_pth))
								{
									update_option('twitter_details' , $twitter_reslt);
									$tru = activate_plugin($plugin_pth);

									if($tru == 1)
									{
										$message = "Options Updated";
									}
								}

							}
							else
							{
								$tru = deactivate_plugins($plugin_pth);
								update_option('twitter_details' , $twitter_reslt);
								if($tru == 1)
								{
									$message = "Options Updated";
								}
							}
			}
		/*************************************************************************************************/
			/*This code is for the Newsletter subscription plugins*/
			if(isset($_POST['newslett_submit']))
			{
				 require_once(ABSPATH .'/wp-admin/includes/plugin.php');
				 $plugin_pth = 'simple-subscribe/SimpleSubsribe.php';
				 
				 $newsl_array = array($_POST['newsform_chk']);
				 $newsl_reslt = serialize($newsl_array);

					if($_POST['newsform_chk']!=null)
							{
								if(!is_plugin_active($plugin_pth))
								{
									update_option('newsletter_response' , $newsl_reslt);
									$tru = activate_plugin($plugin_pth);

									if($tru == 1)
									{
										$message = "Options Updated";
									}
								}
							}
							else
							{
								$tru = deactivate_plugins($plugin_pth);
								update_option('newsletter_response' , $newsl_reslt);
								if($tru == 1)
								{
									$message = "Options Updated";
								}
							}
			}
			
			/*This is for Woocommerce plugin*/
			if(isset($_POST['woocom_submit']))
			{
				require_once(ABSPATH .'/wp-admin/includes/plugin.php');
				$plugin_path = 'woocommerce/woocommerce.php';
				$woocom_array= array($_POST['woocom_chk']);
				$woocom_res = serialize($woocom_array);

				if($woocom_array[0]!="")
				{
					if(!is_plugin_active($plugin_path))
					{
						update_option('woocom_details' , $woocom_res);
						$tru = activate_plugin($plugin_path);
						if($tru == 1)
						{
							$message = "Options Updated";
						}
					}
				}
				else
				{
					$tru = deactivate_plugins($plugin_path);
					update_option('woocom_details' , $woocom_res);
					if($tru == 1)
					{
						$message = "Options Updated";
					}
				}
			}
			
			/**This is for the Login functionality**/
			if(isset($_POST['save_login']))
			{
					$loginOption = $_POST['login_f_options'];
			
					$loginOptionData= serialize($loginOption);
							   $tru = update_option( 'Login_option', $loginOptionData);
							   if($tru == 1)
							   {
									$message = "Options Updated";
							   }
			}

	
            /*This is for Contact Form 7 plugin*/
			if(isset($_POST['contactform_submit']))
			{
					$contactform_array= array($_POST['contactform_chk']);
					$contactform_res = serialize($contactform_array);
					update_option('contactform_details' , $contactform_res);
					$contactform_result = unserialize(get_option('contactform_details')) ;
					
					//Code to activate woocommerce plugin when checkbox clicked
					if($contactform_result[0] != NULL)
					{
						$plugin_path = 'contact-form-7/wp-contact-form-7.php';
						$active_plugins = get_option('active_plugins');
					
						if (isset($active_plugins[$plugin_path]))
							return;

						require_once(ABSPATH .'/wp-admin/includes/plugin.php');

						$tru = activate_plugin($plugin_path);
						if($tru == 1)
					   {
							$message = "Options Updated";
					   }
						
					}
					else
					{
						$plugin_path = 'contact-form-7/wp-contact-form-7.php';

						$tru = deactivate_plugins($plugin_path);  
						if($tru == 1)
					   {
							$message = "Options Updated";
					   }		
					}
			}
						
			/*This is for google ads*/
			if(isset($_POST['google_ads_submit']))
			{
					$google_array= array($_POST['ads_chk'],$_POST['no_of_ads']);
				
					$google_res = serialize($google_array);
					
					$tru = update_option('google_ads_details' , $google_res);
					if($tru == 1)
					{
						$message = "Options Updated";
					}
					//

			}
			
			/*This is for portfolio options*/
			if(isset($_POST['portfolio_submit']))
			{
					$portfolio_array= array(
																'itemsPerPage'=>$_POST['itemsPerPage'],
																'grid_pagination_type'=>$_POST['grid_pagination_type']
																);
					
					$portfolio_res = serialize($portfolio_array);
					$tru = update_option('portfolio_details' , $portfolio_res);
					if($tru == 1)
					{
						$message = "Options Updated";
					}

			}
			
			/*This is for slider options*/
			if(isset($_POST['slider_submit']))
			{
					$slider_array= array(
														'sliderWidth'=>$_POST['sliderWidth'],
														'sliderHeight'=>$_POST['sliderHeight']
														);
					$slider_res = serialize($slider_array);
					$tru = update_option('slider_details' , $slider_res);
					
					if($tru == 1)
					{
						$message = "Options Updated";
						
					}
			}
			
			/* This is for Google Contact Address */
			if(isset($_POST['google_contact_submit']))
			{
					$gmap_arr = array('gmap_address' => $_POST['gmap_address'] );

					$gmap_res = serialize($gmap_arr);
					update_option('Google_map_address',$gmap_res);

			}
			
   ?> 
        <!--vertical Tabs-->
		<?php screen_icon(); 
				?>
				<div id="success_msg">
									<?php echo $message; ?>
						</div>
				<div style="font-size-adjust:28px;background-color:  slategrey;width: 93%;  margin-top: 15px;">
						<h3 style="line-height: 26px; display: inline-block; width: 30%;">
							&nbsp; <span style="vertical-align: text-top;color:#FFF; font-weight:600;">  SUPERTHEME </span>
						</h3>
						<div style="width: 30%; display: inline-block; color:#FFF;">
									<p> Online Documentation / Support	</p>
						</div>
							<img src="../wp-content/themes/Supertheme/admin/images/icon_option.png" style="display: inline-block;
    float: right; margin: 14px 10px"/> 
				</div>
		<!--Start  Theme options for the  Tabs-->
        <div id="verticalTab">
				<ul class="resp-tabs-list">
							<li><img src="../wp-content/themes/Supertheme/admin/images/icon-settings.png"/> &nbsp; General Settings</li>
							<li><img src="../wp-content/themes/Supertheme/admin/images/icon-header.png"/> &nbsp; Header Options</li>
							<li> <img src="../wp-content/themes/Supertheme/admin/images/icon-footer.png"/> &nbsp; Footer Options</li>
							<li><img src="../wp-content/themes/Supertheme/admin/images/social_sharing.png"/> &nbsp; Social Media Links</li>
							<!-- <li><img src="../wp-content/themes/Supertheme/admin/images/woo_theme_options_icon.png"/> &nbsp; Woocommerce </li> -->
							<li><img src="../wp-content/themes/Supertheme/admin/images/woo_theme_options_icon.png"/> &nbsp; Google Ads </li>
							<!-- <li><img src="../wp-content/themes/Supertheme/admin/images/icon-portfolio.png"/> &nbsp; Portfolio Options </li> -->
							<li><span style="font-family:dashicons" class="dashicons-admin-generic"></span> &nbsp; Contact Us Options </li>
							<li><span style="font-family:dashicons" class="dashicons-admin-generic"></span> &nbsp; Newsletter Settings </li>
							<!-- <li><span style="font-family:dashicons" class="dashicons-admin-generic"></span> &nbsp; Import / Export </li> -->
				 </ul> 
			<!-- End Theme options for tabs General Settings -->
           <div class="resp-tabs-container">
			<div>
					<div class="wrap">
						
								<fieldset>
									<div style="background-color:  slategrey;"> <h2 style="margin-left: 10px; color:#FFF;"> <strong> Responsive Options</strong></h2> </div>
									<br/>
										<form name="favOptions" id="favOptions" action="" method="post">
													<select name="responsive_layout">
																	<option value="full_width"> Full Width Layout </option>
																	<option value="box_layout"> Box Layout </option>
																	<option value="fixed_layout"> Fixed Layout </option>
															</select>
													<p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">
																Check this box to use the responsive design . If left unchecked then the fixed layout is used.</p>
										</form>
								</fieldset> 
								<hr/>
								<fieldset>   <!-- This code for Favicon Option -->
								<?php  	$fav_options = unserialize(get_option('Fav_Details'));   	//print_r($fav_options); 	?>
										<div style="background-color:  slategrey;"> <h2 style="margin-left: 10px; color:#FFF;"> <strong> Favicon Options</strong></h2> </div> 
										<br/>
											<form name="favIconOptions" id="favIconOptions" action="" method="post">
												 <div>
												  <table>
												  <tr >
															<td><label for="fav_icon">Favicon </label> <br/>
															<input type="text" name="favicon_upload" id="favicon_upload" size="50" value="<?php echo $fav_options['favicon_upload']; ?>" required="required">	
															<?php if(isset($fav_options[0]) && $fav_options[0] != '' ) {?><p id="favicon_preview" > <img style="max-width:100%;" src="<?php echo esc_url($fav_options[0]);  ?>" /></p> <?php } ?> </td>	
															<td> <p  style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Favicon for your website (16px x 16px).</p></td>
												  </tr>
												  <tr>
															<td><label for="fav_icon">Apple iPhone Icon Upload</label><br/>
															<input type="text" name="iphone_icon_upload" id="iphone_icon_upload" size="50" value="<?php echo $fav_options['iphone_icon_upload']; ?>" required="required">
															<?php if(isset($fav_options[1] )&& $fav_options[1] != '' ) {?><p id="favicon_preview" > <img style="max-width:100%;" src="<?php echo esc_url($fav_options[1]);  ?>" /></p> <?php } ?> </td>
															<td> <p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Favicon for Apple iPhone (57px x 57px).</p> </td>
												  </tr>
												   <tr>
															<td><label for="fav_icon">Apple iPhone Retina Icon Upload</label> <br/>
															<input type="text" name="iphone_icon_retina_upload" id="iphone_icon_retina_upload" size="50" value="<?php echo $fav_options['retina_logo_width']; ?>">
															<?php if(isset($fav_options[2] )&& $fav_options[2] != '' ) {?><p id="favicon_preview" > <img style="max-width:100%;" src="<?php echo esc_url($fav_options[2]);  ?>" /></p> <?php }  ?></td>
															 <td><p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Favicon for Apple iPhone Retina Version (114px x 114px).</p> </td>
												  </tr>
												  <tr>
															<td><label for="fav_icon">Apple iPad Icon Upload</label> <br>
															<input type="text" name="ipad_icon_upload" id="ipad_icon_upload" size="50" value="<?php echo $fav_options['retina_logo_height']; ?>" > 
															<?php if(isset($fav_options[3] )&& $fav_options[3] != '' ) {?><p id="favicon_preview" > <img style="max-width:100%;" src="<?php echo esc_url($fav_options[3]);  ?>" /></p><?php } ?> </td>
															<td> <p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Favicon for Apple iPad (72px x 72px).</p></td>
												  </tr>
												    <td><label for="fav_icon">Apple iPad Retina Icon Upload</label> <br>
															<input type="text" name="ipad_icon_retina_upload" id="ipad_icon_retina_upload" size="50" value="<?php echo $fav_options['retina_logo_height']; ?>" > 
															<?php if(isset($fav_options[4] )&& $fav_options[4] != '' ) {?><p id="favicon_preview" > <img style="max-width:100%;" src="<?php echo esc_url($fav_options[4]);  ?>" /></p> <?php }  ?></td>
															<td> <p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Favicon for Apple iPad Retina Version (144px x 144px). </p></td>
												  </tr>
												  <tr>
												  <td  class="submit"><input type="submit"  name="fav_icon_submit" id="fav_icon_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
												  <td>&nbsp;</td>
												  </tr>
											  </table>
										</div>
									</form>
								</fieldset>


								
								<!-- This code for Google Map Contact Option -->
								<fieldset>  
								<?php  	 $gmap_options = unserialize(get_option('Google_map_address'));    ?>

										<div style="background-color:  slategrey;"> <h2 style="margin-left: 10px; color:#FFF;"> <strong> Google Map and  Contact Options</strong></h2> </div> 
										<br/>
											<form name="google_contact_frm" id="google_contact_frm" action="" method="post">
													<table>
													     <tr>
																 <td><label for="fav_icon">Google Map Address</label> <br></td>
																 <td><input type="text" name="gmap_address" size="50" id="gmap_address" required="required" <?php if(isset($gmap_options['gmap_address'] )&&  $gmap_options['gmap_address'] != '') { ?> value="<?php  echo $gmap_options['gmap_address']  ?>"	<?php  } ?>  ></td>
														 </tr>
														 <tr>
																  <td  class="submit"><input type="submit"  name="google_contact_submit" id="google_contact_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
																  <td>&nbsp;</td>
														  </tr>
											        </table>
											</form>
									</fieldset>

									<!--	This code is for Twitter options  -->
									<fieldset>  
										<?php  	 $twitter_options = unserialize(get_option('twitter_details'));    ?>
												<div style="background-color:  slategrey;"> <h2 style="margin-left: 10px; color:#FFF;"> <strong>Twitter Options</strong></h2> </div> 
												<br/>
													 <form method="post" action="">
																	<?php //wp_nonce_field('update-options') ?>
													<table>
															<tr>
																		<strong><label for="fav_icon">Twitter plugin activate :</label></strong> <br>
																		<td> <input type="checkbox" name="twitter_plugin_detail" id="twitter_plugin_detail" <?php		
																			if($twitter_options[0]!=""){ ?>checked="checked"<?php } ?>> Here we can activate twitter plugin and get latest tweets using widget. 
																			</td>
															</tr>
															<tr>
																 <td  class="submit"><input type="submit"  name="twitter_submit" id="twitter_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
															</tr>		
														</table>
														</form>

									</fieldset> 
									<!--  This is for the login options  -->
									<fieldset style="">
						
									<div style="background-color:  slategrey;"> 
											<h2 style="margin-left: 10px; color:#FFF;"> <strong>Login Options</strong></h2>
									</div> 
									 <br/>
										<?php $log_options=unserialize(get_option('login_option')) ;  				?>
									 <form name="login_frm" id="login_frm" action="" method="post">
											<p> Here we can select the Login options on frontend : </p>
											   <table>
												   <tbody>
														<tr>
																	<td>   <label><strong> First Options: </strong></label>  </td>
																				<td><input type="radio" name= "login_f_options" value="Simple" <?php if($log_options == "Simple") {?> checked="checked"  <?php } ?>> </td>
																				<td><span> This is for the display the slide box.</span></td>
														 </tr>
														 <tr>
																	<td>  <label><strong> Second Options:</strong></label> </td>
																				<td> <input type="radio" name= "login_f_options" value="popup" 
																				<?php if($log_options == "popup") {?> checked="checked" <?php } ?>> </td>
																			<td> 	<span> This is for the display the slide options from top.</span></td>
															</tr>
															<tr>
																<td> <label> <strong>Third Options:</strong> </label> </td>
																			<td><input type="radio" name= "login_f_options" value="Popup Slide" <?php if($log_options == "Popup Slide") {?> checked="checked" <?php } ?>> </td>
																             <td><span> This is for the display the popup on frontend.</span></td>
															</tr>
														</tbody>
													</table>
													<input type="submit" name="save_login" value="save" class="button-primary">
											</form>
									</fieldset>

					</div> <!-- wrap div -->
          </div>	<!-- outer div -->
					
			<div>  	<!-- header Section Start -->  
			
			<div style="background-color:  slategrey; height: 25px;"> <h2 style="padding: 3px; color:#FFF;"> <strong> Search Options</strong></h2> </div> 
						<fieldset>
					
								<form id="frmsearch" id="frmsearch" action="" method="post">
											 <div>
											  <table>
											  <tr>
												  <td>&nbsp;</td>
												  <td><input type="checkbox" name="searchChk" id="searchChk" <?php if($options[0]!=""){ ?>checked="checked"<?php } ?> ></td>
													<td><p style="float: right; font-size: 12px; color: rgb(169, 169, 169);">Check the box to display the search text box in top header.</p> </td>
											  </tr>
											   <td>&nbsp;</td>
											  <td class="submit"><input type="submit"  name="search_submit" id="search_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
											  </tr>
										  </table>
											</div>
							</form> 
						</fieldset>
					

							<fieldset>
							<?php           $logo_options = unserialize(get_option('Logo_Details'));      ?>
								 <div style="background-color:  slategrey; height: 25px; "> <h2 style="padding: 3px; color:#FFF;"> <strong> Logo Options </strong></h2> </div>
										<br/>
											<form name="logoOptions" id="logoOptions" action="" method="post">
												 <div>
												  <table>
												  <tr >
												   <td><label for="fav_icon">Logo </label> <br/>
															<input type="text" name="site_logo" id="site_logo" size="50" value="<?php echo $logo_options[0]; ?>">
															<?php if(isset($logo_options[0] )&& $logo_options[0] != '' ) {?><p id="logo_preview" > <img style="max-width:100%;" src="<?php echo esc_url($logo_options[0]);  ?>" /></p> <?php }  ?>
															</td>
															<td> <p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Select an image file for your logo.</p></td>
												  </tr>
												  <tr>
												  <td><label for="fav_icon">Logo (Retina Version @2x) </label><br/>
															<input type="text" name="logo_retina_upload" id="logo_retina_upload" size="50" value="<?php echo $logo_options[1]; ?>">
															<?php if(isset($logo_options[1] )&& $logo_options[1] != '' ) {?><p id="logo_preview" > <img style="max-width:100%;" src="<?php echo esc_url($logo_options[1]);  ?>" /></p> <?php }  ?>
															</td>
															<td> <p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Select an image file for the retina version of the logo. It should be exactly 2x the size of main logo.</p> </td>
												  </tr>
												   <tr>
												  <td><label for="fav_icon">Standard Logo Width for Retina Logo</label> <br/>
															<input type="text" name="retina_logo_width" id="retina_logo_width" size="50" value="<?php echo $logo_options[2]; ?>">
															<?php if(isset($logo_options[2] )&& $logo_options[2] != '' ) {?><p id="logo_preview" > <img style="max-width:100%;" src="<?php echo esc_url($logo_options[2]);  ?>" /></p> <?php }  ?>
															</td>
															<td><p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">If retina logo is uploaded, enter the standard logo (1x) version width, do not enter the retina logo width.</p> </td>

												  </tr>
												  <tr>
												  <td><label for="fav_icon">Standard Logo Height for Retina Logo</label> <br>
															<input type="text" name="retina_logo_height" id="retina_logo_height" size="50" value="<?php echo $logo_options[3]; ?>"> 
															<?php if(isset($logo_options[3])&& $logo_options[3] != '' ) {?><p id="logo_preview" > <img style="max-width:100%;" src="<?php echo esc_url($logo_options[3]);  ?>" /></p> <?php }  ?>
															</td>
															<td> <p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">If retina logo is uploaded, enter the standard logo (1x) version height, do not enter the retina logo height. </p></td>
												  </tr>
												  <tr>
												  <td  class="submit"><input type="submit"  name="logo_submit" id="logo_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
												  <td>&nbsp;</td>
												  </tr>
											  </table>
												</div>
												</form>

								</fieldset>
								<!-- This is for Home page Slider plugin activation -->
								<fieldset>
												<?php  	 $Simple_slider_options = unserialize(get_option('simple_slider_details'));  ?>
													<div style="background-color:  slategrey;"> <h2 style="margin-left: 10px; color:#FFF;"> <strong>Home Slider Options</strong></h2> </div> 
													<br/>
														 <form method="post" action="">
															<table>
																	<tr>
																			<strong><label for="simple-slider">Simple slider plugin activate :</label></strong> <br>
																			<td> <input type="checkbox" name="ss_plugin_detail" id="ss_plugin_detail" <?php		
																				if($Simple_slider_options[0]!=""){ ?>checked="checked"<?php } ?>> Here we can activate Simple slider plugin. 
																				</td>
																	</tr>
																	<tr>
																			<td  class="submit"><input type="submit"  name="simpleslider_submit" id="simpleslider_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
																	</tr>		
																</table>
																</form>			
			
								</fieldset>

								<!-- This is for Home page Slider plugin activation -->
								<fieldset>
												<?php  	 $cyclone_slider_options = unserialize(get_option('cl_slider_details'));  ?>
													<div style="background-color:  slategrey;"> <h2 style="margin-left: 10px; color:#FFF;"> <strong>Home Page Cyclone Slider</strong></h2> </div> 
													<br/>
														 <form method="post" action="">
															<table>
																	<tr>
																			<strong><label for="cyclone-slider">Cyclone slider plugin activate :</label></strong> <br>
																			<td> <input type="checkbox" name="cs_plugin_detail" id="cs_plugin_detail" <?php		
																				if($cyclone_slider_options[0]!=""){ ?>checked="checked"<?php } ?>> Here we can activate cyclone slider plugin. 
																				</td>
																	</tr>
																	<tr>
																			<td  class="submit"><input type="submit"  name="cyclone_slider_submit" id="cyclone_slider_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
																	</tr>		
																</table>
																</form>			
			
								</fieldset>


			</div>		<!--Header section End -->	

			<div>	<!--Footer section Start -->	
						
						<?php 	 $options=unserialize(get_option('Footer_Text')) ;  		?>
									<div style="background-color:  slategrey; height: 25px; "> <h2 style="padding: 3px; color:#FFF;"> <strong> Footer Options </strong></h2> </div>
											<form id="frmfooter" id="frmfooter" action="" method="post">
											 <div>
											  <table>
											  <tr>
												  <td>&nbsp;</td>
												  <td><input type="checkbox" name="footerchk" id="footerchk" <?php if($options[0]!=""){ ?>checked="checked"<?php } ?> ></td>
													<td><p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Check the box to display the copyright bar.</p> </td>
											  </tr>
											  <tr>
												  <td>Footer Text</td>
												  <td><textarea name="footrtext" id="footrtext" rows="3" cols="30"  ><?php echo $options[1]; ?></textarea></td>
												  <td><p style="width: 76%; float: right; font-size: 12px; color: rgb(169, 169, 169);">Enter the text that displays in the copyright bar. HTML markup can be used.</p></td>
											  </tr>
											  <tr>
											  <td>&nbsp;</td>
											  <td class="submit"><input type="submit"  name="footer_submit" id="footer_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
											  </tr>
										  </table>
											</div>
							</form>
							<fieldset>  
												<?php  	 $flicker_options = unserialize(get_option('flicker_details'));  ?>
														<div style="background-color:  slategrey;"> <h2 style="margin-left: 10px; color:#FFF;"> <strong>Flicker Options</strong></h2> </div> 
														<br/>
															 <form method="post" action="">
																			<?php //wp_nonce_field('update-options') ?>
															<table>
																	<tr>
																				<strong><label for="flicker">Flicker plugin activate :</label></strong> <br>
																				<td> <input type="checkbox" name="flicker_plugin_detail" id="flicker_plugin_detail" <?php		
																					if($flicker_options[0]!=""){ ?>checked="checked"<?php } ?>> Here we can activate flicker plugin and get latest tweets using widget. 
																					</td>
																	</tr>
																	<tr>
																		 <td  class="submit"><input type="submit"  name="flicker_submit" id="flicker_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
																	</tr>		
																</table>
																</form>

								</fieldset> 					
			</div><!--Footer section End -->	

			<div> <!-- Social media start -->
			
				    	<?php	   $social_options=unserialize(get_option('Social_Data')) ;    ?>
							<div style="background-color:  slategrey; height: 25px; "> 
											<h2 style="padding: 3px; color:#FFF;"> <strong> Social Media Options</strong></h2> 
								</div>
							  <form id="frmsocial" name="frmsocial" action="" method="post">
							 <div>
							  <table>
							  <tr>
									   <td><label for="facebook">Facebook  </label></td>
									   <td><input type="text" name="fblink" id="fblink" size="50" value="<?php echo $social_options[0]; ?>"> </td>
									   <td><p style="margin-left:10px;float: right; font-size: 12px; color: rgb(169, 169, 169);"> Insert your custom link to show the Facebook icon. Leave blank to hide icon</p> </td>
							  </tr>

							  <tr>
									  <td><label for="facebook">Twitter</label> </td>
									 <td><input type="text" name="twlink" id="twlink" size="50"  value="<?php echo $social_options[1]; ?>"></td>
									 <td> <p style="margin-left:10px; float: right; font-size: 12px; color: rgb(169, 169, 169);"> Insert your custom link to show the Twitter icon. Leave blank to hide icon</p></td>
							  </tr>
							   
							   <tr>
									  <td><label for="facebook">LinkedIn </label></td>
									  <td> <input type="text" name="LinkedInlink" id="LinkedInlink" size="50"  value="<?php echo $social_options[2]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the LinkedIn  icon. Leave blank to hide icon</p></td>
							  </tr>
							  <tr>
									  <td><label for="facebook">Flickr </label></td>
									  <td> <input type="text" name="flickerlink" id="flickerlink" size="50"  value="<?php echo $social_options[3]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the Flickr  icon. Leave blank to hide icon</p></td>
							  </tr>
							  <tr>
									  <td><label for="facebook">RSS </label></td>
									  <td> <input type="text" name="rsslink" id="rsslink" size="50"  value="<?php echo $social_options[4]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the RSS  icon. Leave blank to hide icon</p></td>
							  </tr>
							  <tr>
									  <td><label for="facebook">Vimeo </label></td>
									  <td> <input type="text" name="vimeolink" id="vimeolink" size="50"  value="<?php echo $social_options[5]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the Vimeo  icon. Leave blank to hide icon</p></td>
							  </tr>
							  <tr>
									  <td><label for="facebook">Youtube </label></td>
									  <td> <input type="text" name="youtubelink" id="youtubelink" size="50"  value="<?php echo $social_options[6]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the Youtube  icon. Leave blank to hide icon</p></td>
							  </tr>
							  <tr>
									  <td><label for="facebook">Tumblr </label></td>
									  <td> <input type="text" name="tumblrlink" id="tumblrlink" size="50"  value="<?php echo $social_options[7]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the Tumblr  icon. Leave blank to hide icon</p></td>
							  </tr>
								<tr>
									  <td><label for="facebook">Dribbble </label></td>
									  <td> <input type="text" name="dribbblelink" id="dribbblelink" size="50"  value="<?php echo $social_options[8]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the Dribbble  icon. Leave blank to hide icon</p></td>
							  </tr>
							  <tr>
									  <td><label for="facebook">Blogger </label></td>
									  <td> <input type="text" name="bloggerlink" id="bloggerlink" size="50"  value="<?php echo $social_options[9]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the Blogger  icon. Leave blank to hide icon</p></td>
							  </tr>
								<tr>
									  <td><label for="facebook">Yahoo </label></td>
									  <td> <input type="text" name="yahoolink" id="yahoolink" size="50"  value="<?php echo $social_options[10]; ?>"></td>
									  <td> <p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;">Insert your custom link to show the Yahoo icon. Leave blank to hide icon</p></td>
							  </tr>
							   
							  <tr>
							  <td  class="submit"><input type="submit"  name="socialsubmit" id="socialsubmit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
							  <td>&nbsp;</td>
							  </tr>
						  </table>
							</div>
					</form>
								
			</div> <!-- End code social media div -->
			
			<!-- <div> --> <!-- This div for - Woocommerce plugins -->
			
			<!-- <fieldset>
							<?php 	$plugin_path = 'woocommerce/woocommerce.php';   // Get records from database and display here
							$woocom_result = unserialize(get_option('woocom_details')) ; 
						//echo $woocom_result[0];
							?>

					<div style="background-color:  slategrey; height: 25px;"> <h2 style="padding: 3px; color:#FFF;"> <strong> Woocommerce  Options</strong></h2> </div> 
					<br/>
					<form name="frmwoo_com" id="frmwoo_com" action="" method="post"	> 
						<table>
								<tr>
									<td> <input type="checkbox" name="woocom_chk" id="woocom_chk" <?php if($woocom_result[0]!=""){ ?>checked="checked"<?php } ?> > </td>
									<td><p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;"> When you check this checkbox WooCommerce plugin will activate.
										with the all functionality related to woocommerce.
										</p></td>
								</tr>
								 <tr>
									  <td  class="submit"><input type="submit"  name="woocom_submit" id="woocom_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
									   <td>&nbsp;</td>
								 </tr>
						  </table>
					</form>
			</fieldset> -->
			<!-- </div>  --><!-- End WooCommerce plugins -->
			
			<div id = "google_ad_div"> <!-- Start  this for google ads -->
			
						<p>This is in google ads</p>
								<fieldset>
								<?php 	$google_ads_result = unserialize(get_option('google_ads_details')) ;    ?>
									<div style="background-color:  slategrey; height: 25px;"> <h2 style="padding: 3px; color:#FFF;"> <strong> Google Ads  Options</strong></h2> </div> 
									<br/>
									<form name="frmwoo_com" id="frmwoo_com" action="" method="post"	> 
										<table>
												<tr>
													<td> <input type="checkbox" name="ads_chk" id="ads_chk" <?php if($google_ads_result[0]!=""){ ?>checked="checked"<?php } ?> > </td>
													<td><p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;"> When you check this checkbox google ads will display.
														</p></td>
												</tr>
												<tr>
													<td><label>No of ads to display</label></td>
													<td> <input type="text" name="no_of_ads" id="no_of_ads" value = "<?php echo $google_ads_result[1];?>"> </td>
												</tr>
											    <tr>
													  <td  class="submit"><input type="submit"  name="google_ads_submit" id="google_ads_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
													   <td>&nbsp;</td>
												 </tr>
										  </table>
									</form>
							</fieldset>
			</div>  <!--  End this for google ads -->
			<!--Portfolio div starts  -->
			<!-- <div id = "portfolio_div" >
				<fieldset>
					<?php 	$portfolio_result = unserialize(get_option('portfolio_details')) ;    ?>
					<div style="background-color:  slategrey; height: 25px;"> <h2 style="padding: 3px; color:#FFF;"> <strong> Portfolio Options</strong></h2> </div> 
					<br/>
						<form name="frmportfolio" id="frmportfolio" action="" method="post"	> 
							<table>			
								<tr>
									<td><label>Grid Pagination Type</label></td>
									<td> 
										<select id="grid_pagination_type" name="grid_pagination_type">
												<option value="" >Select</option>
												<option value="Pagination" id="pagination" <?php if($portfolio_result['grid_pagination_type'] == 'Pagination') { echo 'selected = "selected"';}?>>Pagination</option>
												<option value="Infinite Scroll" id="infinite" <?php if($portfolio_result['grid_pagination_type'] == 'Infinite Scroll') { echo 'selected = "selected"'; }?>>Infinite Scroll</option>
										</select>			
									</td>
									<td>
										<p style="float: left; font-size: 12px; color: rgb(169, 169, 169); margin-left:36px;"> Select the pagination type for Portfolio Grid layouts.</p>
									</td>
								</tr>
								
								<tr id="pag" style="display:none;">
									<td><label>Number of Portfolio Items Per Page</label></td>
														<td> <input type="text" name="itemsPerPage" id="itemsPerPage" value = "<?php echo											$portfolio_result['itemsPerPage'];?>"> </td>
									<td>
										<p style="float: left; font-size: 12px; color: rgb(169, 169, 169); margin-left:36px;"> Insert the number of posts to display per page.</p>
									</td>
								</tr>		
								<tr>
									<td  class="submit">
										<input type="submit"  name="portfolio_submit" id="portfolio_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" />
									</td>
									<td>&nbsp;</td>
								</tr>
							</table>
						</form>
				</fieldset>
			</div> -->
				<!-- Portfolio div ends -->
	              <!-- Contact Form options Start -->
                        <div>
                                <fieldset>
									<?php 
											   $plugin_path = 'contact-form-7/wp-contact-form-7.php';
											   $contactform_result = unserialize(get_option('contactform_details')) ; 
												//echo($contactform_result[0]);
											     ?>
									<div style="background-color:  slategrey; height: 25px;"> <h2 style="padding: 3px; color:#FFF;"> <strong> Contact Form Options</strong></h2> </div> 
									<br/>
									<form name="frmcontact_form" id="frmcontact_form" action="" method="post" >	
										<table>
												<tr>
													<td> <input type="checkbox" name="contactform_chk" id="contactform_chk" <?php if($contactform_result[0]!=""){ ?>checked="checked"<?php } ?> > </td>
													<td><p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;"> When you check this checkbox Contact Form 7 plugin will activate.
														
														</p></td>
												</tr>
												 <tr>
													  <td  class="submit"><input type="submit"  name="contactform_submit" id="contactform_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
													   <td>&nbsp;</td>
												 </tr>
										  </table>
									</form>
							</fieldset>
                        </div>
                        <!-- Contact Form options End -->

						<!--  Start Newsletter plugin settings  -->
							<div>
                                <fieldset>
									<?php 
											   $plugin_path = 'simple-subscribe/SimpleSubsribe.php';
											   $newsletter_result = unserialize(get_option('newsletter_response')) ; 
											   //echo $newsletter_result[0]; ?>

									<div style="background-color:  slategrey; height: 25px;"> <h2 style="padding: 3px; color:#FFF;"> <strong> Newsletter SubscOptions</strong></h2> </div> 
									<br/>
									<form name="frmnews_form" id="frmnews_form" action="" method="post" >	
										<table>
												<tr>
													<td> <input type="checkbox" name="newsform_chk" id="newsform_chk" <?php if($newsletter_result[0]!=""){ ?>checked="checked"<?php } ?> > </td>
													<td><p style="float: right; font-size: 12px; color: rgb(169, 169, 169); margin-left:10px;"> When you check this checkbox Newsletter subscription plugin will activate and we can use these functionality.</p></td>
												</tr>
												 <tr>
													  <td  class="submit">
																	<input type="submit"  name="newslett_submit" id="newslett_submit" class="button-primary" value="<?php _e( 'Save Options', 'supertheme' ); ?>" /></td>
													   <td>&nbsp;</td>
												 </tr>
										  </table>
									</form>
							</fieldset>
                        </div>	
						<!--  End Newsletter plugin settings   -->
						
						<!-- Import and Export options Start -->
                        <div style="display:none;">   
                          <fieldset>
									<?php  // Here is PHP code		    ?>
									<div style="background-color:  slategrey; height: 25px;"> <h2 style="padding: 3px; color:#FFF;"> <strong>Backup Options</strong></h2> </div> 
									<br/>
									<form name="frmimpexp_form" id="frmimpexp_form" action="" method="post" >	
										<table>
												<tr>
													<td> </td>
															<td>
																  <textarea name="export_detasils" rows="8" cols="60"><?php echo "WPML :".get_option('wpml_details', true);echo "Meta Slider : ".get_option('metasl_details', true);echo "Logo Details : ".get_option('Logo_Details', true);echo "Social Details : ".get_option('Social_Data', true);	echo "Twitter Details : ".get_option('twitter_details', true);echo "WooCommerce Details : ".get_option('woocom_details', true);	echo "Contact form 7 details : ".get_option('contactform_details', true);	echo "Google Map Address Details : ".get_option('Google_map_address', true);		 ?>
																</textarea>
													        </td>
												</tr>
												 <tr>
													  <td  class="submit">
													  
													  <a href="<?php echo home_url(); ?>/download.php?filename=Theme_export.txt" class="links">
													<input type="submit"  name="backup_options" id="backup_options" class="button-primary" value="<?php _e( 'Backup Options', 'supertheme' ); ?>" /></a>

													<a href="download.php?filename=test.txt" > download Here </a>
													  </td>
													   <td>&nbsp;</td>
													   <td  class="submit"><input type="submit"  name="reset_options" id="reset_options" class="button-primary" value="<?php _e( 'Reset Options', 'supertheme' ); ?>" /></td>
													   <td>&nbsp;</td>
												 </tr>
												
												
										  </table>
									</form>
							</fieldset>
                        </div>
                        <!-- Import and Export options End -->
        </div>	 
 </div> 
<!-- End code -->
 <br />
<div style="height: 30px; clear: both"></div>
</body>
</html>
<!-- ************************************************** This is Javascript ********************************************************* -->
<script>
		/* This is for Theme options - tabs - header / footer / social / etc*/
          jQuery('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
</script>
