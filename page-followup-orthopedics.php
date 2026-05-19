<?php
/**
 * Template Name: متابعة جراحة العظام
 * Template Post Type: page
 *
 * Dedicated template for the "المتابعة بعد جراحة العظام" inner page.
 */

get_header();
?>

<!-- ===== INNER PAGE HERO ===== -->
<section class="ip-hero" id="ip-hero-followup" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/followupBG.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container">
    <!-- Content -->
    <div class="ip-hero-content fade-in">
      <h1 class="ip-hero-title">المتابعة بعد جراحة العظام</h1>
      <p class="ip-hero-sub">
        رعاية دقيقة بعد العملية لضمان التعافي الآمن واستعادة الحركة<br>بأفضل شكل ممكن، بخطوات مدروسة وتحت إشراف استشاري خبير.
      </p>
      <div class="ip-hero-btns">
        <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="ipHeroCtaBtn">
          احجز موعد المتابعة الآن
        </a>
      </div>
    </div>
  </div><!-- .container -->
</section>
<!-- ===== END INNER PAGE HERO ===== -->


<!-- ===== ABOUT / STATS SECTION (Copied & adapted from Home) ===== -->
<section class="stats fade-in" id="ip-about" style="padding-top: 40px; padding-bottom: 60px;">
  <div class="container">
    <div class="stats-inner">
      <!-- Right: Text & Bullets -->
      <div class="stats-text">
        <div class="stats-text-header">
          <h2 style="margin-bottom: 16px;">نتميز بخبرتنا</h2>
        </div>
        <ul class="creds-list">
          <li>حاصل على البورد السعودي لجراحة العظام</li>
          <li>حاصل على الزمالة الدقيقة في جراحة أورام العظام وإعادة بناء المفاصل مستشفى بادوفا في إيطاليا</li>
          <li>حاصل على الزمالة الدقيقة في جراحة أورام العظام واعادة بناء المفاصل مستشفى ديزولي جامعة بولونيا</li>
        </ul>
      </div>

      <!-- Center: CTA Button -->
      <div class="stats-center" style="flex: 0.8; text-align: center;">
        <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" style="white-space: nowrap; font-size: 14px;">
          احجز موعد متابعة الآن
        </a>
      </div>

      <!-- Left: Numbers -->
      <div class="stats-numbers">
        <div class="stat-item">
          <span class="stat-num">+<span class="counter" data-target="13">0</span></span>
          <span class="stat-lbl">سنة خبرة</span>
        </div>

        <div class="stat-item">
          <span class="stat-num"><span class="counter" data-target="100">0</span>%</span>
          <span class="stat-lbl">التزام بالمعايير</span>
        </div>

        <div class="stat-item">
          <span class="stat-num">+<span class="counter" data-target="2000" data-format-k="true">0</span></span>
          <span class="stat-lbl">عملية ناجحة</span>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===== END ABOUT / STATS SECTION ===== -->


<!-- ===== WHY SECTION ===== -->
<section class="ip-why fade-in" id="ip-why" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png');">
  <div class="ip-why-overlay"></div>
  <div class="container" style="position: relative; z-index: 2;">

    <div class="ip-why-inner">
      <!-- Right: Text Column -->
      <div class="ip-why-text">
        <span class="ip-why-small-title">أهمية المتابعة</span>
        <h2 class="ip-why-title">لماذا تُعد المتابعة بعد<br>الجراحة خطوة مهمة</h2>
        <p class="ip-why-desc">
          تُعد متابعة ما بعد العملية جزءًا جوهريًا من نجاح جراحات العظام، حيث تساعد على مراقبة التعافي والتأكد من التئام الحالة بشكل سليم.
        </p>
        <div class="ip-why-extra-box">
          تشمل المتابعة الطبية إجراءات مهمة مثل تغيير الضماد بعد العملية وتقييم استجابة المريض للعلاج — لضمان أفضل نتائج ممكنة.
        </div>
      </div>

      <!-- Left: Cards Column -->
      <div class="ip-why-cards-grid">
        <div class="ip-why-card full-width">
          <div class="ip-why-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <div class="ip-why-card-content">
            <h3 class="ip-why-card-title">الوقاية من المضاعفات</h3>
            <p class="ip-why-card-desc">الكشف المبكر عن أي مشكلات تمنع تطورها قبل أن تؤثر على التعافي.</p>
          </div>
        </div>

        <div class="ip-why-card half-width">
          <div class="ip-why-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg>
          </div>
          <h3 class="ip-why-card-title">متابعة التقدم</h3>
          <p class="ip-why-card-desc">قياس مستمر لمراحل الشفاء وتعديل الخطة حسب التطور.</p>
        </div>

        <div class="ip-why-card half-width">
          <div class="ip-why-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <h3 class="ip-why-card-title">إدارة الألم</h3>
          <p class="ip-why-card-desc">تقييم دقيق للألم وضبط الأدوية لراحة المريض طوال الفترة.</p>
        </div>
      </div>
    </div><!-- .ip-why-inner -->

  </div><!-- .container -->
</section>
<!-- ===== END WHY SECTION ===== -->


<!-- ===== SERVICES SECTION ===== -->
<section class="ip-services" id="ip-services">
  <div class="container">

    <div class="ip-services-header fade-in">
      <span class="section-tag">
        <span class="dot-teal"></span>
        ما نقدمه لك
      </span>
      <h2 class="section-title">ما تشمل المتابعة<br>بعد الجراحة؟</h2>
    </div>

    <div class="ip-services-grid">
      <div class="ip-service-card fade-in">
        <span class="ip-service-num">01</span>
        <h3 class="ip-service-title">تقييم الشق الجراحي والعظام</h3>
        <p class="ip-service-desc">فحص دقيق للجرح وحالة العظم المجبور للتحقق من سير الالتئام بشكل سليم وخالٍ من العوارض.
        </p>
      </div>

      <div class="ip-service-card fade-in">
        <span class="ip-service-num">02</span>
        <h3 class="ip-service-title">متابعة الألم والتورم</h3>
        <p class="ip-service-desc">تقييم مستوى الألم والتورم بعد الجراحة وضبط العلاج الدوائي لضمان راحة المريض وتعافيه.
        </p>
      </div>

      <div class="ip-service-card fade-in">
        <span class="ip-service-num">03</span>
        <h3 class="ip-service-title">مراجعة الأشعة والتقارير</h3>
        <p class="ip-service-desc">تحليل نتائج الأشعة والفحوصات الدورية لمقارنة التطور ورصد أي تغييرات تستوجب التدخل.
        </p>
      </div>

      <div class="ip-service-card fade-in">
        <span class="ip-service-num">04</span>
        <h3 class="ip-service-title">تحديد خطة التأهيل والوظيفة</h3>
        <p class="ip-service-desc">وضع برنامج إعادة تأهيل متكامل يضمن عودة الوظيفة الكاملة للمنطقة المُجراة والعضلات
          المحيطة.</p>
      </div>
    </div><!-- .ip-services-grid -->

    <div class="ip-services-cta fade-in">
      <?php $wa2 = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
      <a href="https://wa.me/<?php echo esc_attr($wa2); ?>" class="btn btn-primary btn-lg" id="ipServiceCtaBtn">
        احجز الآن
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
          stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="5" y1="12" x2="19" y2="12" />
          <polyline points="12 5 19 12 12 19" />
        </svg>
      </a>
    </div>

  </div><!-- .container -->
</section>
<!-- ===== END SERVICES SECTION ===== -->


<!-- ===== STEPS SECTION ===== -->
<section class="ip-steps" id="ip-steps">
  <div class="container">

    <div class="ip-steps-inner">

      <!-- Doctor Image -->
      <div class="ip-steps-img-col fade-in">
        <div class="ip-steps-img-wrapper">
          <?php
          $steps_img = get_theme_mod('fikrtak_followup_doctor_img');
          if ($steps_img) {
            echo '<img src="' . esc_url($steps_img) . '" alt="د. خالد الحارثي" class="ip-steps-img" loading="lazy" />';
          } else {
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/doctor.png" alt="د. خالد الحارثي" class="ip-steps-img" loading="lazy" />';
          }
          ?>
          <!-- Floating badge -->
          <div class="ip-steps-badge">
            <div class="ip-steps-badge-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                <polyline points="22 4 12 14.01 9 11.01" />
              </svg>
            </div>
            <div class="ip-steps-badge-text">
              <span class="ip-steps-badge-num">+1,200</span>
              <span class="ip-steps-badge-lbl">عملية ناجحة</span>
            </div>
          </div>
        </div>
      </div><!-- .ip-steps-img-col -->

      <!-- Steps Content -->
      <div class="ip-steps-content fade-in">
        <span class="section-tag" style="justify-content: flex-start;">
          <span class="dot-teal"></span>
          كيف نساعدك
        </span>
        <h2 class="ip-steps-title">خطوات المتابعة مع<br>د. خالد الحارثي</h2>

        <div class="ip-steps-list">
          <div class="ip-step-item">
            <div class="ip-step-num">1</div>
            <div class="ip-step-body">
              <h3 class="ip-step-title">التسجيل في المنصة المناسبة</h3>
              <p class="ip-step-desc">تواصل معنا عبر واتساب أو منصة حجز المواعيد لتحديد موعد المتابعة المناسب لك سواء
                حضورياً أو عن بُعد.</p>
            </div>
          </div>

          <div class="ip-step-item">
            <div class="ip-step-num">2</div>
            <div class="ip-step-body">
              <h3 class="ip-step-title">فحوصات دورية منتظمة</h3>
              <p class="ip-step-desc">يحدد الدكتور خالد جدول المتابعة المثالي بحسب نوع الجراحة وحالتك الصحية لضمان أفضل
                نتائج.</p>
            </div>
          </div>

          <div class="ip-step-item">
            <div class="ip-step-num">3</div>
            <div class="ip-step-body">
              <h3 class="ip-step-title">التقرير الإلكتروني والتواصل</h3>
              <p class="ip-step-desc">بعد كل جلسة متابعة ستحصل على تقرير طبي واضح وتوصيات مفصلة مع إمكانية التواصل
                المستمر عند الحاجة.</p>
            </div>
          </div>
        </div><!-- .ip-steps-list -->

      </div><!-- .ip-steps-content -->

    </div><!-- .ip-steps-inner -->

  </div><!-- .container -->
</section>
<!-- ===== END STEPS SECTION ===== -->


<!-- ===== FAQ SECTION ===== -->
<section class="ip-faq faq" id="ip-faq">
  <div class="container">

    <div class="faq-inner">
      <div class="faq-header-centered fade-in">
        <p class="faq-sub-centered">أسئلة شائعة</p>
        <h2 class="faq-title-centered">إجابات لأكثر الأسئلة شيوعاً</h2>
      </div>

      <div class="faq-list" id="ipFaqList">

        <div class="faq-item" id="ipFaqItem1">
          <button class="faq-q" aria-expanded="false" aria-controls="ipFaqA1" id="ipFaqQ1">
            كم تستغرق فترة المتابعة بعد العملية؟
            <span class="faq-icon">
              <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="6 9 12 15 18 9" />
              </svg>
              <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-a" id="ipFaqA1" role="region" aria-labelledby="ipFaqQ1">
            <p>تتفاوت فترة المتابعة بحسب نوع العملية وحالة المريض، وعادةً تمتد من 3 أشهر إلى سنة كاملة. يحدد الدكتور
              خالد الجدول الزمني المناسب لك بناءً على تقييم حالتك بشكل فردي.</p>
          </div>
        </div>

        <div class="faq-item" id="ipFaqItem2">
          <button class="faq-q" aria-expanded="false" aria-controls="ipFaqA2" id="ipFaqQ2">
            هل يمكنني المتابعة عن بُعد دون الحضور الشخصي؟
            <span class="faq-icon">
              <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="6 9 12 15 18 9" />
              </svg>
              <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-a" id="ipFaqA2" role="region" aria-labelledby="ipFaqQ2">
            <p>نعم، يتيح الدكتور خالد إمكانية الاستشارة الطبية عن بُعد لبعض حالات المتابعة، مع التأكيد على أهمية الحضور
              الشخصي في المواعيد الرئيسية لإجراء الفحص السريري والأشعة.</p>
          </div>
        </div>

        <div class="faq-item" id="ipFaqItem3">
          <button class="faq-q" aria-expanded="false" aria-controls="ipFaqA3" id="ipFaqQ3">
            كيف يمكنني تحديد موعد المتابعة؟
            <span class="faq-icon">
              <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="6 9 12 15 18 9" />
              </svg>
              <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-a" id="ipFaqA3" role="region" aria-labelledby="ipFaqQ3">
            <p>يمكنك التواصل مباشرة عبر واتساب أو الاتصال بمركز العيادة لحجز موعدك. يُنصح بالحجز المسبق لضمان الحصول على
              الوقت المناسب لك.</p>
          </div>
        </div>

        <div class="faq-item" id="ipFaqItem4">
          <button class="faq-q" aria-expanded="false" aria-controls="ipFaqA4" id="ipFaqQ4">
            ما هي الأعراض التي تستوجب التواصل الفوري مع الطبيب؟
            <span class="faq-icon">
              <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="6 9 12 15 18 9" />
              </svg>
              <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-a" id="ipFaqA4" role="region" aria-labelledby="ipFaqQ4">
            <p>تواصل فوراً في حال ظهور: ارتفاع حاد في الحرارة، إفرازات أو احمرار شديد حول الجرح، ألم متصاعد لا يُحتمل،
              تورم مفاجئ، أو أي عرض غير مألوف يُقلقك.</p>
          </div>
        </div>

      </div><!-- .faq-list -->

      <div class="fade-in" style="text-align:center;">
        <a href="#ip-steps" class="btn btn-outline-teal btn-lg" id="ipFaqMoreBtn">
          اعرف أكثر
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </a>
      </div>

    </div><!-- .faq-inner -->

  </div><!-- .container -->
</section>
<!-- ===== END FAQ SECTION ===== -->

<?php get_footer(); ?>