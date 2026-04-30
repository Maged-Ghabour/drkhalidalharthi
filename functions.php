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

/**
 * تخصيص صفحة تسجيل دخول الإدمن (wp-login.php)
 */
function fikrtak_login_logo() {
    $logo_url = get_template_directory_uri() . '/assets/images/logo.png';
    if ( has_custom_logo() ) {
        $logo_id  = get_theme_mod('custom_logo');
        $logo_src = wp_get_attachment_image_src( $logo_id, 'full' );
        if ( $logo_src ) $logo_url = $logo_src[0];
    }
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap');

        :root {
            --teal:      #61a095;
            --teal-dark: #3d7d73;
            --dark:      #0d2626;
        }

        /* ── خلفية الصفحة ── */
        body.login {
            font-family: 'Almarai', sans-serif;
            background: linear-gradient(135deg, var(--dark) 0%, #1a3d3a 50%, var(--dark) 100%);
            position: relative;
            overflow: hidden;
        }

        body.login::before {
            content: '';
            position: fixed;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(97,160,149,0.18) 0%, transparent 70%);
            top: -200px;
            right: -200px;
            pointer-events: none;
        }

        body.login::after {
            content: '';
            position: fixed;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(97,160,149,0.12) 0%, transparent 70%);
            bottom: -120px;
            left: -120px;
            pointer-events: none;
        }

        /* ── الشعار ── */
        #login h1 a {
            background-image: url('<?php echo esc_url($logo_url); ?>') !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            width: 180px !important;
            height: 70px !important;
            display: block;
            margin: 0 auto 8px;
            filter: brightness(0) invert(1);
        }

        /* ── الحاوية الرئيسية ── */
        #login {
            width: 380px !important;
            padding: 0 !important;
        }

        /* ── البطاقة ── */
        #loginform,
        #lostpasswordform,
        #registerform {
            background: #ffffff !important;
            border: none !important;
            border-radius: 20px !important;
            box-shadow: 0 24px 64px rgba(0,0,0,0.35) !important;
            padding: 40px 36px !important;
            margin-top: 0 !important;
        }

        /* ── العنوان داخل البطاقة ── */
        #loginform::before {
            content: 'مرحباً بعودتك 👋';
            display: block;
            font-size: 20px;
            font-weight: 800;
            color: #1a2e2d;
            margin-bottom: 4px;
            font-family: 'Almarai', sans-serif;
        }

        #loginform::after {
            content: 'أدخل بيانات حسابك للمتابعة';
            display: block;
            font-size: 13px;
            color: #6b7c7b;
            margin-bottom: 24px;
            font-family: 'Almarai', sans-serif;
        }

        /* ── الحقول ── */
        .login label {
            font-family: 'Almarai', sans-serif;
            font-size: 13px;
            font-weight: 700;
            color: #1a2e2d;
        }

        .login input[type="text"],
        .login input[type="password"],
        .login input[type="email"] {
            font-family: 'Almarai', sans-serif;
            font-size: 14px;
            border: 1.5px solid #e0e8e7 !important;
            border-radius: 10px !important;
            padding: 12px 14px !important;
            background: #f8fcfb !important;
            color: #1a2e2d !important;
            box-shadow: none !important;
            direction: rtl;
            transition: border-color 0.2s, box-shadow 0.2s;
            height: auto !important;
        }

        .login input[type="text"]:focus,
        .login input[type="password"]:focus {
            border-color: var(--teal) !important;
            box-shadow: 0 0 0 3px rgba(97,160,149,0.15) !important;
            background: #fff !important;
        }

        /* ── زر الدخول ── */
        .login #wp-submit,
        .login .button-primary {
            font-family: 'Almarai', sans-serif !important;
            font-size: 15px !important;
            font-weight: 700 !important;
            background: linear-gradient(135deg, var(--teal) 0%, var(--teal-dark) 100%) !important;
            border: none !important;
            border-radius: 10px !important;
            padding: 13px 24px !important;
            height: auto !important;
            box-shadow: 0 4px 16px rgba(97,160,149,0.35) !important;
            transition: opacity 0.2s, transform 0.2s !important;
            text-shadow: none !important;
            width: 100%;
        }

        .login #wp-submit:hover {
            opacity: 0.9 !important;
            transform: translateY(-1px) !important;
        }

        /* ── "تذكّرني" ── */
        .login .forgetmenot {
            font-family: 'Almarai', sans-serif;
            font-size: 13px;
            color: #4a5e5d;
        }

        /* ── الروابط السفلية ── */
        #nav, #backtoblog {
            background: transparent !important;
            box-shadow: none !important;
            border: none !important;
            text-align: center !important;
            padding: 12px 0 4px !important;
        }

        #nav a, #backtoblog a {
            font-family: 'Almarai', sans-serif;
            font-size: 13px;
            color: rgba(255,255,255,0.6) !important;
            text-decoration: none;
            transition: color 0.2s;
        }

        #nav a:hover, #backtoblog a:hover {
            color: #fff !important;
        }

        /* ── رسائل الخطأ ── */
        #login_error,
        .message {
            font-family: 'Almarai', sans-serif !important;
            border-radius: 10px !important;
            border-right: 4px solid #c0392b !important;
            border-left: none !important;
            background: #fff0f0 !important;
            color: #c0392b !important;
            font-size: 13px !important;
        }

        .message {
            border-right-color: var(--teal) !important;
            background: #f0faf8 !important;
            color: var(--teal-dark) !important;
        }

        /* ── تخصيص checkbox ── */
        input[type="checkbox"]:checked {
            accent-color: var(--teal);
        }

        /* ── Hide default WP privacy policy link ── */
        .privacy-policy-page-link { display: none; }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'fikrtak_login_logo' );

// تغيير رابط الشعار إلى رابط الموقع
add_filter( 'login_headerurl', function() {
    return home_url('/');
} );

// تغيير عنوان الشعار إلى اسم الموقع
add_filter( 'login_headertext', function() {
    return get_bloginfo('name');
} );
