<?php
/**
 * Template Name: الجراحات الدقيقة للعظام
 * Template Post Type: page
 *
 * Dedicated template for the "الجراحات الدقيقة للعظام" inner page.
 */

get_header();
?>

<!-- ===== HERO SECTION ===== -->
<section class="ip-hero ms-hero" id="ms-hero">
  <div class="container">
    <div class="ip-hero-banner ms-hero-banner">
      <div class="ip-hero-content ms-hero-content fade-in">
        <h1 class="ip-hero-title ms-hero-title">الجراحات الدقيقة للعظام</h1>
        <p class="ip-hero-sub ms-hero-sub">
          خبرة متقدمة في الجراحات الدقيقة للعظام وعلاج كسور الأطراف<br>العلوية والسفلية باستخدام أحدث التقنيات الجراحية.
        </p>
        <div class="ip-hero-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="msHeroCtaBtn">
            ابدأ رحلة التعافي
          </a>
        </div>
      </div>

      <!-- Stats Row inside Hero -->
      <div class="ms-hero-stats">
        <div class="ms-hero-stat">
          <span class="ms-stat-num">+<span class="counter" data-target="13">١٣</span></span>
          <span class="ms-stat-lbl">سنة خبرة</span>
        </div>
        <div class="ms-hero-stat-divider"></div>
        <div class="ms-hero-stat">
          <span class="ms-stat-num"><span class="counter" data-target="100">١٠٠</span>%</span>
          <span class="ms-stat-lbl">التزام بالمعايير</span>
        </div>
        <div class="ms-hero-stat-divider"></div>
        <div class="ms-hero-stat">
          <span class="ms-stat-num">+<span class="counter" data-target="2000" data-format-k="true">٢K</span></span>
          <span class="ms-stat-lbl">عملية ناجحة</span>
        </div>
      </div>
    </div><!-- .ip-hero-banner -->
  </div><!-- .container -->
</section>
<!-- ===== END HERO SECTION ===== -->


<!-- ===== WHAT IS MICRO SURGERY (ABOUT) SECTION ===== -->
<section class="ms-about fade-in" id="ms-about">
  <div class="container">

    <div class="ms-about-inner" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png'); background-size: cover; background-position: center; border-radius: 24px; padding: 60px 48px; overflow: hidden; position: relative;">

      <!-- Right: Text Column -->
      <div class="ms-about-text">
        <span class="ms-about-tag">ما هو؟</span>
        <h2 class="ms-about-title">ما المقصود بالجراحات<br>الدقيقة للعظام؟</h2>
        <p class="ms-about-desc">
          الجراحات الدقيقة للعظام هي تخصص جراحي متقدم يعتمد على استخدام المناظير والأجهزة عالية الدقة لإجراء تدخلات
          جراحية بالحد الأدنى من الشقوق وأعلى مستوى من الدقة والأمان.
        </p>
        <p class="ms-about-desc">
          تُستخدم هذه التقنية لعلاج الكسور المعقدة والأورام وإعادة تركيب العظام والأوتار والأعصاب بدقة لا تتحقق بالجراحة
          التقليدية.
        </p>
      </div>

      <!-- Left: Benefits List -->
      <div class="ms-about-list-col">
        <div class="ms-about-benefit">
          <div class="ms-benefit-num">1</div>
          <div class="ms-benefit-body">
            <h3 class="ms-benefit-title">دقة عالية واكثر أمانًا</h3>
            <p class="ms-benefit-desc">
              التقنية الحديثة تتيح رؤية دقيقة جداً للمنطقة المصابة بما يُقلل من خطر إصابة الأنسجة المجاورة
              إلى أدنى مستوى ممكن.
            </p>
          </div>
        </div>

        <div class="ms-about-benefit">
          <div class="ms-benefit-num">2</div>
          <div class="ms-benefit-body">
            <h3 class="ms-benefit-title">تعافٍ أسرع وأكثر أمانًا</h3>
            <p class="ms-benefit-desc">
              حجم الشق الصغير يعني ألماً أقل وتعافياً أسرع وإقامة أقصر في المستشفى مقارنةً
              بالأساليب التقليدية.
            </p>
          </div>
        </div>

        <div class="ms-about-benefit">
          <div class="ms-benefit-num">3</div>
          <div class="ms-benefit-body">
            <h3 class="ms-benefit-title">استعادة الحركة الكاملة</h3>
            <p class="ms-benefit-desc">
              الهدف الأساسي هو إعادة المريض لممارسة حياته الطبيعية بأقل قيود ممكنة وأعلى
              مستوى من الوظيفة الحركية.
            </p>
          </div>
        </div>
      </div>

    </div><!-- .ms-about-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END ABOUT SECTION ===== -->


<!-- ===== INDICATIONS SECTION ===== -->
<section class="ms-indications fade-in" id="ms-indications">
  <div class="container">

    <div class="ms-indications-inner">

      <div class="ms-indications-header">
        <div class="ms-indications-header-right">
          <span class="ms-section-tag">الحالات المعالجة</span>
          <h2 class="ms-section-title">متى يحتاج المريض<br>للجراحات الدقيقة؟</h2>
        </div>
        <div class="ms-indications-header-left">
          <p class="ms-section-desc">
            ليست كل الكسور تتطلب تدخلاً جراحياً دقيقاً —<br>لكن في الحالات التالية يصبح ضرورياً لضمان تعافٍ<br>سليم وعودة كاملة للحركة.
          </p>
        </div>
      </div>

      <!-- Bottom: Cards Row -->
      <div class="ms-indications-cards">

        <div class="ms-indication-card">
          <div class="ms-indication-card-top">
            <span class="ms-indication-pill">كسور الأطراف</span>
            <span class="ms-indication-bg-num">١</span>
          </div>
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/fav1.png" alt="الكسور">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">كسور الأطراف العلوية والسفلية</h3>
            <ul class="ms-indication-list">
              <li>كسور الأطراف العلوية والسفلية</li>
              <li>الكسور المعقدة أو المتعددة</li>
              <li>الكسور المصحوبة بتلف الأنسجة</li>
            </ul>
          </div>
        </div>

        <div class="ms-indication-card">
          <div class="ms-indication-card-top">
            <span class="ms-indication-pill">الكسور غير المستقرة</span>
            <span class="ms-indication-bg-num">٢</span>
          </div>
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/fav2.png" alt="الحالات الدقيقة">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">الحالات التي تتطلب تدخلاً دقيقاً</h3>
            <ul class="ms-indication-list">
              <li>تثبيت أو علاج الكسور جراحياً</li>
              <li>كسور بالقرب من المفاصل الحساسة</li>
              <li>الكسور ذات الشظايا المتعددة</li>
            </ul>
          </div>
        </div>

        <div class="ms-indication-card">
          <div class="ms-indication-card-top">
            <span class="ms-indication-pill">الإصابات والحوادث</span>
            <span class="ms-indication-bg-num">٣</span>
          </div>
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/fav3.png" alt="الأعصاب والأوتار">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">إصابات السقوط والحوادث</h3>
            <ul class="ms-indication-list">
              <li>الإصابات الناتجة عن السقوط أو الحوادث</li>
              <li>حالات لا تستجيب للعلاج التحفظي</li>
              <li>إصابات رياضية معقدة ومتكررة</li>
            </ul>
          </div>
        </div>

      </div><!-- .ms-indications-cards -->
    </div><!-- .ms-indications-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END INDICATIONS SECTION ===== -->


<!-- ===== RECOVERY STAGES SECTION ===== -->
<section class="ms-stages fade-in" id="ms-stages">
  <div class="container">

    <div class="ms-stages-inner">

      <div class="ms-stages-header">
        <div class="ms-stages-header-right">
          <span class="ms-section-tag">خطة العلاج المعتمدة</span>
          <h2 class="ms-section-title">ثلاث مراحل نحو<br>التعافي الكامل</h2>
        </div>
        <div class="ms-stages-header-left">
          <p class="ms-section-desc">
            كل مرحلة مبنية على السابقة — من التشخيص<br>الدقيق إلى العودة الكاملة لممارسة الحياة<br>الطبيعية.
          </p>
        </div>
      </div>

      <div class="ms-stages-timeline">
        <div class="ms-stages-timeline-line"></div>
        <div class="ms-stages-timeline-nodes">
          <div class="ms-stages-node">
            <div class="ms-stages-circle">١</div>
            <div class="ms-stages-pill">المرحلة الأولى</div>
          </div>
          <div class="ms-stages-node">
            <div class="ms-stages-circle">٢</div>
            <div class="ms-stages-pill">المرحلة الثانية</div>
          </div>
          <div class="ms-stages-node">
            <div class="ms-stages-circle">٣</div>
            <div class="ms-stages-pill">المرحلة الثالثة</div>
          </div>
        </div>
      </div>

      <!-- Bottom: Cards column -->
      <div class="ms-stages-cards">

        <div class="ms-stage-card">
          <div class="ms-stage-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi.png" alt="التشخيص والفحص">
          </div>
          <h3 class="ms-stage-title">التشخيص والفحص</h3>
          <p class="ms-stage-desc">تقييم حالة الكسر باستخدام الأشعة والفحوصات اللازمة بدقة تامة لوضع خطة العلاج المثلى.</p>
        </div>

        <div class="ms-stage-card">
          <div class="ms-stage-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi1.png" alt="الجراحة الدقيقة">
          </div>
          <h3 class="ms-stage-title">الجراحة الدقيقة</h3>
          <p class="ms-stage-desc">تثبيت العظام وإعادة ضبطها باستخدام أحدث التقنيات ضمن أعلى معايير جراحة العظام الحديثة.</p>
        </div>

        <div class="ms-stage-card">
          <div class="ms-stage-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi2.png" alt="المتابعة والتأهيل">
          </div>
          <h3 class="ms-stage-title">المتابعة والتأهيل</h3>
          <p class="ms-stage-desc">مراقبة التعافي والبدء في خطة تأهيل لاستعادة الحركة الكاملة وإعادة المريض لحياته الطبيعية.</p>
        </div>

      </div><!-- .ms-stages-cards -->
    </div><!-- .ms-stages-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END RECOVERY STAGES SECTION ===== -->


<!-- ===== WHY DR. KHALID SECTION ===== -->
<section class="ms-why fade-in" id="ms-why">
  <div class="container">

    <div class="ms-why-inner">

      <!-- Right: Stats + Booking Box -->
      <div class="ms-why-stats-col">
        <div class="ms-why-stats-row">
          <div class="ms-why-stat-big">
            <span class="ms-why-stat-num">+<span class="counter" data-target="1">0</span>K</span>
            <span class="ms-why-stat-lbl">جراحة دقيقة ناجحة</span>
          </div>
          <div class="ms-why-stat-big">
            <span class="ms-why-stat-num"><span class="counter" data-target="13">0</span>+</span>
            <span class="ms-why-stat-lbl">استشاري</span>
          </div>
        </div>

        <div class="ms-why-booking-box">
          <p class="ms-why-booking-label">د. خالد الحارثي</p>
          <p class="ms-why-booking-sub">لا مراجعة — فقط دقة واحترافية</p>
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary ms-why-cta-btn">
            احجز الآن عبر واتساب
          </a>
        </div>
      </div>

      <!-- Left: Why List -->
      <div class="ms-why-text-col">
        <span class="ms-section-tag">لماذا نتميز؟</span>
        <h2 class="ms-why-title">لماذا تختار<br>د. خالد الحارثي؟</h2>
        <p class="ms-why-desc">
          يجمع الدكتور خالد بين الخبرة الأكاديمية والتدريب الدولي مع الاستخدام الأمثل
          لأحدث تقنيات الجراحة الدقيقة لخدمة مرضاه بأعلى مستويات الجودة.
        </p>

        <ul class="ms-why-list">
          <li class="ms-why-item">
            <div class="ms-why-item-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
            </div>
            <div class="ms-why-item-text">
              <h4>تدريب دولي متخصص</h4>
              <p>حاصل على زمالات دولية من إيطاليا وأوروبا في جراحة أورام العظام والجراحة الدقيقة.</p>
            </div>
          </li>
          <li class="ms-why-item">
            <div class="ms-why-item-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="">
            </div>
            <div class="ms-why-item-text">
              <h4>تقنيات حديثة متطورة</h4>
              <p>يستخدم أحدث الأجهزة والمناظير الجراحية المتوفرة في المستشفى السعودي الألماني.</p>
            </div>
          </li>
          <li class="ms-why-item">
            <div class="ms-why-item-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="">
            </div>
            <div class="ms-why-item-text">
              <h4>رعاية متواصلة بعد الجراحة</h4>
              <p>يتابع الدكتور كل مريض بشكل شخصي لضمان التعافي الكامل والعودة للحياة الطبيعية.</p>
            </div>
          </li>
          <li class="ms-why-item">
            <div class="ms-why-item-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="">
            </div>
            <div class="ms-why-item-text">
              <h4>شاركنا عبر واتساب مباشرةً</h4>
              <p>تواصل مباشر مع الدكتور للاستفسار والحجز والمتابعة دون وسيط.</p>
            </div>
          </li>
        </ul>
      </div>

    </div><!-- .ms-why-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END WHY SECTION ===== -->


<?php get_footer(); ?>
