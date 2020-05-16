<?php
/**
 * DigiTecz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DigiTecz
 */

if ( ! function_exists( 'digitecz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function digitecz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on DigiTecz, use a find and replace
		 * to change 'digitecz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'digitecz', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'digitecz' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'digitecz_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'digitecz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function digitecz_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'digitecz_content_width', 640 );
}
add_action( 'after_setup_theme', 'digitecz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function digitecz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'digitecz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'digitecz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'digitecz_widgets_init' );

/**
 * ACF Pro theme options.
 */
if( function_exists('acf_add_options_page') ) {
	
  $options_img = get_template_directory_uri() . "/assets/img/dashboard-icons/theme-options.png";
  $promo_img = get_template_directory_uri() . "/assets/img/dashboard-icons/promotions.png";
  
  acf_add_options_page(array(
		'page_title' 	=> 'Promotions',
		'menu_title'	=> 'Promotions',
		'menu_slug' 	=> 'promotions',
		'icon_url' => $promo_img,
    'position' => 26
  ));

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'icon_url' => $options_img,
    'position' => 25
  ));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-options'
  ));
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-options'
	));
	
}

// Add css to admin dashboard
add_action('admin_head', 'lem_admin_css');

function lem_admin_css() {
  echo '<style>
    #adminmenu .wp-menu-image img {
      width: 50%;
      height: auto;
    }
    #adminmenu .wp-menu-image img {
      opacity: 1;
    }
  </style>';
}

/**
 * Bootstrap 4 pagination for WP-PageNavi
 */
function dtz_pagenavi_to_bootstrap($html) {
    $out = '';
    $out = str_replace('<div','',$html);
    $out = str_replace('class=\'wp-pagenavi\' role=\'navigation\'>','',$out);
    $out = str_replace('<a','<li class="page-item"><a class="page-link"',$out);
    $out = str_replace('</a>','</a></li>',$out);
    $out = str_replace('<span aria-current=\'page\' class=\'current\'','<li aria-current="page" class="page-item active"><span class="page-link current"',$out);
    $out = str_replace('<span class=\'pages\'','<li class="page-item"><span class="page-link pages"',$out);
    $out = str_replace('<span class=\'extend\'','<li class="page-item"><span class="page-link extend"',$out);  
    $out = str_replace('</span>','</span></li>',$out);
    $out = str_replace('</div>','',$out);
    return '<ul class="pagination justify-content-center" role="navigation">'.$out.'</ul>';
}
add_filter( 'wp_pagenavi', 'dtz_pagenavi_to_bootstrap', 10, 2 );

/**
* Prevent Contact form 7 by adding paragraphs automatically when pressing "Enter"
*/
add_filter('wpcf7_autop_or_not', '__return_false');

/**
* Add elipsis to excerpt
*/
function excerpt_readmore($more) {
    return '...';
}
add_filter('excerpt_more', 'excerpt_readmore');

/**
* Filter except length to 35 words.
*/
function tn_custom_excerpt_length( $length ) {
return 35;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

/**
 * Disable showing modified date from single post
 */
function jl_remove_post_dates() {
	add_filter('the_modified_date', '__return_false');
	add_filter('get_the_modified_date', '__return_false');
} add_action('loop_start', 'jl_remove_post_dates');

/**
 * Disable Dashicons on Front-end
 */
function wpdocs_dequeue_dashicon() {
  if (current_user_can( 'update_core' )) {
      return;
  }
  wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

/**
 * Disable Heartbeat
 */
add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
  wp_deregister_script('heartbeat');
}

/**
 * Disable Contact Form 7 JS/CSS loading in every page
 */
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * Remove WLManifest Link
 */
remove_action( 'wp_head', 'wlwmanifest_link' ) ;

/**
 * Disable Self Pingback
 */
function disable_pingback( &$links ) {
  foreach ( $links as $l => $link )
  if ( 0 === strpos( $link, get_option( 'home' ) ) )
  unset($links[$l]);
}
add_action( 'pre_ping', 'disable_pingback' );


/**
 * Add default image size text to featured image section.
 */
function custom_featured_image_text( $content ) {
    return '<p>' . __('Default image size is 1024x576 in pixels') . '</p>' . $content;
}
add_filter( 'admin_post_thumbnail_html', 'custom_featured_image_text' );

/**
 * Enqueue scripts and styles.
 */
function digitecz_scripts() {
	wp_enqueue_style( 'digitecz-style', get_stylesheet_uri() );

	wp_enqueue_script( 'digitecz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'digitecz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'digitecz_scripts' );

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

