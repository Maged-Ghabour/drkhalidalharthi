<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( get_theme_mod( 'fikrtak_enable_preloader', true ) ) : ?>
<!-- PRELOADER -->
<div id="preloader">
  <div class="preloader-logo">
    <?php 
    if ( has_custom_logo() ) {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( $logo ) {
          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="pulsing-logo" />';
        } else {
          echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" class="pulsing-logo" />';
        }

    } else {
        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" class="pulsing-logo" />';
    }
    ?>
  </div>
</div>
<?php endif; ?>

<?php if ( is_front_page() ) : ?>
  <!-- ===== HERO ===== -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-inner">
<?php else : ?>
  <div class="container">
    <div class="hero-inner inner-page-header">
<?php endif; ?>

        <!-- ===== HEADER ===== -->
        <header class="header" id="header">
          <nav class="nav">
            <div class="nav-logo">
              <?php 
              if ( has_custom_logo() ) {
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  if ( $logo ) {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="custom-logo-link"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="logo-img" /></a>';
                  }
              } else {
                  echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" class="logo-img" /></a>';
              }
              ?>
            </div>


            
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
                'menu_id'        => 'navLinks',
                'fallback_cb'    => false,
            ) );
            ?>

            <button class="hamburger" id="hamburger" aria-label="القائمة">
              <span></span><span></span><span></span>
            </button>
          </nav>
        </header>

<?php if ( ! is_front_page() ) : ?>
    </div>
  </div>
<?php endif; ?>
