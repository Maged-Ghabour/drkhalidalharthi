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
  <!-- Decorative grid pattern -->
  <div class="ip-hero-grid-bg" aria-hidden="true"></div>

  <div class="container">
    <div class="ip-hero-inner">

      <!-- Content -->
      <div class="ip-hero-content">
        <span class="ip-hero-tag">
          <span class="dot-teal"></span>
          أنت بأيدٍ أمينة
        </span>

        <h1 class="ip-hero-title">المتابعة بعد<br>جراحة العظام</h1>

        <p class="ip-hero-sub">
          المتابعة الطبية بعد العملية الجراحية ليست اختياراً، بل ركيزة أساسية لضمان شفاء
          آمن وسريع، وتفادي المضاعفات التي قد تؤخر تعافيك.
        </p>

        <div class="ip-hero-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="ipHeroCtaBtn">
            احجز موعد للمتابعة
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
          </a>
        </div>
      </div>


      <!-- Stats Bar -->
      <div class="ip-hero-stats">
        <div class="ip-stat-item">
          <span class="ip-stat-num">+17K</span>
          <span class="ip-stat-lbl">متابع</span>
        </div>
        <div class="ip-stat-divider" aria-hidden="true"></div>
        <div class="ip-stat-item">
          <span class="ip-stat-num">1.3%</span>
          <span class="ip-stat-lbl">نسبة المضاعفات</span>
        </div>
        <div class="ip-stat-divider" aria-hidden="true"></div>
        <div class="ip-stat-item">
          <span class="ip-stat-num">+13</span>
          <span class="ip-stat-lbl">سنة خبرة</span>
        </div>
      </div>

    </div><!-- .ip-hero-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END INNER PAGE HERO ===== -->


<!-- ===== WHY SECTION ===== -->
<section class="ip-why" id="ip-why">
  <div class="container">

    <div class="ip-why-inner">
      <!-- Text Column -->
      <div class="ip-why-text fade-in">
        <span class="section-tag">
          <span class="dot-teal"></span>
          أبرز ما نقدمه
        </span>
        <h2 class="ip-why-title">لماذا تعد المتابعة بعد<br>الجراحة خطوة مهمة</h2>
        <p class="ip-why-desc">
          يُعدّ الالتزام بالمتابعة الطبية بعد الجراحة جزءاً لا يتجزأ من مسيرة الشفاء.
          فهي تُمكّن الطبيب من رصد التحسن ومعالجة أي مشكلة في وقتها قبل أن تتفاقم،
          مما يضمن لك عودة آمنة إلى حياتك الطبيعية.
        </p>
      </div>

      <!-- Cards Column -->
      <div class="ip-why-cards">
        <div class="ip-why-card fade-in">
          <div class="ip-why-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <h3 class="ip-why-card-title">الوقاية من المضاعفات</h3>
          <p class="ip-why-card-desc">الكشف المبكر عن أي مؤشرات للتعفن أو الجلطات أو ضعف التئام الجرح وتداركها فوراً.
          </p>
        </div>

        <div class="ip-why-card fade-in">
          <div class="ip-why-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg>
          </div>
          <h3 class="ip-why-card-title">مراقبة التقدم</h3>
          <p class="ip-why-card-desc">متابعة مستمرة لمعدل الشفاء وتعديل خطة العلاج بحسب استجابة جسمك وتطور حالتك.</p>
        </div>

        <div class="ip-why-card fade-in">
          <div class="ip-why-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <h3 class="ip-why-card-title">إدارة الألم</h3>
          <p class="ip-why-card-desc">ضبط جرعات المسكنات وتقديم توصيات طبية دقيقة لتخفيف الألم والتعامل معه بفاعلية.</p>
        </div>
      </div><!-- .ip-why-cards -->
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