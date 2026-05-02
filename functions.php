<?php
/**
 * Fikrtak Theme functions and definitions
 */

if ( ! function_exists( 'fikrtak_theme_setup' ) ) :
	function fikrtak_theme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );


		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'fikrtak-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'fikrtak-theme' ),
		) );

		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list',
			'gallery', 'caption', 'style', 'script',
		) );
	}
endif;
add_action( 'after_setup_theme', 'fikrtak_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function fikrtak_theme_scripts() {
	wp_enqueue_style( 'fikrtak-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
	wp_enqueue_style( 'fikrtak-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get('Version') );
	wp_enqueue_script( 'fikrtak-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'fikrtak_theme_scripts' );

/**
 * Custom Post Types
 */
function fikrtak_custom_post_types() {
	register_post_type( 'service', array(
		'labels'      => array(
			'name'          => 'الخدمات',
			'singular_name' => 'خدمة',
			'add_new_item'  => 'إضافة خدمة جديدة',
			'edit_item'     => 'تعديل الخدمة',
			'all_items'     => 'جميع الخدمات',
		),
		'public'      => true,
		'has_archive' => false,
		'supports'    => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon'   => 'dashicons-hammer',
		'show_in_rest' => true,
	) );

	register_post_type( 'review', array(
		'labels'      => array(
			'name'          => 'آراء العملاء',
			'singular_name' => 'رأي',
			'add_new_item'  => 'إضافة رأي جديد',
			'edit_item'     => 'تعديل الرأي',
			'all_items'     => 'جميع الآراء',
		),
		'public'      => true,
		'has_archive' => false,
		'supports'    => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'menu_icon'   => 'dashicons-star-filled',
		'show_in_rest' => true,
	) );

	register_post_type( 'faq', array(
		'labels'      => array(
			'name'          => 'الأسئلة الشائعة',
			'singular_name' => 'سؤال',
			'add_new_item'  => 'إضافة سؤال جديد',
			'edit_item'     => 'تعديل السؤال',
			'all_items'     => 'جميع الأسئلة',
		),
		'public'      => true,
		'has_archive' => false,
		'supports'    => array( 'title', 'editor' ),
		'menu_icon'   => 'dashicons-editor-help',
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'fikrtak_custom_post_types' );

/**
 * Add Meta Boxes for Reviews
 */
function fikrtak_review_meta_boxes() {
	add_meta_box(
		'review_details',
		'تفاصيل الرأي',
		'fikrtak_review_meta_box_callback',
		'review',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'fikrtak_review_meta_boxes' );

function fikrtak_review_meta_box_callback( $post ) {
	wp_nonce_field( 'fikrtak_review_meta_box', 'fikrtak_review_meta_box_nonce' );

	$handle = get_post_meta( $post->ID, 'reviewer_handle', true );
	$stars  = get_post_meta( $post->ID, 'review_stars', true );
	$score  = get_post_meta( $post->ID, 'review_score', true );

	echo '<div style="padding: 10px 0;">';
	echo '<label for="reviewer_handle" style="display:block; margin-bottom:5px; font-weight:bold;">معرف العميل (بدون @):</label>';
	echo '<input type="text" id="reviewer_handle" name="reviewer_handle" value="' . esc_attr( $handle ) . '" style="width:100%;" />';
	echo '</div>';

	echo '<div style="padding: 10px 0;">';
	echo '<label for="review_stars" style="display:block; margin-bottom:5px; font-weight:bold;">عدد النجوم (1-5):</label>';
	echo '<input type="number" id="review_stars" name="review_stars" value="' . esc_attr( $stars ?: 5 ) . '" min="1" max="5" style="width:100%;" />';
	echo '</div>';

	echo '<div style="padding: 10px 0;">';
	echo '<label for="review_score" style="display:block; margin-bottom:5px; font-weight:bold;">التقييم الرقمي (مثال: 5.0):</label>';
	echo '<input type="text" id="review_score" name="review_score" value="' . esc_attr( $score ?: '5.0' ) . '" style="width:100%;" />';
	echo '</div>';
}

function fikrtak_save_review_meta( $post_id ) {
	if ( ! isset( $_POST['fikrtak_review_meta_box_nonce'] ) ) return;
	if ( ! wp_verify_nonce( $_POST['fikrtak_review_meta_box_nonce'], 'fikrtak_review_meta_box' ) ) return;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['reviewer_handle'] ) ) {
		update_post_meta( $post_id, 'reviewer_handle', sanitize_text_field( $_POST['reviewer_handle'] ) );
	}
	if ( isset( $_POST['review_stars'] ) ) {
		update_post_meta( $post_id, 'review_stars', sanitize_text_field( $_POST['review_stars'] ) );
	}
	if ( isset( $_POST['review_score'] ) ) {
		update_post_meta( $post_id, 'review_score', sanitize_text_field( $_POST['review_score'] ) );
	}
}
add_action( 'save_post', 'fikrtak_save_review_meta' );


/**
 * Theme Customizer Settings
 */
function fikrtak_customizer_settings( $wp_customize ) {

	$wp_customize->add_section( 'fikrtak_site_options', array(
		'title'    => 'إعدادات الموقع',
		'priority' => 30,
	) );

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

	// Footer Logo
	$wp_customize->add_setting( 'fikrtak_footer_logo', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fikrtak_footer_logo', array(
		'label'       => 'شعار الفوتر',
		'description' => 'ارفع شعاراً خاصاً للفوتر (مثلاً النسخة البيضاء). إذا تركته فارغاً سيتم استخدام الشعار الأساسي.',
		'section'     => 'fikrtak_site_options',
	) ) );

	// Social Media Section
	$wp_customize->add_section( 'fikrtak_social_options', array(
		'title'    => 'روابط التواصل الاجتماعي',
		'priority' => 31,
	) );

	$socials = array(
		'facebook'  => 'Facebook',
		'instagram' => 'Instagram',
		'tiktok'    => 'Tiktok',
		'youtube'   => 'Youtube',
		'x'         => 'X (Twitter)',
	);

	foreach ( $socials as $id => $label ) {
		$wp_customize->add_setting( 'fikrtak_social_' . $id, array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		) );

		$wp_customize->add_control( 'fikrtak_social_' . $id, array(
			'label'   => $label,
			'section' => 'fikrtak_social_options',
			'type'    => 'url',
		) );
	}

	// Contact Info Section
	$wp_customize->add_section( 'fikrtak_contact_options', array(
		'title'    => 'بيانات التواصل',
		'priority' => 32,
	) );

	$contacts = array(
		'whatsapp' => 'رقم الواتساب (بدون + أو أصفار، مثال: 966500000000)',
		'phone'    => 'رقم الهاتف',
		'mobile'   => 'رقم الجوال',
		'email'    => 'البريد الإلكتروني',
	);

	foreach ( $contacts as $id => $label ) {
		$wp_customize->add_setting( 'fikrtak_contact_' . $id, array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		) );

		$wp_customize->add_control( 'fikrtak_contact_' . $id, array(
			'label'   => $label,
			'section' => 'fikrtak_contact_options',
			'type'    => 'text',
		) );
	}

	// Hero Section Settings
	$wp_customize->add_section( 'fikrtak_hero_options', array(
		'title'    => 'قسم البداية (Hero)',
		'priority' => 33,
	) );

	// Hero Title
	$wp_customize->add_setting( 'fikrtak_hero_title', array(
		'default'           => 'استشاري جراحة أورام<br>العظام وإعادة بناء<br>المفاصل',
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control( 'fikrtak_hero_title', array(
		'label'   => 'العنوان الرئيسي (يدعم <br> للسطر الجديد)',
		'section' => 'fikrtak_hero_options',
		'type'    => 'textarea',
	) );

	// Hero Sub-title (Question)
	$wp_customize->add_setting( 'fikrtak_hero_subtitle', array(
		'default'           => 'متى يجب زيارة الطبيب؟',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control( 'fikrtak_hero_subtitle', array(
		'label'   => 'السؤال الفرعي',
		'section' => 'fikrtak_hero_options',
		'type'    => 'text',
	) );

	// Hero Description
	$wp_customize->add_setting( 'fikrtak_hero_desc', array(
		'default'           => 'عند الشعور بألم مستمر أو ظهور أعراض غير طبيعية في العظام.',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );
		'section'     => 'fikrtak_hero_options',
		'type'        => 'textarea',
	) );

	// Stats Section Settings
	$wp_customize->add_section( 'fikrtak_stats_options', array(
		'title'    => 'إحصائيات النجاح',
		'priority' => 34,
	) );

	// Stat 1: Success Rate
	$wp_customize->add_setting( 'fikrtak_stat_success_val', array( 'default' => '99', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
	$wp_customize->add_control( 'fikrtak_stat_success_val', array( 'label' => 'نسبة النجاح (رقم فقط)', 'section' => 'fikrtak_stats_options' ) );
	$wp_customize->add_setting( 'fikrtak_stat_success_lbl', array( 'default' => 'نسبة نجاحنا', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
	$wp_customize->add_control( 'fikrtak_stat_success_lbl', array( 'label' => 'عنوان نسبة النجاح', 'section' => 'fikrtak_stats_options' ) );

	// Stat 2: Experience
	$wp_customize->add_setting( 'fikrtak_stat_exp_val', array( 'default' => '13', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
	$wp_customize->add_control( 'fikrtak_stat_exp_val', array( 'label' => 'سنوات الخبرة (رقم فقط)', 'section' => 'fikrtak_stats_options' ) );
	$wp_customize->add_setting( 'fikrtak_stat_exp_lbl', array( 'default' => 'سنوات خبرة', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
	$wp_customize->add_control( 'fikrtak_stat_exp_lbl', array( 'label' => 'عنوان سنوات الخبرة', 'section' => 'fikrtak_stats_options' ) );

	// Stat 3: Cases
	$wp_customize->add_setting( 'fikrtak_stat_cases_val', array( 'default' => '2000', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
	$wp_customize->add_control( 'fikrtak_stat_cases_val', array( 'label' => 'عدد الحالات (رقم فقط)', 'section' => 'fikrtak_stats_options' ) );
	$wp_customize->add_setting( 'fikrtak_stat_cases_lbl', array( 'default' => 'حالة مرضية', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
	$wp_customize->add_control( 'fikrtak_stat_cases_lbl', array( 'label' => 'عنوان عدد الحالات', 'section' => 'fikrtak_stats_options' ) );

}




add_action( 'customize_register', 'fikrtak_customizer_settings' );

/**
 * تخصيص صفحة تسجيل دخول الإدمن (wp-login.php)
 */
function fikrtak_login_logo() {
	$logo_url = get_template_directory_uri() . '/assets/images/logo.png';
	if ( has_custom_logo() ) {
		$logo_id  = get_theme_mod( 'custom_logo' );
		$logo_src = wp_get_attachment_image_src( $logo_id, 'full' );
		if ( $logo_src ) $logo_url = $logo_src[0];
	}
	?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
	<style>
		:root {
			--teal:      #61a095;
			--teal-dark: #3d7d73;
			--dark:      #0d2626;
		}

		body.login {
			font-family: 'Cairo', sans-serif;
			background: linear-gradient(135deg, var(--dark) 0%, #1a3d3a 50%, var(--dark) 100%);
			position: relative;
			overflow: hidden;
		}

		body.login::before {
			content: '';
			position: fixed;
			width: 600px; height: 600px;
			border-radius: 50%;
			background: radial-gradient(circle, rgba(97,160,149,0.18) 0%, transparent 70%);
			top: -200px; right: -200px;
			pointer-events: none;
		}

		body.login::after {
			content: '';
			position: fixed;
			width: 400px; height: 400px;
			border-radius: 50%;
			background: radial-gradient(circle, rgba(97,160,149,0.12) 0%, transparent 70%);
			bottom: -120px; left: -120px;
			pointer-events: none;
		}

		#login h1 a {
			background-image: url('<?php echo esc_url( $logo_url ); ?>') !important;
			background-size: contain !important;
			background-repeat: no-repeat !important;
			background-position: center !important;
			width: 180px !important;
			height: 70px !important;
			display: block;
			margin: 0 auto 8px;
			filter: brightness(0) invert(1);
		}

		#login { width: 380px !important; padding: 0 !important; }

		#loginform, #lostpasswordform, #registerform {
			background: #ffffff !important;
			border: none !important;
			border-radius: 20px !important;
			box-shadow: 0 24px 64px rgba(0,0,0,0.35) !important;
			padding: 40px 36px !important;
			margin-top: 0 !important;
		}

		#loginform::before {
			content: 'مرحباً بعودتك 👋';
			display: block;
			font-size: 20px; font-weight: 800;
			color: #1a2e2d; margin-bottom: 4px;
			font-family: 'Cairo', sans-serif;
		}

		#loginform::after {
			content: 'أدخل بيانات حسابك للمتابعة';
			display: block;
			font-size: 13px; color: #6b7c7b;
			margin-bottom: 24px;
			font-family: 'Cairo', sans-serif;
		}

		.login label {
			font-family: 'Cairo', sans-serif;
			font-size: 13px; font-weight: 700; color: #1a2e2d;
		}

		.login input[type="text"],
		.login input[type="password"],
		.login input[type="email"] {
			font-family: 'Cairo', sans-serif;
			font-size: 14px;
			border: 1.5px solid #e0e8e7 !important;
			border-radius: 10px !important;
			padding: 12px 14px !important;
			background: #f8fcfb !important;
			color: #1a2e2d !important;
			box-shadow: none !important;
			direction: rtl;
			height: auto !important;
			transition: border-color 0.2s, box-shadow 0.2s;
		}

		.login input[type="text"]:focus,
		.login input[type="password"]:focus {
			border-color: var(--teal) !important;
			box-shadow: 0 0 0 3px rgba(97,160,149,0.15) !important;
			background: #fff !important;
		}

		.login #wp-submit, .login .button-primary {
			font-family: 'Cairo', sans-serif !important;
			font-size: 15px !important; font-weight: 700 !important;
			background: linear-gradient(135deg, var(--teal) 0%, var(--teal-dark) 100%) !important;
			border: none !important;
			border-radius: 10px !important;
			padding: 13px 24px !important;
			height: auto !important;
			box-shadow: 0 4px 16px rgba(97,160,149,0.35) !important;
			text-shadow: none !important;
			width: 100%;
			transition: opacity 0.2s, transform 0.2s !important;
		}

		.login #wp-submit:hover { opacity: 0.9 !important; transform: translateY(-1px) !important; }

		.login .forgetmenot { font-family: 'Cairo', sans-serif; font-size: 13px; color: #4a5e5d; }

		#nav, #backtoblog {
			background: transparent !important;
			box-shadow: none !important;
			border: none !important;
			text-align: center !important;
			padding: 12px 0 4px !important;
		}

		#nav a, #backtoblog a {
			font-family: 'Cairo', sans-serif;
			font-size: 13px;
			color: rgba(255,255,255,0.6) !important;
		}

		#nav a:hover, #backtoblog a:hover { color: #fff !important; }

		#login_error, .message {
			font-family: 'Cairo', sans-serif !important;
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

		input[type="checkbox"]:checked { accent-color: var(--teal); }
		.privacy-policy-page-link { display: none; }
	</style>
	<?php
}
add_action( 'login_enqueue_scripts', 'fikrtak_login_logo' );

add_filter( 'login_headerurl', function() { return home_url('/'); } );
add_filter( 'login_headertext', function() { return get_bloginfo('name'); } );

/**
 * تخصيص لوحة تحكم الووردبريس (Admin Dashboard)
 */
function fikrtak_admin_styles() {
	$is_rtl      = is_rtl();
	$font_family = $is_rtl ? "'Cairo', sans-serif" : "'Inter', sans-serif";
	$font_url    = $is_rtl
		? 'https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap'
		: 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap';

	$logo_url = get_template_directory_uri() . '/assets/images/logo.png';
	if ( has_custom_logo() ) {
		$logo_id  = get_theme_mod( 'custom_logo' );
		$logo_src = wp_get_attachment_image_src( $logo_id, 'full' );
		if ( $logo_src ) $logo_url = $logo_src[0];
	}
	?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="<?php echo esc_url( $font_url ); ?>" rel="stylesheet">
	<style>
		:root {
			--adm-teal:    #61a095;
			--adm-teal-dk: #3d7d73;
			--adm-teal-lt: #e8f4f2;
			--adm-dark:    #0d2626;
			--adm-sidebar: #1a3230;
			--adm-sidebar2:#132724;
			--adm-text:    #1e2d2c;
			--adm-text2:   #5e7270;
			--adm-white:   #ffffff;
			--adm-bg:      #f0f4f3;
			--adm-radius:  10px;
			--adm-shadow:  0 2px 12px rgba(13,38,38,.08);
		}

		body, input, select, textarea, button,
		#adminmenu, #adminmenu a, #wpadminbar, #wpadminbar *,
		.wrap, .wp-heading-inline, .widefat, .widefat td, .widefat th {
			font-family: <?php echo $font_family; ?> !important;
		}

		body.wp-admin { background: var(--adm-bg) !important; }

		/* Toolbar */
		#wpadminbar {
			background: var(--adm-dark) !important;
			border-bottom: 2px solid var(--adm-teal) !important;
		}
		#wpadminbar .ab-item,
		#wpadminbar a.ab-item,
		#wpadminbar > #wp-toolbar span.ab-label,
		#wpadminbar .ab-top-menu > li > .ab-item { color: rgba(255,255,255,0.85) !important; }
		#wpadminbar .ab-top-menu > li:hover > .ab-item,
		#wpadminbar .ab-top-menu > li.hover > .ab-item { background: var(--adm-teal) !important; color: #fff !important; }
		#wpadminbar .ab-top-menu > li > .ab-sub-wrapper {
			background: var(--adm-dark) !important;
			border-top: 2px solid var(--adm-teal) !important;
			border-radius: 0 0 var(--adm-radius) var(--adm-radius);
		}

		/* Sidebar */
		#adminmenuback, #adminmenuwrap, #adminmenu { background: var(--adm-sidebar) !important; }

		#adminmenu::before {
			content: '';
			display: block;
			width: 120px; height: 48px;
			background-image: url('<?php echo esc_url( $logo_url ); ?>');
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;
			margin: 16px auto 12px;
			filter: brightness(0) invert(1);
			opacity: 0.9;
		}

		#adminmenu a, #adminmenu .wp-menu-name { color: rgba(255,255,255,0.72) !important; transition: color .18s ease; }

		#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,
		#adminmenu li.current a.menu-top,
		#adminmenu .wp-menu-arrow,
		#adminmenu .wp-menu-arrow div { background: var(--adm-teal) !important; color: #fff !important; }

		#adminmenu li.menu-top:hover,
		#adminmenu li.opensub > .wp-submenu-head { background: rgba(97,160,149,0.18) !important; }
		#adminmenu li.menu-top:hover > a,
		#adminmenu li:hover > a { color: #fff !important; }

		#adminmenu .wp-submenu { background: var(--adm-sidebar2) !important; }
		#adminmenu .wp-submenu a { color: rgba(255,255,255,0.6) !important; }
		#adminmenu .wp-submenu a:hover,
		#adminmenu .wp-submenu li.current a { color: var(--adm-teal) !important; }

		#adminmenu li.current > a,
		#adminmenu li.wp-has-current-submenu > a { border-right: 3px solid #fff !important; }
		#adminmenu .wp-menu-separator { background: rgba(255,255,255,0.06) !important; }

		/* Content */
		#wpcontent, #wpfooter { background: var(--adm-bg) !important; }

		.postbox, #dashboard-widgets .postbox, .meta-box-sortables .postbox {
			background: var(--adm-white) !important;
			border: none !important;
			border-radius: 14px !important;
			box-shadow: var(--adm-shadow) !important;
			overflow: hidden;
		}
		.postbox .postbox-header { background: var(--adm-white) !important; border-bottom: 1px solid #eaf0ef !important; padding: 14px 18px !important; }
		.postbox .postbox-header h2, .postbox h2.hndle {
			font-family: <?php echo $font_family; ?> !important;
			font-size: 15px !important; font-weight: 700 !important; color: var(--adm-text) !important;
		}

		.wrap h1, .wp-heading-inline { font-size: 22px !important; font-weight: 800 !important; color: var(--adm-text) !important; }

		/* Buttons */
		.button-primary {
			background: var(--adm-teal) !important;
			border-color: var(--adm-teal-dk) !important;
			color: #fff !important;
			font-family: <?php echo $font_family; ?> !important;
			font-weight: 700 !important;
			border-radius: 8px !important;
			box-shadow: none !important;
			text-shadow: none !important;
			transition: background .2s ease !important;
		}
		.button-primary:hover { background: var(--adm-teal-dk) !important; border-color: var(--adm-teal-dk) !important; }
		.button-secondary, .button { font-family: <?php echo $font_family; ?> !important; border-radius: 8px !important; box-shadow: none !important; }

		/* Tables */
		.wp-list-table { background: var(--adm-white) !important; border-radius: 14px !important; box-shadow: var(--adm-shadow) !important; border: none !important; overflow: hidden; }
		.wp-list-table thead th, .wp-list-table thead td {
			background: var(--adm-teal-lt) !important;
			color: var(--adm-teal-dk) !important;
			font-weight: 700 !important; font-size: 13px !important;
			border-bottom: 1px solid #c8dedd !important;
		}
		.wp-list-table tbody tr:hover td { background: #f7fbfa !important; }
		.wp-list-table .check-column input[type="checkbox"] { accent-color: var(--adm-teal); }

		/* Notices */
		.notice, div.updated, div.error {
			border-radius: var(--adm-radius) !important;
			border-left: none !important;
			border-right: 4px solid var(--adm-teal) !important;
			box-shadow: var(--adm-shadow) !important;
			font-family: <?php echo $font_family; ?> !important;
		}
		div.error { border-right-color: #e74c3c !important; }

		/* Inputs */
		input[type="text"], input[type="email"], input[type="search"],
		input[type="url"], input[type="number"], textarea, select {
			border-radius: 8px !important;
			border-color: #d4e3e1 !important;
			font-family: <?php echo $font_family; ?> !important;
			transition: border-color .2s, box-shadow .2s !important;
		}
		input[type="text"]:focus, input[type="email"]:focus, textarea:focus, select:focus {
			border-color: var(--adm-teal) !important;
			box-shadow: 0 0 0 2px rgba(97,160,149,0.2) !important;
		}

		/* Footer */
		#wpfooter { border-top: 1px solid #dce9e8 !important; font-family: <?php echo $font_family; ?> !important; color: var(--adm-text2) !important; font-size: 12px !important; }
	</style>
	<?php
}
add_action( 'admin_head', 'fikrtak_admin_styles' );
