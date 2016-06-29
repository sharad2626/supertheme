<?php 

// Add the Events Meta Boxes
function add_events_metaboxes() {
	add_meta_box('wpt_events_location', 'Event Location', 'wpt_events_location', 'testimonial', 'normal', 'high');
}
// The Event Location Metabox
function wpt_events_location() {
	global $post;
	$location = get_post_meta($post->ID, 'url', true);
	// Echo out the field
	echo '<input type="text" name="url" value="' . $location  . '" class="widefat" />';
}
// Save the Metabox Data
function wpt_save_events_meta($post_id, $post) {
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}
	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;
	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	$events_meta = $_POST['url'];

	// Add values of $events_meta as custom fields
	
		$value = $events_meta; // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $events_meta, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, 'url', $events_meta);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, 'url', $events_meta);
		}
}
add_action('save_post', 'wpt_save_events_meta', 1, 2); // save the custom fields


/*Add Meta Box for the testimonials website field */

add_action( 'add_meta_boxes', 'add_website_metaboxes' );

// Add the Website Meta Boxes

function add_website_metaboxes() {
	add_meta_box('wpt_website_location', 'Website URL', 'wpt_website_location', 'testimonial', 'normal', 'default');
}


// The Event Location Metabox

function wpt_website_location() {
	global $post;

	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	// Get the location data if its already been entered
	$location = get_post_meta($post->ID, '_website', true);

	// Echo out the field
	echo '<input type="text" name="_website" value="' . $location  . '" size="90%" />';

}


// Save the Metabox Data

function wpt_save_website_meta($post_id, $post) {

	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	$events_meta['_website'] = $_POST['_website'];

	// Add values of $events_meta as custom fields

	foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}

add_action('save_post', 'wpt_save_website_meta', 1, 2); // save the custom fields


//////*********************************************************************************************************************/////////////////////////////////

/*Add Meta Box for the team fields */

add_action( 'add_meta_boxes', 'add_team_metaboxes' );

// Add the Website Meta Boxes

function add_team_metaboxes() {
	add_meta_box('wpt_team_location', 'Social Media Links', 'wpt_team_location', 'acme_ourteam', 'normal', 'default');
}

// The Event Location Metabox

function wpt_team_location() {
	global $post;

	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	// Get the location data if its already been entered
	$designation = get_post_meta($post->ID, '_designation', true);
	$fburl = get_post_meta($post->ID, '_fburl', true);
	$twurl = get_post_meta($post->ID, '_twurl', true);
	$gurl = get_post_meta($post->ID, '_gurl', true);
	$lnurl = get_post_meta($post->ID, '_lnurl', true);

	// Echo out the field
	echo '<label>Employee Designation:</label>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="_designation" value="' . $designation  . '" size="70%" /> <br/><br/>';	
	echo "<br/><br/>";	
	echo '<label> Facebook URL:</label> <input type="text" name="_fburl" value="' . $fburl  . '" size="70%" /> <br/><br/>';
	echo '<label> Twitter URL:</label>  &nbsp;&nbsp;&nbsp; <input type="text" name="_twurl" value="' . $twurl  . '" size="70%" /> <br/><br/>' ;
	echo '<label> Google URL:</label>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="_gurl" value="' . $gurl  . '" size="70%" /> <br/><br/>';
	echo '<label> Linked In URL:</label> &nbsp;&nbsp;&nbsp;<input type="text" name="_lnurl" value="' . $lnurl  . '" size="70%" /> <br/><br/>';

}


// Save the Metabox Data

function wpt_save_team_meta($post_id, $post) {

	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	$events_meta['_fburl'] = $_POST['_fburl'];
	$events_meta['_twurl'] = $_POST['_twurl'];
	$events_meta['_gurl'] = $_POST['_gurl'];
	$events_meta['_lnurl'] = $_POST['_lnurl'];
	$events_meta['_designation'] = $_POST['_designation'];
	//print_r($events_meta);
	// Add values of $events_meta as custom fields

	foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
		
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}

add_action('save_post', 'wpt_save_team_meta', 1, 2); // save the custom fields