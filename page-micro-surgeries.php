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
    <div class="ip-hero-banner ms-hero-banner"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/followupBG.png');">
      <div class="ip-hero-content ms-hero-content fade-in">
        <h1 class="ip-hero-title ms-hero-title">الجراحات الدقيقة للعظام</h1>
        <p class="ip-hero-sub ms-hero-sub">
          تخصص متقدم في أدق العمليات الجراحية للجهاز العظمي بتقنيات حديثة<br>
          لضمان أفضل نتيجة مع الحد الأدنى من التدخل الجراحي.
        </p>
        <div class="ip-hero-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="msHeroCtaBtn">
            ابدأ الاستشارة
          </a>
        </div>
      </div>

      <!-- Stats Row inside Hero -->
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


<!-- ===== WHAT IS MICRO SURGERY (ABOUT) SECTION ===== -->
<section class="ms-about fade-in" id="ms-about"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png');">
  <div class="ms-about-overlay"></div>
  <div class="container" style="position: relative; z-index: 2;">

    <div class="ms-about-inner">

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

      <!-- Right: Title column -->
      <div class="ms-indications-text">
        <span class="ms-section-tag">متى تلجأ للعلاج؟</span>
        <h2 class="ms-section-title">متى يحتاج المريض<br>للجراحات الدقيقة؟</h2>
        <p class="ms-section-desc">
          تُستخدم الجراحة الدقيقة في حالات بعينها تستدعي مستوى عالياً من التخصص والدقة.
        </p>
      </div>

      <!-- Left: Cards column -->
      <div class="ms-indications-cards">

        <div class="ms-indication-card">
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="الكسور">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">الكسور الصعبة والمعقدة</h3>
            <ul class="ms-indication-list">
              <li>كسور العظام الصغيرة في اليد والقدم</li>
              <li>الكسور المفصلية الدقيقة</li>
              <li>الكسور المقترنة بتضرر الأوتار أو الأعصاب</li>
            </ul>
          </div>
        </div>

        <div class="ms-indication-card">
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="الحالات الدقيقة">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">الحالات التشخيصية والدقيقة</h3>
            <ul class="ms-indication-list">
              <li>أورام العظام والأنسجة الرخوة</li>
              <li>إعادة تركيب المفاصل المصابة</li>
              <li>استئصال الأجسام الغريبة الدقيقة</li>
            </ul>
          </div>
        </div>

        <div class="ms-indication-card">
          <div class="ms-indication-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="الأعصاب والأوتار">
          </div>
          <div class="ms-indication-body">
            <h3 class="ms-indication-title">إصابات الأعصاب والأوتار المستعصية</h3>
            <ul class="ms-indication-list">
              <li>تمزق الأوتار الكلي أو الجزئي</li>
              <li>إصابات الأعصاب الطرفية</li>
              <li>الإصابات الرياضية المعقدة</li>
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

      <!-- Right: Title column -->
      <div class="ms-stages-text">
        <span class="ms-section-tag">كيف تتم العملية؟</span>
        <h2 class="ms-section-title">ثلاث مراحل نحو<br>التعافي الكامل</h2>
      </div>

      <!-- Left: Stages column -->
      <div class="ms-stages-cards">

        <div class="ms-stage-card">
          <div class="ms-stage-num">1</div>
          <div class="ms-stage-body">
            <div class="ms-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="التشخيص والفحص">
            </div>
            <div class="ms-stage-content">
              <h3 class="ms-stage-title">التشخيص والفحص</h3>
              <p class="ms-stage-desc">يبدأ الدكتور خالد بتشخيص شامل وتحديد التدخل الجراحي الأنسب بناءً على الأشعة والتاريخ المرضي الكامل للمريض.</p>
            </div>
          </div>
        </div>

        <div class="ms-stage-card">
          <div class="ms-stage-num">2</div>
          <div class="ms-stage-body">
            <div class="ms-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="الجراحة الدقيقة">
            </div>
            <div class="ms-stage-content">
              <h3 class="ms-stage-title">الجراحة الدقيقة</h3>
              <p class="ms-stage-desc">إجراء العملية بأحدث الأجهزة والمناظير الجراحية لضمان أعلى مستوى من الدقة وأدنى تدخل في الأنسجة السليمة.</p>
            </div>
          </div>
        </div>

        <div class="ms-stage-card">
          <div class="ms-stage-num">3</div>
          <div class="ms-stage-body">
            <div class="ms-stage-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="المتابعة والتأهيل">
            </div>
            <div class="ms-stage-content">
              <h3 class="ms-stage-title">المتابعة والتأهيل</h3>
              <p class="ms-stage-desc">برنامج متكامل للمتابعة بعد الجراحة يشمل العلاج الطبيعي وتقييم دوري لضمان استعادة أفضل وظيفة حركية ممكنة.</p>
            </div>
          </div>
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
