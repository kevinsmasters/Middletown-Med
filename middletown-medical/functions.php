<?php

function theme_init_theme() {
	# Enqueue jQuery
	wp_enqueue_script('jquery');

	if (is_admin()) { /* Front end scripts and styles won't be included in admin area */
		return;
	}
	# Enqueue Custom Scripts
	# @wp_enqueue_script attributes -- id, location, dependancies, version
	
	wp_enqueue_script('jquery.carouFredSel', get_bloginfo('stylesheet_directory') . '/js/jquery.carouFredSel.js', array('jquery'), '1.0');
	wp_enqueue_script('functions', get_bloginfo('stylesheet_directory') . '/js/functions.js', array('jquery'), '1.0');
}
add_action('init', 'theme_init_theme');

    /* Exclude a Category from Search Results */
    add_filter( 'pre_get_posts' , 'search_exc_cats' );
    function search_exc_cats( $query ) {

    if( $query->is_admin )
    return $query;

    if( $query->is_search ) {
    $query->set( 'category__not_in' , array( 68 ) ); // Cat ID
    }
    return $query;
    }

add_action('after_setup_theme', 'theme_setup_theme');

# To override theme setup process in a child theme, add your own theme_setup_theme() to your child theme's
# functions.php file.
if ( ! function_exists( 'theme_setup_theme' ) ):
function theme_setup_theme() {
	include_once('lib/common.php');
	include_once('lib/carbon-fields/carbon-fields.php');

	# Theme supports
	add_theme_support('automatic-feed-links');
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'f-image', 681, 323, true );	
	add_image_size( 'home-recipe', 95, 85, true );
	add_image_size ('recipe-photo', 635, 257, true );
	add_image_size ('recipe-thumb', 147, 132, true );
	add_image_size ('blog-thumb', 150, 150, true );
	
	# Manually select Post Formats to be supported - http://codex.wordpress.org/Post_Formats
	// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

	# Register Theme Menu Locations
	
	add_theme_support('menus');
	register_nav_menus(array(
		'top-menu'=>__('Top Menu'),
		'main-menu'=>__('Main Menu'),
		'side-menu'=>__('Side Menu'),
		'staff-a-z-menu'=>__('Staff A-Z Menu'),
	));
	

	# Register CPTs
	include_once('options/post-types.php');
	
	# Attach custom widgets
	include_once('options/widgets.php');
	
	# Add Actions
	add_action('widgets_init', 'theme_widgets_init');
	add_action('carbon_register_fields', 'attach_theme_options');
	add_action('carbon_after_register_fields', 'attach_theme_help');

	# Add Filters
	add_filter('the_content', 'mm_shortcode_fix_tags');
	
}
endif;


# Register Sidebars
# Note: In a child theme with custom theme_setup_theme() this function is not hooked to widgets_init
function theme_widgets_init() {
	register_sidebar(array(
		'name' => 'Default Sidebar',
		'id' => 'default-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'Ortho Sidebar',
		'id' => 'ortho-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'Video Player Widget',
		'id' => 'videoplayer-widget',
		'before_widget' => '<div id="videoplayer-widget">',
		'after_widget' => '</div>',
	));
	
	register_sidebar(array(
		'name' => 'Blog Widgets',
		'id' => 'blog-widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>'
	));
}

function attach_theme_options() {
	# Attach fields
	include_once('options/theme-options.php');
	include_once('options/custom-fields.php');
}

function attach_theme_help() {
	# Theme Help needs to be after options/theme-options.php
	include_once('lib/theme-help/theme-readme.php');
}

function mm_list_menus() {
	$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
	
	global $menuArray;
	$menuArray = array('Select a side menu');
	
	foreach ( $menus as $m ) {
		$menuArray[$m->slug] = $m->name;
	}

	return $menuArray;
}

function mm_col( $atts, $content = null ) { 
	return '<div class="col">'. $content .'</div>';
}

add_shortcode( 'col', 'mm_col' );

function mm_shortcode_fix_tags($content) {
	$array = array (
		'<p>[' => '[',
		']</p>' => ']',
		']<br />' => ']'
	);

	$content = strtr($content, $array);
	return $content;
}
function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');
function mm_before_content() {
	?>
	<div id="main">
		<?php get_sidebar(); ?>
		<div class="right-side">
	<?php
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_shortcode('facebook', 'wpds_facebook');
add_action('wp_head','enqueue_facebook_script');
function wpds_facebook( $atts, $content=null ){
      
    extract(shortcode_atts(array(
        'url' => null,
        'align' => 'left', //left, right, none
    'type' => 'box_count', //box_count, button_count, button, icon
    ), $atts));
     
    $output = "<div style='float:".$align.";' ><a '";
    if(!empty($url))
        $output .= "expr:share_url='".$via."'";
    else
        $output .= "expr:share_url='".get_permalink()."'";
     
    $output .= " href='http://www.facebook.com/sharer.php' name='fb_share' ";
 
    if(!empty($type))
        $output .= 'type="'.$type.'" ';
 
    $output .='>Share</a></div>';
 
 
    wp_enqueue_script('facebook-widget-js');
    return $output;
}
function enqueue_facebook_script(){
    wp_register_script('facebook-widget-js','http://static.ak.fbcdn.net/connect.php/js/FB.Share',null,true);
}

/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}

?>