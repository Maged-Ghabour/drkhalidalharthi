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

<!-- PRELOADER -->
<div id="preloader">
  <div class="loader"></div>
</div>

<?php if ( is_front_page() || is_home() ) : ?>
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
                  the_custom_logo();
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
