<?php
/**
 * foundation-elementor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package foundation-elementor
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
function foundation_elementor_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on foundation-elementor, use a find and replace
		* to change 'foundation-elementor' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'foundation-elementor', get_template_directory() . '/languages' );

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
			'header-menu' => esc_html__( 'Header Menu', 'foundation-elementor' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'foundation-elementor' ),
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
			'foundation_elementor_custom_background_args',
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
add_action( 'after_setup_theme', 'foundation_elementor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function foundation_elementor_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'foundation_elementor_content_width', 640 );
}
add_action( 'after_setup_theme', 'foundation_elementor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function foundation_elementor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'foundation-elementor' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'foundation-elementor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'foundation_elementor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foundation_elementor_scripts() {




	wp_enqueue_style( 'foundation_elementor-style', get_stylesheet_uri() ); 

	wp_enqueue_style('foundation_elementor-icomon-style', get_template_directory_uri().'/assets/fonts/icomoon/style.css');
	wp_enqueue_style('foundation_elementor-flaticon', get_template_directory_uri().'/assets/fonts/flaticon/font/flaticon.css');
	wp_enqueue_style('foundation_elementor-bootstrap.min', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('foundation_elementor-magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css' );
	wp_enqueue_style('foundation_elementor-owl.theme.default.min', get_template_directory_uri().'/assets/css/owl.theme.default.min');
	wp_enqueue_style('foundation_elementor-bootstrap-datepicker', get_template_directory_uri().'/assets/css/bootstrap-datepicker.css');
	wp_enqueue_style('foundation_elementor-aos', get_template_directory_uri().'/assets/css/aos.css');
	wp_enqueue_style('foundation_elementor-jquery-ui', get_template_directory_uri().'/assets/css/jquery-ui.css');
	wp_enqueue_style('foundation_elementor-owl.carousel.min', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	wp_enqueue_style('foundation_elementor-main-style', get_template_directory_uri().'/assets/css/style.css');


   // wp_deregister_script('jquery');
	wp_enqueue_script('jquery-3.3.1.min', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script('foundation_elementor-jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), '1.0', true );
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );
	wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true );
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true );
	wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '1.0', true );
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/s/jquery.waypoints.min.js', array(), '1.0', true );
	wp_enqueue_script('animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array(), '1.0', true );
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true );
	wp_enqueue_script('foundation_elementor-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );





	//wp_enqueue_style( 'foundation-elementor-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_style_add_data( 'foundation-elementor-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'foundation-elementor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true )



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foundation_elementor_scripts' );




//Fix Menu class for anchor
function add_link_atts($atts) {
	$atts['class'] = "nav-link";
	return $atts;
  }
     








	
	

