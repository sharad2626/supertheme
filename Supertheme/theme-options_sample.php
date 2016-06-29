<?php
ob_start();


add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
		register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'supertheme' ), __( 'Theme Options', 'supertheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
	add_theme_page( __( 'Sidebar', 'supertheme' ), __( 'Sidebar', 'supertheme' ), 'edit_theme_options', 'sidebar', 'theme_options_do_page' );
}

								/**
								 * Create arrays for our select and radio options
								 */
								$select_options = array(
									'0' => array(
										'value' =>	'0',
										'label' => __( 'Zero', 'supertheme' )
									),
									'1' => array(
										'value' =>	'1',
										'label' => __( 'One', 'supertheme' )
									),
									'2' => array(
										'value' => '2',
										'label' => __( 'Two', 'supertheme' )
									),
									'3' => array(
										'value' => '3',
										'label' => __( 'Three', 'supertheme' )
									),
									'4' => array(
										'value' => '4',
										'label' => __( 'Four', 'supertheme' )
									),
									'5' => array(
										'value' => '3',
										'label' => __( 'Five', 'supertheme' )
									)
								);

								$radio_options = array(
									'yes' => array(
										'value' => 'yes',
										'label' => __( 'Yes', 'supertheme' )
									),
									'no' => array(
										'value' => 'no',
										'label' => __( 'No', 'supertheme' )
									),
									'maybe' => array(
										'value' => 'maybe',
										'label' => __( 'Maybe', 'supertheme' )
									)
								);

/**
 * Create the options page
 */
	function theme_options_do_page() 
	{
		require_once ( get_stylesheet_directory() . '/themes.php' );
		global $select_options_; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; 
	}
?>
 <?php

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) 
{
	
					global $select_options, $radio_options;

						// Our checkbox value is either 0 or 1
						if ( ! isset( $input['option1'] ) )
							$input['option1'] = null;
						
						$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

						// Say our text option must be safe text with no HTML tags
						$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

						// Our select option must actually be in our array of select options
						if ( ! array_key_exists( $input['selectinput'], $select_options ) )
							$input['selectinput'] = null;

						// Our radio option must actually be in our array of radio options
						if ( ! isset( $input['radioinput'] ) )
							$input['radioinput'] = null;
						if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
							$input['radioinput'] = null;

						// Say our textarea option must be safe text with the allowed tags for posts
						$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );



						return $input;
}
// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/