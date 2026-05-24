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
        <h1 class="ip-hero-title jr-hero-title" style="color: rgba(67, 134, 123, 1);">استعد حركتك بجودة حياة أفضل</h1>
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
<div class="container">
<section class="jr-about fade-in" id="jr-about"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png'); border-radius: 24px; overflow: hidden; margin-top: 40px; margin-bottom: 40px;">
  <div class="container" style="position: relative; z-index: 2;">

    <div class="jr-about-inner">

      <!-- Right: Title + Description + Feature boxes -->
      <div class="jr-about-text">
        <span class="jr-about-tag">ماذا نقدم؟</span>
        <h2 class="jr-about-title">جراحة إعادة بناء<br>المفاصل</h2>
        <p class="jr-about-desc">
          هي أحد فروع جراحة العظام التي تهدف إلى إصلاح أو إعادة بناء المفصل المتضرر نتيجة التآكل أو الإصابات أو التشوهات، وذلك بهدف استعادة وظيفته الطبيعية وتقليل الألم.
        </p>

        <div class="jr-about-features">
          <div class="jr-feature-box">
            <div class="jr-feature-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bone11.png" alt="">
            </div>
            <span>استرداد نطاق الحركة الطبيعية</span>
          </div>
          <div class="jr-feature-box">
            <div class="jr-feature-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bone12.png" alt="">
            </div>
            <span>استقرار تركيزنا على أمن المريض</span>
          </div>
          <div class="jr-feature-box">
            <div class="jr-feature-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bone13.png" alt="">
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
</div>
<!-- ===== END ABOUT SECTION ===== -->


<!-- ===== WHY DR. KHALID SECTION ===== -->
<style>
/* New jr-why figma design */
.jr-why-new {
  padding: 80px 0;
  background-color: transparent;
}
.jr-why-card {
  background-color: #6a716f; /* Dark grey color from figma */
  border-radius: 24px;
  padding: 60px 50px;
  color: #fff;
  direction: rtl; 
}
.jr-why-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  padding-bottom: 40px;
  margin-bottom: 40px;
  gap: 40px;
}
.jr-why-title-col {
  flex: 1;
}
.jr-why-tag {
  display: block;
  font-size: 15px;
  color: rgba(255, 255, 255, 0.7);
  margin-bottom: 12px;
  font-weight: 500;
}
.jr-why-title-col h2 {
  font-size: clamp(28px, 4vw, 42px);
  font-weight: 800;
  color: #fff;
  line-height: 1.4;
  margin: 0;
}
.jr-why-desc-col {
  flex: 1;
}
.jr-why-desc-col p {
  font-size: 17px;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.8;
  margin: 0;
  max-width: 450px;
}
.jr-why-features-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
}
.jr-why-feat {
  position: relative;
  padding: 0 40px;
  border-left: 1px solid rgba(255, 255, 255, 0.2);
  display: flex;
  flex-direction: column;
  text-align: right;
  z-index: 1;
}
.jr-why-feat:last-child {
  border-left: none;
}
.jr-why-feat:first-child {
  padding-right: 10px;
}
.jr-why-feat-bg-num {
  position: absolute;
  bottom: -30px;
  right: 40px;
  font-size: 160px;
  font-weight: 900;
  color: rgba(255, 255, 255, 0.05);
  line-height: 1;
  z-index: -1;
  user-select: none;
  font-family: inherit;
}
.jr-why-feat:first-child .jr-why-feat-bg-num {
  right: 10px;
}
.jr-why-feat-icon {
  margin-bottom: 24px;
  height: 48px;
  text-align: right;
}
.jr-why-feat-icon img {
  height: 100%;
  width: auto;
  object-fit: contain;
}
.jr-why-feat-title {
  font-size: 20px;
  font-weight: 800;
  color: #fff;
  margin-bottom: 12px;
}
.jr-why-feat-desc {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.8);
  line-height: 1.8;
  margin: 0;
}

@media (max-width: 992px) {
  .jr-why-top {
    flex-direction: column;
    align-items: flex-start;
  }
  .jr-why-features-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .jr-why-feat {
    border-left: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    padding: 0 0 40px 0;
  }
  .jr-why-feat:first-child {
    padding-right: 0;
  }
  .jr-why-feat:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }
  .jr-why-feat-bg-num {
    right: 0;
  }
  .jr-why-feat:first-child .jr-why-feat-bg-num {
    right: 0;
  }
}
</style>

<section class="jr-why-new fade-in" id="jr-why">
  <div class="container">
    <div class="jr-why-card">
      <div class="jr-why-top">
        <div class="jr-why-title-col">
          <span class="jr-why-tag">لماذا نحن؟</span>
          <h2>لماذا تختار<br>د. خالد الحارثي؟</h2>
        </div>
        <div class="jr-why-desc-col">
          <p>سنوات من الخبرة الدقيقة ونتائج موثقة تجعله الخيار الأمثل لجراحات إعادة بناء المفاصل.</p>
        </div>
      </div>
      
      <div class="jr-why-features-grid">
        <!-- Feature 1 -->
        <div class="jr-why-feat">
          <div class="jr-why-feat-bg-num">١</div>
          <div class="jr-why-feat-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/fav3.png" alt="خبرة ١٣+ عاماً">
          </div>
          <h3 class="jr-why-feat-title">خبرة ١٣+ عاماً</h3>
          <p class="jr-why-feat-desc">أكثر من ٢٠٠٠ عملية جراحية ناجحة في مختلف التخصصات الدقيقة والمعقدة.</p>
        </div>
        
        <!-- Feature 2 -->
        <div class="jr-why-feat">
          <div class="jr-why-feat-bg-num">٢</div>
          <div class="jr-why-feat-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/fav2.png" alt="أحدث التقنيات">
          </div>
          <h3 class="jr-why-feat-title">أحدث التقنيات</h3>
          <p class="jr-why-feat-desc">استخدام تكنولوجيا طبية متطورة تهدف لتقليل الألم وتسريع وتيرة التعافي.</p>
        </div>

        <!-- Feature 3 -->
        <div class="jr-why-feat">
          <div class="jr-why-feat-bg-num">٣</div>
          <div class="jr-why-feat-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/fav1.png" alt="دقة التخطيط">
          </div>
          <h3 class="jr-why-feat-title">دقة التخطيط</h3>
          <p class="jr-why-feat-desc">اختيار الخطة الجراحية الأنسب لكل مريض بناءً على حالته واحتياجاته.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===== END WHY SECTION ===== -->


<!-- ===== TREATMENT JOURNEY SECTION ===== -->
<style>
/* New jr-journey figma design */
.jr-journey-new {
  padding: 80px 0;
  background-color: transparent;
}
.jr-journey-card {
  background-color: #E5F2EE; /* Light teal background from figma */
  border-radius: 24px;
  padding: 60px 50px;
  color: #333;
  direction: rtl; 
}
.jr-journey-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 50px;
  gap: 40px;
}
.jr-journey-title-col {
  flex: 1;
}
.jr-journey-tag {
  display: block;
  font-size: 15px;
  color: #6a716f;
  margin-bottom: 12px;
  font-weight: 600;
}
.jr-journey-title-col h2 {
  font-size: clamp(28px, 4vw, 42px);
  font-weight: 800;
  color: #6a716f; /* Dark text for title */
  line-height: 1.4;
  margin: 0;
}
.jr-journey-desc-col {
  flex: 1;
}
.jr-journey-desc-col p {
  font-size: 17px;
  color: rgba(106, 113, 111, 0.8);
  line-height: 1.8;
  margin: 0;
  max-width: 450px;
}
.jr-journey-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  border: 1px solid rgba(106, 113, 111, 0.3);
}
.jr-journey-step {
  padding: 40px 30px;
  border-left: 1px solid rgba(106, 113, 111, 0.3);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.jr-journey-step:last-child {
  border-left: none;
}
.jr-journey-step-header {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  margin-bottom: 30px;
  width: 100%;
}
.jr-journey-step-num {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: 2px solid rgba(106, 113, 111, 0.4);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  font-weight: 800;
  color: #6a716f;
  background-color: transparent;
}
.jr-journey-step-pill {
  background-color: #9abfb7;
  color: #fff;
  padding: 6px 16px;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
}
.jr-journey-step-icon {
  height: 60px;
  margin-bottom: 24px;
}
.jr-journey-step-icon img {
  height: 100%;
  width: auto;
  object-fit: contain;
}
.jr-journey-step-title {
  font-size: 20px;
  font-weight: 800;
  color: #6a716f;
  margin-bottom: 12px;
}
.jr-journey-step-desc {
  font-size: 14px;
  color: rgba(106, 113, 111, 0.8);
  line-height: 1.8;
  margin: 0;
}

@media (max-width: 992px) {
  .jr-journey-top {
    flex-direction: column;
    align-items: flex-start;
  }
  .jr-journey-grid {
    grid-template-columns: 1fr;
  }
  .jr-journey-step {
    border-left: none;
    border-bottom: 1px solid rgba(106, 113, 111, 0.3);
  }
  .jr-journey-step:last-child {
    border-bottom: none;
  }
}
</style>

<section class="jr-journey-new fade-in" id="jr-journey">
  <div class="container">
    <div class="jr-journey-card">
      <div class="jr-journey-top">
        <div class="jr-journey-title-col">
          <span class="jr-journey-tag">مراحل العلاج</span>
          <h2>رحلة العلاج خطوة<br>بخطوة</h2>
        </div>
        <div class="jr-journey-desc-col">
          <p>كل مرحلة مصممة لتبني على السابقة — من أول فحص حتى استعادة الحركة الكاملة.</p>
        </div>
      </div>
      
      <div class="jr-journey-grid">
        <!-- Stage 1 -->
        <div class="jr-journey-step">
          <div class="jr-journey-step-header">
            <div class="jr-journey-step-num">١</div>
            <div class="jr-journey-step-pill">المرحلة الأولى</div>
          </div>
          <div class="jr-journey-step-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi1.png" alt="التشخيص والتقييم">
          </div>
          <h3 class="jr-journey-step-title">التشخيص والتقييم</h3>
          <p class="jr-journey-step-desc">فحص الحالة بدقة وتحديد درجة تلف المفصل ووضع التشخيص المناسب بكل الأدوات المتاحة.</p>
        </div>
        
        <!-- Stage 2 -->
        <div class="jr-journey-step">
          <div class="jr-journey-step-header">
            <div class="jr-journey-step-num">٢</div>
            <div class="jr-journey-step-pill">المرحلة الثانية</div>
          </div>
          <div class="jr-journey-step-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi2.png" alt="إجراء العملية">
          </div>
          <h3 class="jr-journey-step-title">إجراء العملية</h3>
          <p class="jr-journey-step-desc">تنفيذ الجراحة بأحدث الأساليب لإصلاح أو إعادة بناء المفصل المتضرر بأعلى معايير الدقة.</p>
        </div>

        <!-- Stage 3 -->
        <div class="jr-journey-step">
          <div class="jr-journey-step-header">
            <div class="jr-journey-step-num">٣</div>
            <div class="jr-journey-step-pill">المرحلة الثالثة</div>
          </div>
          <div class="jr-journey-step-icon">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi.png" alt="التعافي والحركة">
          </div>
          <h3 class="jr-journey-step-title">التعافي والحركة</h3>
          <p class="jr-journey-step-desc">برنامج تأهيلي مخصص يساعدك على استعادة القوة والوظيفة تدريجياً حتى العودة الكاملة.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===== END TREATMENT JOURNEY SECTION ===== -->


<!-- ===== CTA SECTION ===== -->
<style>
.jr-cta-new {
  background-color: #61A095; /* Teal color matching the design */
  border-radius: 24px;
  padding: 80px 40px;
  text-align: center;
  color: #fff;
  direction: rtl;
}
.jr-cta-tag-new {
  display: block;
  font-size: 16px;
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 16px;
  font-weight: 500;
}
.jr-cta-title-new {
  font-size: clamp(32px, 5vw, 48px);
  font-weight: 800;
  color: #fff;
  margin-bottom: 24px;
}
.jr-cta-desc-new {
  font-size: 18px;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.8;
  margin: 0 auto 40px;
  max-width: 600px;
}
.jr-cta-btns-new {
  display: flex;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
}
.jr-cta-btn-primary-new {
  background-color: #fff;
  color: #61A095;
  font-weight: 800;
  border-radius: 50px;
  padding: 16px 40px;
  font-size: 16px;
  text-decoration: none;
  transition: all 0.3s ease;
  border: none;
}
.jr-cta-btn-primary-new:hover {
  background-color: rgba(255, 255, 255, 0.9);
  color: #50857a;
  transform: translateY(-3px);
}
.jr-cta-btn-secondary-new {
  background-color: #6a716f;
  color: #fff;
  font-weight: 700;
  border-radius: 50px;
  padding: 16px 30px;
  font-size: 15px;
  text-decoration: none;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  gap: 8px;
  border: none;
}
.jr-cta-btn-secondary-new:hover {
  background-color: #59605e;
  color: #fff;
  transform: translateY(-3px);
}
.jr-cta-btn-secondary-new svg {
  width: 20px;
  height: 20px;
  fill: currentColor;
}
</style>

<div class="container" style="margin-bottom: 80px;">
  <section class="jr-cta-new fade-in" id="jr-cta">
    <div class="jr-cta-inner">
      <span class="jr-cta-tag-new">ابدأ رحلة استعادة الحركة اليوم</span>
      <h2 class="jr-cta-title-new">احجز استشارتك مع د. خالد الحارثي</h2>
      <p class="jr-cta-desc-new">
        احجز استشارتك لتقييم حالتك ووضع الخطة<br>
        الجراحية الأنسب لك — خطوة واحدة نحو حياة بلا ألم.
      </p>
      <div class="jr-cta-btns-new">
        <a href="tel:<?php echo esc_attr(get_theme_mod('fikrtak_contact_phone', '966500000000')); ?>" class="jr-cta-btn-primary-new" id="jrCtaPhone">
          احجز موعدك الآن
        </a>
        <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="jr-cta-btn-secondary-new" id="jrCtaWhatsapp">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.888-.788-1.487-1.761-1.66-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
          تواصل معنا علي الواتساب
        </a>
      </div>
    </div>
  </section>
</div>
<!-- ===== END CTA SECTION ===== -->


<?php get_footer(); ?>
