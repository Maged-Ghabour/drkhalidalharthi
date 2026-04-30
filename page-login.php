<?php
/**
 * Template Name: صفحة تسجيل الدخول
 * Description: Custom styled login page
 */

// إذا كان المستخدم مسجلاً دخوله، أعد توجيهه للصفحة الرئيسية
if ( is_user_logged_in() ) {
    wp_redirect( home_url('/') );
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>تسجيل الدخول &mdash; <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <style>
    /* ===== LOGIN PAGE STYLES ===== */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body.login-page {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0d2626 0%, #1a3d3a 50%, #0d2626 100%);
      font-family: 'Almarai', sans-serif;
      direction: rtl;
      position: relative;
      overflow: hidden;
    }

    /* خلفية زخرفية */
    body.login-page::before {
      content: '';
      position: absolute;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(97,160,149,0.15) 0%, transparent 70%);
      top: -150px;
      right: -150px;
      pointer-events: none;
    }
    body.login-page::after {
      content: '';
      position: absolute;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(97,160,149,0.1) 0%, transparent 70%);
      bottom: -100px;
      left: -100px;
      pointer-events: none;
    }

    .login-wrapper {
      display: flex;
      width: 100%;
      max-width: 960px;
      min-height: 540px;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 30px 80px rgba(0,0,0,0.4);
      position: relative;
      z-index: 1;
      margin: 20px;
    }

    /* ── الجانب الأيمن: معلومات ── */
    .login-side {
      flex: 1;
      background: linear-gradient(160deg, #61a095 0%, #3d7d73 100%);
      padding: 56px 44px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
    }

    .login-side::before {
      content: '';
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: rgba(255,255,255,0.06);
      bottom: -80px;
      left: -80px;
    }
    .login-side::after {
      content: '';
      position: absolute;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
      top: -60px;
      right: -60px;
    }

    .login-side-logo img {
      height: 52px;
      width: auto;
      filter: brightness(0) invert(1);
    }

    .login-side-content {
      position: relative;
      z-index: 1;
    }

    .login-side-title {
      font-size: 28px;
      font-weight: 800;
      color: #fff;
      line-height: 1.4;
      margin-bottom: 16px;
    }

    .login-side-desc {
      font-size: 14px;
      color: rgba(255,255,255,0.75);
      line-height: 1.8;
    }

    .login-side-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255,255,255,0.15);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 50px;
      padding: 8px 18px;
      color: #fff;
      font-size: 13px;
      font-weight: 600;
      margin-top: 28px;
    }

    .login-side-badge svg { flex-shrink: 0; }

    /* ── الجانب الأيسر: النموذج ── */
    .login-form-side {
      flex: 1;
      background: #fff;
      padding: 56px 48px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .login-form-header {
      margin-bottom: 36px;
    }

    .login-form-header h1 {
      font-size: 26px;
      font-weight: 800;
      color: #1a2e2d;
      margin-bottom: 8px;
    }

    .login-form-header p {
      font-size: 14px;
      color: #6b7c7b;
    }

    .login-field {
      margin-bottom: 20px;
    }

    .login-field label {
      display: block;
      font-size: 13px;
      font-weight: 700;
      color: #1a2e2d;
      margin-bottom: 8px;
    }

    .login-field input {
      width: 100%;
      padding: 13px 16px;
      border: 1.5px solid #e0e8e7;
      border-radius: 10px;
      font-family: 'Almarai', sans-serif;
      font-size: 14px;
      color: #1a2e2d;
      background: #f8fcfb;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
      direction: rtl;
      outline: none;
    }

    .login-field input:focus {
      border-color: #61a095;
      box-shadow: 0 0 0 3px rgba(97,160,149,0.15);
      background: #fff;
    }

    .login-remember-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 28px;
    }

    .login-remember {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: #4a5e5d;
      cursor: pointer;
    }

    .login-remember input[type="checkbox"] {
      width: 16px;
      height: 16px;
      accent-color: #61a095;
      cursor: pointer;
    }

    .login-forgot {
      font-size: 13px;
      color: #61a095;
      font-weight: 600;
      text-decoration: none;
    }

    .login-forgot:hover { text-decoration: underline; }

    .login-submit-btn {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #61a095 0%, #3d7d73 100%);
      color: #fff;
      font-family: 'Almarai', sans-serif;
      font-size: 15px;
      font-weight: 700;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: opacity 0.2s ease, transform 0.2s ease;
    }

    .login-submit-btn:hover {
      opacity: 0.92;
      transform: translateY(-1px);
    }

    .login-error {
      background: #fff0f0;
      border: 1px solid #ffcccc;
      border-radius: 10px;
      padding: 12px 16px;
      font-size: 13px;
      color: #c0392b;
      margin-bottom: 20px;
    }

    .login-back {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin-top: 24px;
      font-size: 13px;
      color: #6b7c7b;
      text-decoration: none;
    }

    .login-back:hover { color: #61a095; }

    @media (max-width: 700px) {
      .login-side { display: none; }
      .login-form-side { padding: 40px 28px; }
      .login-wrapper { border-radius: 16px; }
    }
  </style>
</head>

<body class="login-page">

<div class="login-wrapper">

  <!-- الجانب الأيمن: معلومات الثيم -->
  <div class="login-side">
    <div class="login-side-logo">
      <?php
      if ( has_custom_logo() ) {
          $logo_id  = get_theme_mod('custom_logo');
          $logo_src = wp_get_attachment_image_src( $logo_id, 'full' );
          echo '<img src="' . esc_url($logo_src[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
      } else {
          echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '">';
      }
      ?>
    </div>

    <div class="login-side-content">
      <h2 class="login-side-title">مرحباً بعودتك<br>إلى لوحة التحكم</h2>
      <p class="login-side-desc">سجّل دخولك للوصول إلى لوحة التحكم وإدارة محتوى الموقع بكل سهولة.</p>
      <div class="login-side-badge">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
        اتصال آمن ومشفّر
      </div>
    </div>

    <p style="font-size:12px;color:rgba(255,255,255,0.4);">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>

  <!-- الجانب الأيسر: نموذج الدخول -->
  <div class="login-form-side">
    <div class="login-form-header">
      <h1>تسجيل الدخول</h1>
      <p>أدخل بيانات حسابك للمتابعة</p>
    </div>

    <?php
    // عرض رسالة الخطأ إن وجدت
    $login_error = '';
    if ( isset($_GET['login']) && $_GET['login'] === 'failed' ) {
        $login_error = 'اسم المستخدم أو كلمة المرور غير صحيحة. حاول مرة أخرى.';
    }
    if ( $login_error ) :
    ?>
    <div class="login-error"><?php echo esc_html($login_error); ?></div>
    <?php endif; ?>

    <form method="post" action="<?php echo esc_url( site_url('wp-login.php', 'login_post') ); ?>">
      <div class="login-field">
        <label for="user_login">اسم المستخدم أو البريد الإلكتروني</label>
        <input type="text" id="user_login" name="log" required placeholder="أدخل اسم المستخدم" autocomplete="username" />
      </div>

      <div class="login-field">
        <label for="user_pass">كلمة المرور</label>
        <input type="password" id="user_pass" name="pwd" required placeholder="أدخل كلمة المرور" autocomplete="current-password" />
      </div>

      <div class="login-remember-row">
        <label class="login-remember">
          <input type="checkbox" name="rememberme" value="forever" />
          تذكّرني
        </label>
        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="login-forgot">نسيت كلمة المرور؟</a>
      </div>

      <input type="hidden" name="redirect_to" value="<?php echo esc_url( admin_url() ); ?>" />
      <?php wp_nonce_field('custom-login-nonce', '_wpnonce_login'); ?>

      <button type="submit" class="login-submit-btn">دخول ←</button>
    </form>

    <a href="<?php echo esc_url( home_url('/') ); ?>" class="login-back">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M19 12H5M12 5l-7 7 7 7"/>
      </svg>
      العودة إلى الصفحة الرئيسية
    </a>
  </div>

</div>

<?php wp_footer(); ?>
</body>
</html>
