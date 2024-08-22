<?php
/**
 * Theme functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package unique_freelancer_portfolio
 */

if ( ! function_exists( 'unique_freelancer_portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unique_freelancer_portfolio_setup() {
		/*
		 * Make theme available for translation.
		 */ 
		load_theme_textdomain( 'unique-freelancer-portfolio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'unique-freelancer-portfolio-thumb', 400, 300 );

		// Register nav menu locations.
		register_nav_menus( array(
			'primary-menu'  => esc_html__( 'Primary Menu', 'unique-freelancer-portfolio' ),
		) );

		/*
		* This theme styles the visual editor to resemble the theme style,
		* specifically font, colors, icons, and column width.
		*/
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		add_editor_style( array( '/css/editor-style' . $min . '.css', unique_freelancer_portfolio_fonts_url() ) );

		/*
		 * Switch default core markup to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'unique_freelancer_portfolio_custom_background_args', array(
			'default-color' => 'f7fcfe',
		) ) );

		// Enable support for selective refresh of widgets in Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable support for custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 200,
			'flex-height' => true,
		) );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// woocommerce
		add_theme_support( 'woocommerce' );

		// Load Supports.
		require_once get_template_directory() . '/inc/support.php';

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'unique-freelancer-portfolio' ),
					'shortName' => __( 'S', 'unique-freelancer-portfolio' ),
					'size'      => 13,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'unique-freelancer-portfolio' ),
					'shortName' => __( 'M', 'unique-freelancer-portfolio' ),
					'size'      => 14,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'unique-freelancer-portfolio' ),
					'shortName' => __( 'L', 'unique-freelancer-portfolio' ),
					'size'      => 30,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'unique-freelancer-portfolio' ),
					'shortName' => __( 'XL', 'unique-freelancer-portfolio' ),
					'size'      => 36,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Black', 'unique-freelancer-portfolio' ),
					'slug'  => 'black',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'White', 'unique-freelancer-portfolio' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => __( 'Gray', 'unique-freelancer-portfolio' ),
					'slug'  => 'gray',
					'color' => '#727272',
				),
				array(
					'name'  => __( 'Blue', 'unique-freelancer-portfolio' ),
					'slug'  => 'blue',
					'color' => '#007BFF',
				),
				array(
					'name'  => __( 'Navy Blue', 'unique-freelancer-portfolio' ),
					'slug'  => 'navy-blue',
					'color' => '#007BFF',
				),
				array(
					'name'  => __( 'Light Blue', 'unique-freelancer-portfolio' ),
					'slug'  => 'light-blue',
					'color' => '#f7fcfe',
				),
				array(
					'name'  => __( 'Orange', 'unique-freelancer-portfolio' ),
					'slug'  => 'orange',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'Green', 'unique-freelancer-portfolio' ),
					'slug'  => 'green',
					'color' => '#77a464',
				),
				array(
					'name'  => __( 'Red', 'unique-freelancer-portfolio' ),
					'slug'  => 'red',
					'color' => '#e4572e',
				),
				array(
					'name'  => __( 'Yellow', 'unique-freelancer-portfolio' ),
					'slug'  => 'yellow',
					'color' => '#f4a024',
				),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'unique_freelancer_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unique_freelancer_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unique_freelancer_portfolio_content_width', 771 );
}
add_action( 'after_setup_theme', 'unique_freelancer_portfolio_content_width', 0 );

/**
 * Register widget area.
 */
function unique_freelancer_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'unique-freelancer-portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'unique-freelancer-portfolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'unique-freelancer-portfolio' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'unique-freelancer-portfolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar 1', 'unique-freelancer-portfolio' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar 1.', 'unique-freelancer-portfolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'unique_freelancer_portfolio_widgets_init' );

/**
 * Register custom fonts.
 */
function unique_freelancer_portfolio_fonts_url() {
	$font_family   = array(
		'Josefin+Sans:ital,wght@0,100..700;1,100..700&',
	);
	
	$unique_freelancer_portfolio_fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $unique_freelancer_portfolio_fonts_url ) );
	return $contents;
}

/**
 * Enqueue scripts and styles.
 */
function unique_freelancer_portfolio_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'unique-freelancer-portfolio-font-awesome', get_template_directory_uri() . '/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );

	$unique_freelancer_portfolio_fonts_url = unique_freelancer_portfolio_fonts_url();
	if ( ! empty( $unique_freelancer_portfolio_fonts_url ) ) {
		wp_enqueue_style( 'unique-freelancer-portfolio-google-fonts', $unique_freelancer_portfolio_fonts_url, array(), null );
	}

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.css');

	// Theme stylesheet.
	wp_enqueue_style( 'unique-freelancer-portfolio-style', get_stylesheet_uri(), null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );

	wp_enqueue_style( 'unique-freelancer-portfolio-style', get_stylesheet_uri() );
	wp_style_add_data( 'unique-freelancer-portfolio-style', 'rtl', 'replace' );

	// Theme block stylesheet.
	wp_enqueue_style( 'unique-freelancer-portfolio-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'unique-freelancer-portfolio-style' ), '20211006' );
	
	wp_enqueue_script( 'unique-freelancer-portfolio-custom-js', get_template_directory_uri(). '/js/custom.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'jquery-superfish', get_theme_file_uri( '/js/jquery.superfish.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'unique_freelancer_portfolio_scripts' );

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Unique Freelancer Portfolio
 */
function unique_freelancer_portfolio_block_editor_styles() {
	// Theme block stylesheet.
	wp_enqueue_style( 'unique-freelancer-portfolio-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20101208' );

	$unique_freelancer_portfolio_fonts_url = unique_freelancer_portfolio_fonts_url();
	if ( ! empty( $unique_freelancer_portfolio_fonts_url ) ) {
		wp_enqueue_style( 'unique-freelancer-portfolio-google-fonts', $unique_freelancer_portfolio_fonts_url, array(), null );
	}
}
add_action( 'enqueue_block_editor_assets', 'unique_freelancer_portfolio_block_editor_styles' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';

// Dashboard Admin Info
require get_template_directory() . '/inc/dashboard-admin-info.php';

/**
 *  Webfonts
 */

require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

require_once get_template_directory() . '/inc/recommendations/tgm.php';

require_once get_template_directory() . '/inc/upsell/class-upgrade-pro.php';

require get_template_directory() . '/inc/getting-started/getting-started.php';

require get_template_directory() . '/inc/getting-started/plugin-activation.php';

define('UNIQUE_FREELANCER_PORTFOLIO_DOCUMENTATION',__('https://preview.mizanthemes.com/setup-guide/unique-freelancer-portfolio-free/','unique-freelancer-portfolio'));
define('UNIQUE_FREELANCER_PORTFOLIO_SUPPORT',__('https://wordpress.org/support/theme/unique-freelancer-portfolio/','unique-freelancer-portfolio'));
define('UNIQUE_FREELANCER_PORTFOLIO_REVIEW',__('https://wordpress.org/support/theme/unique-freelancer-portfolio/reviews/','unique-freelancer-portfolio'));
define('UNIQUE_FREELANCER_PORTFOLIO_BUY_NOW',__('https://www.mizanthemes.com/products/portfolio-wordpress-theme','unique-freelancer-portfolio'));
define('UNIQUE_FREELANCER_PORTFOLIO_LIVE_DEMO',__('https://preview.mizanthemes.com/unique-freelancer-portfolio/','unique-freelancer-portfolio'));
define('UNIQUE_FREELANCER_PORTFOLIO_PRO_DOC',__('https://preview.mizanthemes.com/setup-guide/unique-freelancer-portfolio-pro/','unique-freelancer-portfolio'));