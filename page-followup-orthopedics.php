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
<section class="ip-hero" id="ip-hero-followup">
  <div class="container">
    <div class="ip-hero-banner"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/followupBG.png');">
      <!-- Content -->
      <div class="ip-hero-content fade-in">
        <h1 class="ip-hero-title">المتابعة بعد جراحة العظام</h1>
        <p class="ip-hero-sub">
          رعاية دقيقة بعد العملية لضمان التعافي الآمن واستعادة الحركة<br>بأفضل شكل ممكن، بخطوات مدروسة وتحت إشراف
          استشاري خبير.
        </p>
        <div class="ip-hero-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="ipHeroCtaBtn">
            احجز موعد المتابعة الآن
          </a>
        </div>
      </div>
    </div><!-- .ip-hero-banner -->
  </div><!-- .container -->
</section>
<!-- ===== END INNER PAGE HERO ===== -->


<!-- ===== ABOUT / STATS SECTION (Copied & adapted from Home) ===== -->
<section class="stats fade-in" id="ip-about" style="padding-top: 40px; padding-bottom: 60px;">
  <div class="container">
    <div class="stats-inner">
      <!-- Right: Text & Bullets -->
      <div class="stats-text">
        <div class="stats-text-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
          <h2 style="margin-bottom: 16px; margin-top: 0;">نتميز بخبرتنا</h2>
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" style="white-space: nowrap; font-size: 14px; margin-bottom: 16px;">
            احجز موعد متابعة الآن
          </a>
        </div>
        <ul class="creds-list">
          <li>حاصل على البورد السعودي لجراحة العظام</li>
          <li>حاصل على الزمالة الدقيقة في جراحة أورام العظام وإعادة بناء المفاصل مستشفى بادوفا في إيطاليا</li>
          <li>حاصل على الزمالة الدقيقة في جراحة أورام العظام واعادة بناء المفاصل مستشفى ديزولي جامعة بولونيا</li>
        </ul>
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
<section class="ip-why fade-in" id="ip-why">
  <div class="container">

    <div class="ip-why-inner"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png'); padding: 60px 48px;">
      <!-- Right: Text Column -->
      <div class="ip-why-text">
        <span class="ip-why-small-title">أهمية المتابعة</span>
        <h2 class="ip-why-title">لماذا تُعد المتابعة بعد<br>الجراحة خطوة مهمة</h2>
        <p class="ip-why-desc">
          تُعد متابعة ما بعد العملية جزءًا جوهريًا من نجاح جراحات العظام، حيث تساعد على مراقبة التعافي والتأكد من التئام
          الحالة بشكل سليم.
        </p>
        <div class="ip-why-extra-box">
          تشمل المتابعة الطبية إجراءات مهمة مثل تغيير الضماد بعد العملية وتقييم استجابة المريض للعلاج — لضمان أفضل نتائج
          ممكنة.
        </div>
      </div>

      <!-- Left: Cards Column -->
      <div class="ip-why-cards-grid">
        <div class="ip-why-card full-width">
          <div class="ip-why-card-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="الوقاية من المضاعفات">
          </div>
          <div class="ip-why-card-content">
            <h3 class="ip-why-card-title">الوقاية من المضاعفات</h3>
            <p class="ip-why-card-desc">الكشف المبكر عن أي مشكلات تمنع تطورها قبل أن تؤثر على التعافي.</p>
          </div>
        </div>

        <div class="ip-why-card half-width">
          <div class="ip-why-card-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="متابعة التقدم">
          </div>
          <h3 class="ip-why-card-title">متابعة التقدم</h3>
          <p class="ip-why-card-desc">قياس مستمر لمراحل الشفاء وتعديل الخطة حسب التطور.</p>
        </div>

        <div class="ip-why-card half-width">
          <div class="ip-why-card-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="إدارة الألم">
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
<section class="ip-services fade-in" id="ip-services">
  <div class="container">
    <div class="ip-services-wrapper">

      <!-- Top Header Area -->
      <div class="ip-services-top">
        <div class="ip-services-top-right">
          <span class="ip-services-small-title">ماذا نقدم؟</span>
          <h2 class="ip-services-title">ماذا تشمل المتابعة<br>بعد الجراحة؟</h2>
        </div>
        <div class="ip-services-top-left">
          <p class="ip-services-desc">
            برنامج متابعة شامل ومنظّم يغطي كل مراحل التعافي من اليوم الأول بعد العملية حتى العودة الكاملة للحياة
            الطبيعية.
          </p>
        </div>
      </div>

      <!-- Grid Area -->
      <div class="ip-services-table">
        <!-- Item 1 -->
        <div class="ip-services-cell">
          <span class="ip-services-num">1</span>
          <h3 class="ip-services-cell-title">تقييم التئام الجرح والعظام</h3>
          <p class="ip-services-cell-desc">متابعة التئام موضع الجراحة والتأكد من استقرار العظام بالشكل الصحيح.</p>
        </div>
        <!-- Item 2 -->
        <div class="ip-services-cell">
          <span class="ip-services-num">2</span>
          <h3 class="ip-services-cell-title">متابعة الألم والتورم</h3>
          <p class="ip-services-cell-desc">مراقبة مستوى الألم والتورم بعد الجراحة وتحديد ما إذا كانت الحالة تسير بشكل
            طبيعي.</p>
        </div>
        <!-- Item 3 -->
        <div class="ip-services-cell">
          <span class="ip-services-num">3</span>
          <h3 class="ip-services-cell-title">مراجعة الأشعة والتقارير</h3>
          <p class="ip-services-cell-desc">الاطلاع على نتائج الأشعة والفحوصات لمتابعة تقدم الشفاء بدقة.</p>
        </div>
        <!-- Item 4 -->
        <div class="ip-services-cell">
          <span class="ip-services-num">4</span>
          <h3 class="ip-services-cell-title">تعديل خطة العلاج الطبيعي</h3>
          <p class="ip-services-cell-desc">تحديث البرنامج العلاجي حسب تطور الحالة واحتياج المريض خلال التعافي.</p>
        </div>
        <!-- Item 5 -->
        <div class="ip-services-cell">
          <span class="ip-services-num">5</span>
          <h3 class="ip-services-cell-title">استعادة الحركة والوظيفة</h3>
          <p class="ip-services-cell-desc">متابعة قدرة المريض على الحركة التدريجية والعودة لممارسة الأنشطة اليومية.</p>
        </div>
        <!-- Item 6 CTA -->
        <div class="ip-services-cell cta-cell">
          <h3 class="ip-services-cell-title">هل أنت مستعد للبدء؟</h3>
          <p class="ip-services-cell-desc">احجز موعد المتابعة الآن وابدأ رحلة تعافيك بثقة.</p>
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary ip-services-btn">
            احجز الآن
          </a>
        </div>
      </div><!-- .ip-services-table -->

    </div><!-- .ip-services-wrapper -->
  </div><!-- .container -->
</section>
<!-- ===== END SERVICES SECTION ===== -->


<!-- ===== STEPS SECTION ===== -->
<style>
  #ip-steps .hero-img-wrapper::before {
    display: none;
  }
</style>
<section class="ip-steps" id="ip-steps">
  <div class="container">

    <div class="ip-steps-inner">

      <!-- Doctor Image (Copied from front-page hero-img-col) -->
      <div class="hero-img-col fade-in">
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
                  <span class="info-title">د - خالد سليم الحارثي </span>
                  <span class="info-sub">طب جامعه ام القري البورد <br>السعودي بجراحه العظام</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .hero-img-col -->

      <!-- Steps Content -->
      <div class="ip-steps-content fade-in">
        <span class="ip-services-small-title" style="margin-bottom: 12px; display: block;">كيف تتم المتابعة؟</span>
        <h2 class="ip-steps-title" style="font-size: clamp(28px, 4vw, 36px); font-weight: 800; color: var(--teal-dark); line-height: 1.3; margin-bottom: 40px;">
          خطوات المتابعة مع<br>د. خالد الحارثي
        </h2>

        <div class="ip-steps-list">
          <div class="ip-step-item">
            <div class="ip-step-num">١</div>
            <div class="ip-step-body">
              <h3 class="ip-step-title">التقييم بعد العملية مباشرة</h3>
              <p class="ip-step-desc">تبدأ المتابعة بفحص الحالة بعد الجراحة مباشرة للتأكد من استقرار موضع التدخل الجراحي وسلامة التعافي الأولي.</p>
            </div>
          </div>

          <div class="ip-step-item">
            <div class="ip-step-num">٢</div>
            <div class="ip-step-body">
              <h3 class="ip-step-title">مراجعات دورية منتظمة</h3>
              <p class="ip-step-desc">يتم تحديد زيارات متابعة منتظمة لمراقبة التقدم الصحي، وتقييم الحالة بشكل مستمر خلال فترة الشفاء.</p>
            </div>
          </div>

          <div class="ip-step-item">
            <div class="ip-step-num">٣</div>
            <div class="ip-step-body">
              <h3 class="ip-step-title">التقرير النهائي والتوصيات</h3>
              <p class="ip-step-desc">في نهاية فترة المتابعة يُقدم تقرير شامل عن نتائج التعافي مع توصيات للحفاظ على الصحة على المدى البعيد.</p>
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

    <div class="ip-faq-inner">
      
      <!-- Right: Title & CTA -->
      <div class="ip-faq-text-col">
        <p class="faq-sub-centered">الأسئلة الشائعة</p>
        <h2 class="faq-title-centered">إجابات لأكثر الأسئلة<br>شيوعاً</h2>
        <p class="ip-faq-desc">
          نجيب على أبرز استفساراتك حول فترة التعافي وما يمكن توقعه خلال جلسات المتابعة.
        </p>
        <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary ip-faq-btn">
          احجز الآن
        </a>
      </div>

      <!-- Left: FAQ Accordion -->
      <div class="faq-list" id="ipFaqList">

        <div class="faq-item" id="ipFaqItem1">
          <button class="faq-q" aria-expanded="false" aria-controls="ipFaqA1" id="ipFaqQ1">
            <span class="faq-q-text">كم تستغرق فترة المتابعة بعد العملية؟</span>
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
            <p>تعتمد المدة على نوع العملية وحالة المريض، وتتراوح عادة بين أسابيع إلى بضعة أشهر لضمان التئام العظام واستعادة الوظائف الحركية بالكامل.</p>
          </div>
        </div>

        <div class="faq-item" id="ipFaqItem2">
          <button class="faq-q" aria-expanded="false" aria-controls="ipFaqA2" id="ipFaqQ2">
            <span class="faq-q-text">متى يمكنني البدء في العلاج الطبيعي؟</span>
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
            <p>يتم تحديد وقت البدء بناءً على نوع العملية وتوجيهات الطبيب المعالج، وغالباً ما يبدأ العلاج الطبيعي بشكل مبدئي بعد أيام من الجراحة.</p>
          </div>
        </div>

        <div class="faq-item" id="ipFaqItem3">
          <button class="faq-q" aria-expanded="false" aria-controls="ipFaqA3" id="ipFaqQ3">
            <span class="faq-q-text">كيف يمكنني التحكم في الألم خلال فترة التعافي؟</span>
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