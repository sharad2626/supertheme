<?php
/**
 * Super Theme functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Super Theme
 * @since Super Theme 1.0
 */

/*
 * Set up the content width value based on the theme's design.
 *
 * @see supertheme_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 604;

/**
 * Add support for a custom header image.
 */

//echo get_template_directory();
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/framework/plugin/easy-testimonials/easy-testimonials.php' ;
require get_template_directory(). '/custom-post-type.php';
require get_template_directory(). '/framework/custom_function.php';
/*require get_template_directory(). '/framework/plugin/contact-form-7/wp-contact-form-7.php';*/
require get_template_directory(). '/custom-post-widget.php';
//require get_template_directory(). '/framework/fron-end/options.php';
/**
 * Super Theme only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6-alpha', '<' ) )
	require get_template_directory() . '/inc/back-compat.php';


/**
 * Super Theme setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Super Theme supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Super Theme 1.0
 */
function supertheme_setup() {
	/*
	 * Makes Super Theme available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Super Theme, use a find and
	 * replace to change 'supertheme' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'supertheme', get_template_directory() . '/languages' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'fonts/genericons.css', supertheme_fonts_url() ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'supertheme' ) );
	register_nav_menu( 'secondary', __( 'Secondary Navigation Menu', 'supertheme' ) );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'supertheme_setup' );

/**
 * Return the Google font stylesheet URL, if available.
 *
 * The use of Source Sans Pro and Bitter by default is localized. For languages
 * that use characters not supported by the font, the font can be disabled.
 *
 * @since Super Theme 1.0
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function supertheme_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'supertheme' );

	/* Translators: If there are characters in your language that are not
	 * supported by Bitter, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$bitter = _x( 'on', 'Bitter font: on or off', 'supertheme' );

	if ( 'off' !== $source_sans_pro || 'off' !== $bitter ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

		if ( 'off' !== $bitter )
			$font_families[] = 'Bitter:400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Super Theme 1.0
 */
function supertheme_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Adds Masonry to handle vertical alignment of footer widgets.
	if ( is_active_sidebar( 'sidebar-1' ) )
		wp_enqueue_script( 'jquery-masonry' );

	// Loads JavaScript file with functionality specific to Super Theme.
	wp_enqueue_script( 'supertheme-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2014-03-18', true );

	// Add Source Sans Pro and Bitter fonts, used in the main stylesheet.
	wp_enqueue_style( 'supertheme-fonts', supertheme_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), '2.09' );

	// Loads our main stylesheet.
	wp_enqueue_style( 'supertheme-style', get_stylesheet_uri(), array(), '2013-07-18' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'supertheme-ie', get_template_directory_uri() . '/css/ie.css', array( 'supertheme-style' ), '2013-07-18' );
	wp_style_add_data( 'supertheme-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'supertheme_scripts_styles' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Super Theme 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function supertheme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'supertheme' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'supertheme_wp_title', 10, 2 );

/**
 * Register two widget areas.
 *
 * @since Super Theme 1.0
 */
function supertheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'supertheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'supertheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'supertheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'supertheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Text Widget For Blog', 'supertheme' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Here is only Text widget for Blog  .', 'supertheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
				'name'          => __( 'Get In Touch', 'supertheme' ),
				'id'            => 'sidebar-5',
				'description'   => __( 'Here is only get in touch form widget.', 'supertheme' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
	register_sidebar( array(
				'name'          => __( 'Footer Middle Section', 'supertheme' ),
				'id'            => 'sidebar-3',
				'description'   => __( 'Here is only twitter widget only - Latest tweets .', 'supertheme' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );

	register_sidebar( array(
				'name'          => __( 'Contact Us Map Address', 'supertheme' ),
				'id'            => 'sidebar-6',
				'description'   => __( 'Here is only twitter widget only - Latest tweets .', 'supertheme' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );

}
add_action( 'widgets_init', 'supertheme_widgets_init' );

if ( ! function_exists( 'supertheme_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Super Theme 1.0
 */
function supertheme_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'supertheme' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'supertheme' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'supertheme' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'supertheme_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
*
* @since Super Theme 1.0
*/
function supertheme_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'supertheme' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'supertheme' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'supertheme' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'supertheme_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own supertheme_entry_meta() to override in a child theme.
 *
 * @since Super Theme 1.0
 */
function supertheme_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . __( 'Sticky', 'supertheme' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		supertheme_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'supertheme' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'supertheme' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'supertheme' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;

if ( ! function_exists( 'supertheme_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own supertheme_entry_date() to override in a child theme.
 *
 * @since Super Theme 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function supertheme_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'supertheme' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'supertheme' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;

if ( ! function_exists( 'supertheme_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Super Theme 1.0
 */
function supertheme_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since Super Theme 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'supertheme_attachment_size', array( 724, 724 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since Super Theme 1.0
 *
 * @return string The Link format URL.
 */
function supertheme_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Active widgets in the sidebar to change the layout and spacing.
 * 3. When avatars are disabled in discussion settings.
 *
 * @since Super Theme 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function supertheme_body_class( $classes ) {
	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
		$classes[] = 'sidebar';

	if ( ! get_option( 'show_avatars' ) )
		$classes[] = 'no-avatars';

	return $classes;
}
add_filter( 'body_class', 'supertheme_body_class' );

/**
 * Adjust content_width value for video post formats and attachment templates.
 *
 * @since Super Theme 1.0
 */
function supertheme_content_width() {
	global $content_width;

	if ( is_attachment() )
		$content_width = 724;
	elseif ( has_post_format( 'audio' ) )
		$content_width = 484;
}
add_action( 'template_redirect', 'supertheme_content_width' );

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Super Theme 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function supertheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'supertheme_customize_register' );

/**
 * Enqueue Javascript postMessage handlers for the Customizer.
 *
 * Binds JavaScript handlers to make the Customizer preview
 * reload changes asynchronously.
 *
 * @since Super Theme 1.0
 */
function supertheme_customize_preview_js() {
	wp_enqueue_script( 'supertheme-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20130226', true );
}
add_action( 'customize_preview_init', 'supertheme_customize_preview_js' );
// Create a Custom Texonomy for Custom post type Blog
function create_post_type() 
{
	  register_post_type( 'acme_blog',
	  array(
				   'labels' => array(
					'name' => __( 'Blogs' ),
					'id'   => 'acme_blog',
					'singular_name' => __( 'BLOGS' )
				   ),
			  'public' => true,
			  'has_archive' => true,
			  'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' , 'custom-fields','comments' )
			  ) 
		  );
} add_action( 'init', 'create_post_type' );

// Create a Custom Texonomy for Custom post type Blog
function create_blog_cat() 
{
	register_taxonomy(
			'blog-category',
			'acme_blog',
					array(
						'label' => __( 'blog-category' ),
						'rewrite' => array( 'slug' => 'blog-category' ),
						'hierarchical' => true,
					)
	);
}add_action( 'init', 'create_blog_cat' );
 
/* Custom numeric pagination function starts*/

function get_numeric_pagination() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$max   = intval( $wp_query->max_num_pages );
									/** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
//	print_r($links);
    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="select"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="select"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="select"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}

/* custom numeric pagination function ends */

/* function to get archives of custom post types */ 
function my_custom_post_type_archive_where($where,$args){
    $post_type  = isset($args['post_type'])  ? $args['post_type']  : 'post';
    $where = "WHERE post_type = '$post_type' AND post_status = 'publish'";
    return $where;
}
add_filter( 'getarchives_where','my_custom_post_type_archive_where',10,2);


// ******************************************************
//       TGM Supertheme Plugins Activation Code Start
//*******************************************************

require_once dirname( __FILE__ ) . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'supertheme_register_required_plugins' );
function supertheme_register_required_plugins() {
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme
		array(
					'name'     			=> 'Woocommerce', // The plugin name
					'slug'     				=> 'woocommerce', // The plugin slug (typically the folder name)
					'source'   			=> get_template_directory() . '/framework/plugin/woocommerce.zip', // The plugin source
					'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
					'version' 				=> '4.1.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
					'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
					'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
					'external_url' 		=> '', // If set, overrides default API URL and points to an external URL
			),
			array(
					'name'     			=> 'Contact Form 7', // The plugin name
					'slug'     				=> 'contact-form-7', // The plugin slug (typically the folder name)
					'source'   			=> get_template_directory() . '/framework/plugin/contact-form-7.zip', // The plugin source
					'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
					'version' 				=> '4.1.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
					'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
					'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
					'external_url' 		=> '', // If set, overrides default API URL and points to an external URL
			),
		 
	
	/*	array(
				'name'     			=> 'WPML Multilingual CMS', // The plugin name
				'slug'     				=> 'sitepress-multilingual-cms', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/sitepress-multilingual-cms.2.6.0.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '2.6.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),*/
		/*	array(
				'name'     			=> 'WPML String Translation', // The plugin name
				'slug'     				=> 'wpml-string-translation', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/wpml-string-translation.1.5.0.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '1.4.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),*/
			/*array(
				'name'     			=> 'WPML Translation Management', // The plugin name
				'slug'     				=> 'wpml-translation-management', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/wpml-translation-management.1.4.0.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '1.4.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),*/
		array(
				'name'     			=> 'Newsletter Subscription', // The plugin name
				'slug'     				=> 'simple-subscribe', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/simple-subscribe.1.8.2.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '1.8.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),
		array(
				'name'     			=> 'Latest Tweets', // The plugin name
				'slug'     				=> 'latest-tweets-widget', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/latest-tweets-widget.1.1.2.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '1.1.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'     			=> 'Flicker Widget', // The plugin name
				'slug'     				=> 'flickr-badges-widget', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/flickr-badges-widget.1.2.7.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '1.2.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'     			=> 'Simple Slider', // The plugin name
				'slug'     				=> 'simple-slider-ssp', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/simple-slider-ssp.1.3.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '1.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),
		 array(
				'name'     			=> 'Cyclone Slider', // The plugin name
				'slug'     				=> 'cyclone-slider', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/cyclone-slider-2.2.7.4.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '2.2.9.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),
	);
/*
	array(
				'name'     			=> 'Meta Slider plugin', // The plugin name
				'slug'     				=> 'meta-slider', // The plugin slug (typically the folder name)
				'source'   			=> get_template_directory() . '/framework/plugin/meta-slider.zip', // The plugin source
				'required' 			=> false, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '3.2.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 	=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 		 => '', // If set, overrides default API URL and points to an external URL
			),


*/
	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
						'domain'       				 => $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
						'default_path' 			 => '',												// Default absolute path to pre-packaged plugins
						'parent_menu_slug' 	 => 'themes.php', 							// Default parent menu slug
						'parent_url_slug' 		 => 'themes.php', 							// Default parent URL slug
						'menu'         				 => 'install-required-plugins', 		// Menu slug
						'has_notices'      		 => true,                       					// Show admin notices or not
						'is_automatic'    		 => false,					   						// Automatically activate plugins after installation or not
						'message' 					 => '',												// Message to output right before the plugins table
						'strings'      					 => array(
						'page_title'                  => __( 'Install Required Plugins', $theme_text_domain ),
						'menu_title'                => __( 'Install Plugins', $theme_text_domain ),
						'installing'                   => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
						'oops'                          => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
						'notice_can_install_required'    => _n_noop( 'This theme requires the following plugin installed or update: %1$s.', 'This theme requires the following plugins installed or updated: %1$s.' ), // %1$s = plugin name(s)
						'notice_can_install_recommended'	=> _n_noop( 'This theme recommends the following plugin installed or updated: %1$s.', 'This theme recommends the following plugins installed or updated: %1$s.' ), // %1$s = plugin name(s)
						'notice_cannot_install'  => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
						'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
						'notice_can_activate_recommended'	=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
						'notice_cannot_activate' 	=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
						'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
						'notice_cannot_update'=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
						'install_link' 					 => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
						'activate_link' 				 => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
						'return'                           	 => __( 'Return to Required Plugins Installer', $theme_text_domain ),
						'plugin_activated'           => __( 'Plugin activated successfully.', $theme_text_domain ),
						'complete' 						  => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
						'nag_type'						  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );
}
require_once ( get_stylesheet_directory() . '/theme-options_sample.php' );
//require_once ( get_stylesheet_directory() . '/logo_upload.php' );


/*This is for wordpress ajax*/
//wp_enqueue_script('jquery');

function get_custom_post_using_terms() {
		
			if ($_POST['term_id']) {
				$result['success'] = true;
				 
									$args				= array( 
										'post_type' => 'sup_work',
										'tax_query'=>array(
																	array(	
																			'taxonomy' => 'work-category',
																			'field'    => 'id',
																			'terms'    => $_POST['term_id']
																	)
																)
										);
									$workresults	= get_posts($args);	
									//echo "<pre>";	print_r($workresults); exit;
							
							foreach($workresults as $resultW)
							{
								$data .= '	<figure class="web print">
									<a href="#" class="thumb"><img src="'.get_bloginfo('template_url').'/img/dummies/featured/01.jpg" alt="alt" /></a>
									<figcaption>
										<a href="#"><h3 class="heading">'.$resultW->post_title.' </h3></a>
										<div class="portfolio-cat">
											<a href="#" >web</a>,
											<a href="#" >print</a>
										</div>
									</figcaption>
								</figure>';

							}

				$result['data'] = $data;
			} else {
				$result['success'] = false;
			}
			//echo $result;
			//return $result;
			echo json_encode($result);
			die();
}

add_action('wp_ajax_get_custom_post_using_terms', 'get_custom_post_using_terms');
add_action('wp_ajax_nopriv_get_custom_post_using_terms', 'get_custom_post_using_terms');

/*End*/

class backup_restore_theme_options {

	function backup_restore_theme_options() {
		add_action('admin_menu', array(&$this, 'admin_menu'));
	}
	function admin_menu() {
		$page = add_theme_page('Backup Options', 'Backup Options', 'manage_options', 'backup-options', array(&$this, 'options_page'));

		add_action("load-{$page}", array(&$this, 'import_export'));
	}
	function import_export() {
		if (isset($_GET['action']) && ($_GET['action'] == 'download')) {
			header("Cache-Control: public, must-revalidate");
			header("Pragma: hack");
			header("Content-Type: text/plain");
			header('Content-Disposition: attachment; filename="theme-options-'.date("dMy").'.dat"');
			echo json_encode($this->_get_options());
			die();
		}

		if (isset($_POST['upload']) && check_admin_referer('shapeSpace_restoreOptions', 'shapeSpace_restoreOptions')) {
			
			$filecontent = file_get_contents($_FILES["file"]["tmp_name"]);
			$options = json_decode($filecontent,true);

			if ($options) {
				foreach ($options as $key => $value) {
					$key."=";
					$option_value = unserialize($value);
					//echo "</br>";
					update_option($key, $option_value);
				}
			}
			wp_redirect(admin_url('themes.php?page=theme_options'));
			exit;
		}
	}
	function options_page() { ?>

		<div class="wrap">
			<?php screen_icon(); ?>
			<h2>Backup/Restore Theme Options</h2>
			<form action="" method="POST" enctype="multipart/form-data">
				<style>#backup-options td { display: block; margin-bottom: 20px; }</style>
				<table id="backup-options">
					<tr>
						<td>
							<h3>Backup/Export</h3>
							<p>Here are the stored settings for the current theme:</p>
							<p>
							<textarea class="widefat code" rows="20" cols="100" onclick="this.select()"><?php echo json_encode($this->_get_options()); ?></textarea> 

							</p>
							<p><a href="?page=backup-options&action=download" class="button-secondary">Download as file</a></p>
						</td>
						<td>
							<h3>Restore/Import</h3>
							<p><label class="description" for="upload">Restore a previous backup</label></p>
							<p><input type="file" name="file" /> <input type="submit" name="upload" id="upload" class="button-primary" value="Upload file" /></p>
							<?php if (function_exists('wp_nonce_field')) wp_nonce_field('shapeSpace_restoreOptions', 'shapeSpace_restoreOptions'); ?>
						</td>
					</tr>
				</table>
			</form>
		</div>

	<?php }
	
	function _get_options() {
		global $wpdb;
		
		$sql = "SELECT option_name, option_value FROM super_options WHERE option_name IN ('wpml_details','woocom_details','metasl_details','Logo_Details','Social_Data','twitter_details','contactform_details','Google_map_address')";
		$result = mysql_query($sql);

		$data = array();

		while(list($key, $value) = mysql_fetch_row($result)) {
			$data["$key"] = $value;
		}

		return $data;
	}
}
new backup_restore_theme_options();


/*this is for the single product page View cart **/
add_filter( 'wc_add_to_cart_message', 'custom_add_to_cart_message' );
 
function custom_add_to_cart_message() {
 
global $woocommerce;
$return_to  = get_permalink(woocommerce_get_page_id('shop'));
$message    = sprintf('<a href="%s" class="button wc-forwards">%s</a> %s', $return_to, __('Continue Shopping', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') ); 
return $message;
}


function wc_remove_related_products( $args ) {
	return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10); 



//Added By Ganesh Nehulkar on 10/06/2016

add_action( 'wp_ajax_siteWideMessage', 'wpse_sendmail' );
add_action( 'wp_ajax_nopriv_siteWideMessage', 'wpse_sendmail' );

function wpse_sendmail()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $headers = 'From: '.$email ."\r\n".'Reply-To: '.$email;
    $message = 'Hi, '.$_POST['name'];
	$subject = 'Contact us';
  //  $respond = $_POST['message_email'];

     if(wp_mail( $email , $subject , $message  ))
    {
        echo "mail sent";
    } 


    die();
}




?>


