<?php
/**
 * Template Name: إعادة بناء المفاصل
 * Template Post Type: page
 *
 * Dedicated template for the "إعادة بناء المفاصل" inner page.
 */

get_header();
?>

<!-- ===== HERO SECTION ===== -->
<section class="ip-hero jr-hero" id="jr-hero">
  <div class="container">
    <div class="ip-hero-banner jr-hero-banner"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/followupBG.png');">

      <div class="ip-hero-content jr-hero-content fade-in">
        <h1 class="ip-hero-title jr-hero-title">استعد حركتك بجودة حياة أفضل</h1>
        <p class="ip-hero-sub jr-hero-sub">
          خبرة متخصصة في جراحات إعادة بناء المفاصل لاستعادة الحركة الكاملة<br>
          وتحسين جودة حياتك بأحدث التقنيات وتحت إشراف استشاري خبير.
        </p>
        <div class="ip-hero-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="jrHeroCtaBtn">
            احجز استشارتك الآن
          </a>
        </div>
      </div>

      <!-- Stats Row -->
      <div class="ms-hero-stats">
        <div class="ms-hero-stat">
          <span class="ms-stat-num">+<span class="counter" data-target="13">0</span></span>
          <span class="ms-stat-lbl">سنة خبرة</span>
        </div>
        <div class="ms-hero-stat-divider"></div>
        <div class="ms-hero-stat">
          <span class="ms-stat-num"><span class="counter" data-target="100">0</span>%</span>
          <span class="ms-stat-lbl">الالتزام بالمعايير</span>
        </div>
        <div class="ms-hero-stat-divider"></div>
        <div class="ms-hero-stat">
          <span class="ms-stat-num">+<span class="counter" data-target="2000" data-format-k="true">0</span></span>
          <span class="ms-stat-lbl">عملية ناجحة</span>
        </div>
      </div>

    </div><!-- .ip-hero-banner -->
  </div><!-- .container -->
</section>
<!-- ===== END HERO SECTION ===== -->


<!-- ===== ABOUT JOINT RECONSTRUCTION SECTION ===== -->
<section class="jr-about fade-in" id="jr-about"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png');">
  <div class="jr-about-overlay"></div>
  <div class="container" style="position: relative; z-index: 2;">

    <div class="jr-about-inner">

      <!-- Right: Title + Description + Feature boxes -->
      <div class="jr-about-text">
        <span class="jr-about-tag">ماذا نقدم؟</span>
        <h2 class="jr-about-title">جراحة إعادة بناء<br>المفاصل</h2>
        <p class="jr-about-desc">
          تُعد جراحة إعادة بناء المفاصل من أكثر التخصصات تقدماً في طب العظام، إذ تهدف إلى استعادة وظيفة المفصل
          التالف أو المريض وإعادة المريض لممارسة حياته الطبيعية بأقل ألم وأعلى أداء حركي.
        </p>

        <div class="jr-about-features">
          <div class="jr-feature-box">
            <div class="jr-feature-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
            </div>
            <span>استرداد نطاق الحركة الطبيعية</span>
          </div>
          <div class="jr-feature-box">
            <div class="jr-feature-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="">
            </div>
            <span>استقرار تركيزنا على أمن المريض</span>
          </div>
          <div class="jr-feature-box">
            <div class="jr-feature-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="">
            </div>
            <span>مناقشة الألم، ألم حياة المريض</span>
          </div>
        </div>
      </div>

      <!-- Left: Numbered Reasons List -->
      <div class="jr-about-list-col">
        <div class="jr-about-item">
          <div class="jr-item-num">1</div>
          <div class="jr-item-body">
            <h3 class="jr-item-title">تآكل أو هشاشة عظام في المفصل</h3>
            <p class="jr-item-desc">من أبرز الأسباب التي تستدعي إعادة بناء المفصل هشاشة العظام والتآكل المزمن.</p>
          </div>
        </div>

        <div class="jr-about-item">
          <div class="jr-item-num">2</div>
          <div class="jr-item-body">
            <h3 class="jr-item-title">إصابات أشعة أو مقعد في المفصل</h3>
            <p class="jr-item-desc">إصابات الكسور أو الخلع الشديدة التي تضر بنية المفصل وتستلزم تدخلاً جراحياً.</p>
          </div>
        </div>

        <div class="jr-about-item">
          <div class="jr-item-num">3</div>
          <div class="jr-item-body">
            <h3 class="jr-item-title">التهابات أشرة أو عدم استقرار في المفصل</h3>
            <p class="jr-item-desc">الالتهابات المزمنة مثل الروماتيزم وعدم استقرار المفصل قد يتطلبان إعادة بناء كاملة.</p>
          </div>
        </div>

        <div class="jr-about-item">
          <div class="jr-item-num">4</div>
          <div class="jr-item-body">
            <h3 class="jr-item-title">فشل العلاج الدوائي أو الطبيعي</h3>
            <p class="jr-item-desc">عند استنفاد جميع الخيارات التحفظية دون تحسن ملحوظ، تصبح الجراحة الخيار الأمثل.</p>
          </div>
        </div>
      </div>

    </div><!-- .jr-about-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END ABOUT SECTION ===== -->


<!-- ===== WHY DR. KHALID SECTION ===== -->
<section class="jr-why fade-in" id="jr-why">
  <div class="container">

    <div class="jr-why-inner">

      <!-- Right: Title + Why list -->
      <div class="jr-why-text">
        <span class="ms-section-tag">لماذا نتميز؟</span>
        <h2 class="jr-why-title">لماذا تختار<br>د. خالد الحارثي؟</h2>
        <p class="jr-why-desc">
          يملك الدكتور خالد خبرة موسعة في جراحات إعادة بناء المفاصل المعقدة، مع تدريب دولي رفيع في هذا التخصص
          يضعه في طليعة أطباء العظام في المنطقة.
        </p>
      </div>

      <!-- Left: Stat cards + features -->
      <div class="jr-why-cards">

        <div class="jr-why-stat-card">
          <span class="jr-stat-num">+<span class="counter" data-target="13">0</span></span>
          <span class="jr-stat-lbl">خبرة سنة</span>
        </div>

        <div class="jr-why-feature-card">
          <div class="jr-feature-item">
            <div class="jr-feature-item-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
            </div>
            <div>
              <h4>أحدث التقنيات</h4>
              <p>أجهزة ومعدات جراحية حديثة لإعادة بناء المفاصل بدقة عالية وأقل تدخل.</p>
            </div>
          </div>
          <div class="jr-feature-item">
            <div class="jr-feature-item-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="">
            </div>
            <div>
              <h4>دقة التشخيص</h4>
              <p>تقييم شامل ودقيق لحالة المفصل قبل اختيار أنسب أسلوب جراحي ممكن.</p>
            </div>
          </div>
          <div class="jr-feature-item">
            <div class="jr-feature-item-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="">
            </div>
            <div>
              <h4>خبرة واسعة</h4>
              <p>أكثر من 13 سنة في جراحة العظام والمفاصل تجعله أحد أبرز المتخصصين.</p>
            </div>
          </div>
        </div>

      </div><!-- .jr-why-cards -->
    </div><!-- .jr-why-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END WHY SECTION ===== -->


<!-- ===== TREATMENT JOURNEY SECTION ===== -->
<section class="jr-journey fade-in" id="jr-journey">
  <div class="container">

    <div class="jr-journey-inner">

      <!-- Right: Title -->
      <div class="jr-journey-text">
        <span class="ms-section-tag">مراحل العلاج</span>
        <h2 class="ms-section-title">رحلة العلاج خطوة<br>بخطوة</h2>
        <p class="ms-section-desc">
          ثلاث مراحل متتابعة ومتكاملة نضمن من خلالها أفضل نتيجة ممكنة لكل مريض.
        </p>
      </div>

      <!-- Left: Steps -->
      <div class="jr-journey-steps">

        <div class="ms-stage-card">
          <div class="ms-stage-num">1</div>
          <div class="ms-stage-body">
            <div class="ms-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="التشخيص والتقييم">
            </div>
            <div class="ms-stage-content">
              <h3 class="ms-stage-title">التشخيص والتقييم</h3>
              <p class="ms-stage-desc">فحص شامل وتصوير دقيق لتحديد درجة تلف المفصل وتحديد أفضل خيار جراحي مناسب لحالتك.</p>
            </div>
          </div>
        </div>

        <div class="ms-stage-card">
          <div class="ms-stage-num">2</div>
          <div class="ms-stage-body">
            <div class="ms-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="الجراحة العلاجية">
            </div>
            <div class="ms-stage-content">
              <h3 class="ms-stage-title">الجراحة العلاجية</h3>
              <p class="ms-stage-desc">إجراء الجراحة بأحدث تقنيات إعادة البناء لاستعادة وظيفة المفصل مع الحفاظ على الأنسجة السليمة.</p>
            </div>
          </div>
        </div>

        <div class="ms-stage-card">
          <div class="ms-stage-num">3</div>
          <div class="ms-stage-body">
            <div class="ms-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="التعافي والحركة">
            </div>
            <div class="ms-stage-content">
              <h3 class="ms-stage-title">التعافي والحركة</h3>
              <p class="ms-stage-desc">برنامج تأهيل متكامل بعد الجراحة لاستعادة الحركة الكاملة والعودة لممارسة الأنشطة اليومية.</p>
            </div>
          </div>
        </div>

      </div><!-- .jr-journey-steps -->
    </div><!-- .jr-journey-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END TREATMENT JOURNEY SECTION ===== -->


<!-- ===== CTA SECTION ===== -->
<section class="jr-cta fade-in" id="jr-cta">
  <div class="container">
    <div class="jr-cta-inner">
      <span class="jr-cta-tag">هل أنت مستعد؟</span>
      <h2 class="jr-cta-title">احجز استشارتك مع<br>د. خالد الحارثي</h2>
      <p class="jr-cta-desc">
        الخطوة الأولى نحو حياة خالية من الألم تبدأ من هنا — تواصل معنا الآن<br>
        واحجز موعدك مع استشاري العظام الأفضل.
      </p>
      <div class="jr-cta-btns">
        <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary jr-cta-btn-primary" id="jrCtaWhatsapp">
          احجز عبر واتساب
        </a>
        <a href="tel:<?php echo esc_attr(get_theme_mod('fikrtak_contact_phone', '966500000000')); ?>" class="btn jr-cta-btn-outline" id="jrCtaPhone">
          اتصل بنا
        </a>
      </div>
    </div>
  </div>
</section>
<!-- ===== END CTA SECTION ===== -->


<?php get_footer(); ?>
