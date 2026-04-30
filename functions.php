<?php
/**
 * Fikrtak Theme functions and definitions
 */

if ( ! function_exists( 'fikrtak_theme_setup' ) ) :
	function fikrtak_theme_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'fikrtak-theme' ),
				'footer'  => esc_html__( 'Footer Menu', 'fikrtak-theme' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
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
	}
endif;
add_action( 'after_setup_theme', 'fikrtak_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function fikrtak_theme_scripts() {
	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap', array(), null );

	// Theme Styles
	wp_enqueue_style( 'fikrtak-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
	wp_enqueue_style( 'fikrtak-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get('Version') );

	// Theme Scripts
	wp_enqueue_script( 'fikrtak-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'fikrtak_theme_scripts' );


/**
 * Custom Post Types
 */
function fikrtak_custom_post_types() {
    register_post_type('service', array(
        'labels'      => array('name' => 'الخدمات', 'singular_name' => 'خدمة'),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array('title', 'editor', 'thumbnail'),
        'menu_icon'   => 'dashicons-hammer',
    ));
    register_post_type('review', array(
        'labels'      => array('name' => 'آراء العملاء', 'singular_name' => 'رأي'),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array('title', 'editor', 'custom-fields'),
        'menu_icon'   => 'dashicons-star-filled',
    ));
    register_post_type('faq', array(
        'labels'      => array('name' => 'الأسئلة الشائعة', 'singular_name' => 'سؤال'),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array('title', 'editor'),
        'menu_icon'   => 'dashicons-editor-help',
    ));
}
add_action('init', 'fikrtak_custom_post_types');

/**
 * Theme Customizer Settings
 */
function fikrtak_customizer_settings( $wp_customize ) {

    // ── قسم: إعدادات الموقع ──────────────────────────────────
    $wp_customize->add_section( 'fikrtak_site_options', array(
        'title'    => 'إعدادات الموقع',
        'priority' => 30,
    ) );

    // خيار: تفعيل/إيقاف شاشة التحميل (Preloader)
    $wp_customize->add_setting( 'fikrtak_enable_preloader', array(
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'fikrtak_enable_preloader', array(
        'type'        => 'checkbox',
        'label'       => 'تفعيل شاشة التحميل (Preloader)',
        'description' => 'عند التفعيل ستظهر شاشة تحميل بشعار الموقع عند فتح الصفحة.',
        'section'     => 'fikrtak_site_options',
    ) );
}
add_action( 'customize_register', 'fikrtak_customizer_settings' );
