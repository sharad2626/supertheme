<?php

//error_reporting('0');

/*function supertheme_get_default_options() {
    $options = array(
        'logo' => '',
		'fav_logo' => ''

    );
    return $options;
}

function supertheme_options_init() {
    $supertheme_options = get_option( 'theme_supertheme_options' );
 
    // Are our options saved in the DB?
    if ( false === $supertheme_options ) {
        // If not, we'll save our default options
        $supertheme_options = supertheme_get_default_options();
        add_option( 'theme_supertheme_options', $supertheme_options );
    }
 
    // In other case we don't need to update the DB
}
 
// Initialize Theme options
add_action( 'after_setup_theme', 'supertheme_options_init' );


// Add "supertheme Options" link to the "Appearance" menu
function supertheme_menu_options() {
    // add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function);
    add_theme_page('supertheme Options', 'Header Logo Options', 'edit_theme_options', 'supertheme-settings', 'supertheme_admin_options_page');
}
// Load the Admin Options page
add_action('admin_menu', 'supertheme_menu_options');
 
function supertheme_admin_options_page() {
    ?>
        <!-- 'wrap','submit','icon32','button-primary' and 'button-secondary' are classes
        for a good WP Admin Panel viewing and are predefined by WP CSS -->
 
        <div class="wrap">
 
            <div id="icon-themes" class="icon32"><br /></div>
 
            <h2><?php _e( 'supertheme Options', 'Supertheme' ); ?></h2>
 
            <!-- If we have any error by submiting the form, they will appear here -->
            <?php settings_errors( 'supertheme-settings-errors' ); ?>
 
            <form id="form-supertheme-options" action="options.php" method="post" enctype="multipart/form-data">
 
                <?php
                    settings_fields('theme_supertheme_options');
                    do_settings_sections('supertheme');
                ?>
				
 
                <p class="submit">
                    <input name="theme_supertheme_options[submit]" id="submit_options_form" type="submit" class="button-primary" value="<?php esc_attr_e('Save Settings', 'Supertheme'); ?>" />
                    <input name="theme_supertheme_options[reset]" type="submit" class="button-secondary" value="<?php esc_attr_e('Reset Defaults', 'supertheme'); ?>" />
                </p>
 
            </form>
 
        </div>
    <?php
}


		function supertheme_options_settings_init() {
    register_setting( 'theme_supertheme_options', 'theme_supertheme_options', 'supertheme_options_validate' );
 
    // Add a form section for the Logo
    add_settings_section('supertheme_settings_header', __( 'Logo Options', 'supertheme' ), 'supertheme_settings_header_text', 'supertheme');
 
    // Add Logo uploader
    add_settings_field('supertheme_setting_logo',  __( 'Logo', 'supertheme' ), 'supertheme_setting_logo', 'supertheme', 'supertheme_settings_header');
	add_settings_field('supertheme_setting_logo_preview',  __( 'Logo Preview', 'supertheme' ), 'supertheme_setting_logo_preview', 'supertheme', 'supertheme_settings_header');
}
add_action( 'admin_init', 'supertheme_options_settings_init' );
 
function supertheme_settings_header_text() {
    ?>
        <p><?php _e( 'Manage Logo Options for supertheme Theme.', 'supertheme' ); ?></p>
    <?php
}
 
function supertheme_setting_logo() {
    $supertheme_options = get_option( 'theme_supertheme_options' );
    ?>
        <input type="text" id="logo_url" name="theme_supertheme_options[logo]" value="<?php echo esc_url( $supertheme_options['logo'] ); ?>" />
        <input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload Logo', 'Supertheme' ); ?>" />
        <span class="description"><?php _e('Upload an Site Logo URL.', 'Supertheme' ); ?></span>
    <?php
}


	function supertheme_options_validate( $input ) {
    $default_options = supertheme_get_default_options();
    $valid_input = $default_options;
 
    $submit = ! empty($input['submit']) ? true : false;
    $reset = ! empty($input['reset']) ? true : false;
 
    if ( $submit )
        $valid_input['logo'] = $input['logo'];
    elseif ( $reset )
        $valid_input['logo'] = $default_options['logo'];
 
    return $valid_input;
}



function supertheme_setting_logo_preview() {
    $supertheme_options = get_option( 'theme_supertheme_options' );  ?>
    <div id="upload_logo_preview" style="min-height: 100px;">
        <img style="max-width:100%;" src="<?php echo esc_url( $supertheme_options['logo'] ); ?>" />
    </div>
    <?php
}

function supertheme_options_enqueue_scripts() {
   // wp_register_script( 'supertheme-upload', get_template_directory_uri() .'/supertheme-options/js/supertheme-upload.js', array('jquery','media-upload','thickbox') );
 
    if ( 'appearance_page_supertheme-settings' == get_current_screen() -> id ) {
        wp_enqueue_script('jquery');
 
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
 
        wp_enqueue_script('media-upload');
        wp_enqueue_script('supertheme-upload');
 
    }
 
}
add_action('admin_enqueue_scripts', 'supertheme_options_enqueue_scripts');
*/

?>
<script>
/*
jQuery(document).ready(function() {
    jQuery('#upload_logo_button').click(function() {
        tb_show('Upload a logo', 'media-upload.php?referer=supertheme-settings&type=image&TB_iframe=true&post_id=0', false);
        return false;
    });
});

window.send_to_editor = function(html) {
    var image_url = $('img',html).attr('src');
    jQueryok('#logo_url').val(image_url);
    tb_remove();
}*/
</script>


