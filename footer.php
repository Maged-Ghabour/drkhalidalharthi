<?php
/**
 * The template for displaying the footer
 */
?>
  <!-- ===== FOOTER ===== -->
  <footer class="footer" id="contact" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer-bg.png'); background-size: cover; background-position: center;">
    <div class="container">
      <!-- CTA Content Inside Footer -->
      <div class="cta-inner-footer">
        <h2 class="cta-title">دعونا نتعاون لتحقيق<br />المعرفة الطبية لطرق العلاج</h2>
        <div class="cta-form">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-outline-white">
            استشارة عبر واتساب
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
          </a>
          <div class="email-group">
            <input type="email" placeholder="البريد الالكتروني" class="email-input" id="emailInput" />
            <button class="cta-subscribe" id="subscribeBtn">اشترك الان ←</button>
          </div>
        </div>
      </div>

      <div class="footer-grid">
        <div class="footer-brand">
          <?php 
          $footer_logo = get_theme_mod( 'fikrtak_footer_logo' );
          if ( $footer_logo ) {
              echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url( $footer_logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="footer-logo" /></a>';
          } elseif ( has_custom_logo() ) {
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if ( $logo ) {
                  echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="custom-logo-link"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="footer-logo" /></a>';
              }
          } else {
              echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url(get_template_directory_uri()) . '/assets/images/logoFooter.png" alt="' . esc_attr(get_bloginfo('name')) . '" class="footer-logo" /></a>';
          }
          ?>


          <p class="footer-desc"><?php echo esc_html(get_theme_mod('fikrtak_footer_desc', 'استشاري جراحة أورام العظام وإعادة بناء المفاصل')); ?></p>
        </div>

        
        <div class="footer-col">
          <h4>التواصل</h4>
          <ul class="footer-links-with-icon">
            <?php 
            $email = get_theme_mod('fikrtak_contact_email', 'info@drkhalid.com');
            $phone = get_theme_mod('fikrtak_contact_phone', '966123456789');
            $mobile = get_theme_mod('fikrtak_contact_mobile', '966500000000');
            $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000');
            ?>
            <li><a href="mailto:<?php echo esc_attr($email); ?>"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> إيميل</a></li>
            <li><a href="tel:<?php echo esc_attr($phone); ?>"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> هاتف</a></li>
            <li><a href="tel:<?php echo esc_attr($mobile); ?>"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg> جوال</a></li>
            <li><a href="https://wa.me/<?php echo esc_attr($wa); ?>"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg> واتساب</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>الخدمات</h4>
          <ul>
            <li><a href="#services">إستشارة</a></li>
            <li><a href="#articles">المدونه</a></li>
            <li><a href="#articles">الاخبار</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>سوشيل ميديا</h4>
          <ul class="footer-links-with-icon">
            <?php 
            $fb = get_theme_mod('fikrtak_social_facebook');
            $ig = get_theme_mod('fikrtak_social_instagram');
            $tk = get_theme_mod('fikrtak_social_tiktok');
            $yt = get_theme_mod('fikrtak_social_youtube');
            $x  = get_theme_mod('fikrtak_social_x');

            if ($fb) echo '<li><a href="' . esc_url($fb) . '"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg> Facebook</a></li>';
            if ($tk) echo '<li><a href="' . esc_url($tk) . '"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg> Tiktok</a></li>';
            if ($ig) echo '<li><a href="' . esc_url($ig) . '"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg> Instagram</a></li>';
            if ($yt) echo '<li><a href="' . esc_url($yt) . '"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg> Youtube</a></li>';
            if ($x)  echo '<li><a href="' . esc_url($x) . '"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l11.733 16h4.267l-11.733 -16z"/><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/></svg> X (Twitter)</a></li>';
            ?>
          </ul>
        </div>

      </div>
      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> د. خالد الحارثي. جميع الحقوق محفوظة.</p>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
