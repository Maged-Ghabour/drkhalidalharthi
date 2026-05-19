<?php
/**
 * Template Name: جراحة أورام العظام
 * Template Post Type: page
 *
 * Dedicated template for the "جراحة أورام العظام" inner page.
 */

get_header();
?>

<!-- ===== HERO SECTION ===== -->
<section class="ip-hero bt-hero" id="bt-hero">
  <div class="container">
    <div class="ip-hero-banner bt-hero-banner"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/followupBG.png');">

      <div class="ip-hero-content bt-hero-content fade-in">
        <h1 class="ip-hero-title bt-hero-title">دقة جراحية تحمي وظيفتك الحركية</h1>
        <p class="ip-hero-sub bt-hero-sub">
          تخصص جراحي متكامل في استئصال أورام العظام والأنسجة الرخوة<br>
          مع الحفاظ على الطرف المصاب وإعادة بناء الوظيفة الحركية الكاملة.
        </p>
        <div class="ip-hero-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="btHeroCtaBtn">
            ابدأ الاستشارة
          </a>
        </div>
      </div>

    </div><!-- .ip-hero-banner -->
  </div><!-- .container -->
</section>
<!-- ===== END HERO SECTION ===== -->


<!-- ===== ABOUT BONE TUMOR SURGERY SECTION ===== -->
<section class="bt-about fade-in" id="bt-about"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png');">
  <div class="bt-about-overlay"></div>
  <div class="container" style="position: relative; z-index: 2;">

    <div class="bt-about-inner">

      <!-- Right: Stats + Title + Description -->
      <div class="bt-about-text">

        <!-- Big Stats Row -->
        <div class="bt-about-stats">
          <div class="bt-about-stat">
            <span class="bt-stat-num">+<span class="counter" data-target="13">0</span></span>
            <span class="bt-stat-lbl">سنة خبرة</span>
          </div>
          <div class="bt-about-stat">
            <span class="bt-stat-num">+<span class="counter" data-target="1000" data-format-k="true">0</span></span>
            <span class="bt-stat-lbl">عملية ناجحة</span>
          </div>
        </div>

        <span class="bt-about-tag">ماذا نقدم؟</span>
        <h2 class="bt-about-title">جراحة أورام العظام</h2>
        <p class="bt-about-desc">
          تُعد جراحة أورام العظام من أعقد التخصصات الجراحية التي تتطلب دقة بالغة وخبرة موسعة. يشمل العلاج استئصال
          الورم مع الحفاظ على الطرف المصاب قدر الإمكان، وإعادة بناء العظم باستخدام أحدث التقنيات الجراحية.
        </p>
        <p class="bt-about-desc">
          يملك الدكتور خالد زمالة دولية متخصصة في جراحة أورام العظام من إيطاليا، مما يؤهله لإجراء أصعب العمليات
          بمستوى عالمي.
        </p>

      </div>

      <!-- Left: Feature icon boxes -->
      <div class="bt-about-features-col">
        <div class="bt-feature-box">
          <div class="bt-feature-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
          </div>
          <div class="bt-feature-text">
            <h4>استئصال الورم بدقة عالية</h4>
            <p>إزالة الورم بهوامش آمنة مع الحفاظ على الأنسجة السليمة المجاورة.</p>
          </div>
        </div>

        <div class="bt-feature-box">
          <div class="bt-feature-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="">
          </div>
          <div class="bt-feature-text">
            <h4>إعادة بناء العظم والمفصل</h4>
            <p>استخدام بدائل عظمية وطرف صناعية متطورة لاستعادة الوظيفة الحركية.</p>
          </div>
        </div>

        <div class="bt-feature-box">
          <div class="bt-feature-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="">
          </div>
          <div class="bt-feature-text">
            <h4>الحفاظ على الطرف المصاب</h4>
            <p>تفادي البتر وإيجاد حلول جراحية تحافظ على الطرف وجودة حياة المريض.</p>
          </div>
        </div>

        <div class="bt-feature-box">
          <div class="bt-feature-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
          </div>
          <div class="bt-feature-text">
            <h4>متابعة شاملة بعد العلاج</h4>
            <p>برنامج متكامل للمتابعة يشمل فحوصات دورية وتأهيل وظيفي مستمر.</p>
          </div>
        </div>
      </div>

    </div><!-- .bt-about-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END ABOUT SECTION ===== -->


<!-- ===== INDICATIONS SECTION ===== -->
<section class="bt-indications fade-in" id="bt-indications">
  <div class="container">

    <div class="ms-indications-inner">

      <!-- Right: Title column -->
      <div class="ms-indications-text">
        <span class="ms-section-tag">متى تلجأ للعلاج؟</span>
        <h2 class="ms-section-title">متى يحتاج المريض<br>لهذه الجراحة؟</h2>
        <p class="ms-section-desc">
          تُستخدم جراحة أورام العظام في حالات محددة تستوجب التدخل الجراحي المتخصص.
        </p>
      </div>

      <!-- Left: Cards column -->
      <div class="ms-indications-cards">

        <div class="ms-indication-card">
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">الأورام الأولية في العظام</h3>
            <ul class="ms-indication-list">
              <li>ساركوما العظم (Osteosarcoma)</li>
              <li>الساركوما الغضروفية</li>
              <li>ورم يوينج في العظام</li>
            </ul>
          </div>
        </div>

        <div class="ms-indication-card">
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">الأورام الثانوية والانتشارية</h3>
            <ul class="ms-indication-list">
              <li>انتشار الأورام الأخرى للعظام</li>
              <li>الكسور المرضية الناتجة عن الورم</li>
              <li>الأورام المهددة للاستقرار الهيكلي</li>
            </ul>
          </div>
        </div>

        <div class="ms-indication-card">
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">أورام الأنسجة الرخوة</h3>
            <ul class="ms-indication-list">
              <li>الأورام المجاورة للعظام</li>
              <li>الأورام الليفية الضخمة</li>
              <li>الساركوما الرخوة المعقدة</li>
            </ul>
          </div>
        </div>

      </div><!-- .ms-indications-cards -->
    </div><!-- .ms-indications-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END INDICATIONS SECTION ===== -->


<!-- ===== TREATMENT STAGES SECTION (2x2 Grid) ===== -->
<section class="bt-stages fade-in" id="bt-stages">
  <div class="container">

    <div class="bt-stages-inner">

      <!-- Right: Title -->
      <div class="bt-stages-text">
        <span class="ms-section-tag">مراحل العلاج</span>
        <h2 class="ms-section-title">مراحل العلاج<br>والجراحة</h2>
        <p class="ms-section-desc">
          أربع مراحل علاجية متكاملة تضمن أفضل نتيجة وأعلى جودة حياة ممكنة بعد الجراحة.
        </p>
      </div>

      <!-- Left: 2x2 grid stages -->
      <div class="bt-stages-grid">

        <div class="bt-stage-card">
          <div class="bt-stage-header">
            <div class="bt-stage-num">1</div>
            <div class="bt-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
            </div>
          </div>
          <h3 class="bt-stage-title">التشخيص الكامل</h3>
          <p class="bt-stage-desc">تشخيص دقيق يشمل أشعة MRI وCT والخزعة لتحديد نوع الورم ومرحلته.</p>
        </div>

        <div class="bt-stage-card">
          <div class="bt-stage-header">
            <div class="bt-stage-num">2</div>
            <div class="bt-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="">
            </div>
          </div>
          <h3 class="bt-stage-title">خطة الجراحة</h3>
          <p class="bt-stage-desc">تخطيط دقيق للجراحة مع تحديد هوامش الاستئصال وأسلوب إعادة البناء المناسب.</p>
        </div>

        <div class="bt-stage-card">
          <div class="bt-stage-header">
            <div class="bt-stage-num">3</div>
            <div class="bt-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="">
            </div>
          </div>
          <h3 class="bt-stage-title">استئصال الورم</h3>
          <p class="bt-stage-desc">إجراء الجراحة بأعلى دقة لاستئصال الورم مع الحفاظ على الوظيفة الحركية قدر الإمكان.</p>
        </div>

        <div class="bt-stage-card">
          <div class="bt-stage-header">
            <div class="bt-stage-num">4</div>
            <div class="bt-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
            </div>
          </div>
          <h3 class="bt-stage-title">التعافي والمتابعة</h3>
          <p class="bt-stage-desc">متابعة منتظمة مع برنامج تأهيل وظيفي وفحوصات دورية لضمان خلو الجسم من الورم.</p>
        </div>

      </div><!-- .bt-stages-grid -->
    </div><!-- .bt-stages-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END TREATMENT STAGES SECTION ===== -->


<!-- ===== CTA WITH DOCTOR IMAGE SECTION ===== -->
<section class="bt-cta fade-in" id="bt-cta">
  <div class="container">

    <div class="bt-cta-inner">

      <!-- Left: Doctor Image (same as homepage hero) -->
      <div class="hero-img-col bt-cta-img-col">
        <div class="hero-img-wrapper">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero pic.png" alt="د. خالد الحارثي"
            class="hero-img" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero1vector.png" alt="vector"
            class="hero-floating-badge badge-1" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero2vector.png" alt="vector"
            class="hero-floating-badge badge-2" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero3vector.png" alt="vector"
            class="hero-floating-badge badge-3" />
          <div class="hero-floating-badge badge-4">
            <div class="info-card">
              <div class="info-row">
                <div class="info-icon-wrapper"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Icon Container.png" alt="icon">
                </div>
                <div class="info-text">
                  <span class="info-title">مستشفي السعودي الالماني</span>
                </div>
              </div>
              <div class="info-row bg-white">
                <div class="info-icon-wrapper"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon2.png" alt="icon"></div>
                <div class="info-text">
                  <span class="info-title">د - خالد سليم الحارثي</span>
                  <span class="info-sub">طب جامعه ام القري البورد <br>السعودي بجراحه العظام</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Booking Content -->
      <div class="bt-cta-text">
        <span class="bt-cta-tag">هل أنت مستعد؟</span>
        <h2 class="bt-cta-title">احجز استشارة مع<br>د. خالد الحارثي</h2>
        <p class="bt-cta-desc">
          الخطوة الأولى في رحلة علاجك تبدأ باستشارة متخصصة — احصل على تقييم دقيق
          لحالتك وخطة علاجية مخصصة من استشاري أورام العظام الأبرز في المنطقة.
        </p>
        <div class="bt-cta-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary bt-cta-btn-wa" id="btCtaWhatsapp">
            احجز عبر واتساب
          </a>
          <a href="tel:<?php echo esc_attr(get_theme_mod('fikrtak_contact_phone', '966500000000')); ?>" class="btn bt-cta-btn-phone" id="btCtaPhone">
            اتصل بنا
          </a>
        </div>
      </div>

    </div><!-- .bt-cta-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END CTA SECTION ===== -->


<?php get_footer(); ?>
