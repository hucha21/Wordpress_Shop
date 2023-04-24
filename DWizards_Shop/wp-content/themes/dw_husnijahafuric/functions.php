<?php
/**
 * dw_HusnijaHafuric functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dw_HusnijaHafuric
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dw_husnijahafuric_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on dw_HusnijaHafuric, use a find and replace
		* to change 'dw_husnijahafuric' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dw_husnijahafuric', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'dw_husnijahafuric' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'dw_husnijahafuric_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'dw_husnijahafuric_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dw_husnijahafuric_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dw_husnijahafuric_content_width', 640 );
}
add_action( 'after_setup_theme', 'dw_husnijahafuric_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dw_husnijahafuric_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dw_husnijahafuric' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dw_husnijahafuric' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dw_husnijahafuric_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dw_husnijahafuric_scripts() {
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/style.css?', array(), time());	
	wp_style_add_data( 'dw_husnijahafuric-style', 'rtl', 'replace' );
	wp_enqueue_script( 'dw_husnijahafuric-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'dw_husnijahafuric_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
/**
 * Adding Theme Settings
 */
add_filter('use_block_editor_for_post', 'disable_gutenberg_on_settings_page', 10, 2);

function disable_gutenberg_on_settings_page($can, $post){
    if($post){
        // Replace "theme-settings" with the slug of your site settings page.
        if($post->post_name === "theme-settings"){
            return false;
        }
    }
    return $can;
}
function hide_settings_page($query) {
    if ( !is_admin() && !is_main_query() ) {
        return;
    }    
    global $typenow;
    if ($typenow === "page") {
        // Replace "theme-settings" with the slug of your site settings page.
        $settings_page = get_page_by_path("theme-settings",NULL,"page")->ID;
        $query->set( 'post__not_in', array($settings_page) );    
    }
    return;

}

add_action('pre_get_posts', 'hide_settings_page');
// Add the page to admin menu
function add_site_settings_to_menu(){
    add_menu_page( 'Theme Settings', 'Theme Setttings', 'manage_options', 'post.php?post='.get_page_by_path("theme-settings",NULL,"page")->ID.'&action=edit', '', 'dashicons-admin-tools', 20);
}
add_action( 'admin_menu', 'add_site_settings_to_menu' );

// Change the active menu item

add_filter('parent_file', 'higlight_custom_settings_page');

function higlight_custom_settings_page($file) {
    global $parent_file;
    global $pagenow;
    global $typenow, $self;

    $settings_page = get_page_by_path("theme-settings",NULL,"page")->ID;

    
    if ($pagenow === "post.php" ) {
        $file = "post.php?post=$settings_page&action=edit";
    }
    return $file;
}
function edit_site_settings_title() {
    global $post, $title, $action, $current_screen;
    if( isset( $current_screen->post_type ) && $current_screen->post_type === 'page' && $action == 'edit' && $post->post_name === "theme-settings") {
        $title = $post->post_title.' - '.get_bloginfo('name');           
    }
    return $title;  
}

add_action( 'admin_title', 'edit_site_settings_title' );
