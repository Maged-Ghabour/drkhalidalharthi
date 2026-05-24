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
        <h1 class="ip-hero-title bt-hero-title" style="color: rgba(67, 134, 123, 1);">دقة جراحية تحمي وظيفتك الحركية</h1>
        <p class="ip-hero-sub bt-hero-sub" style="color: rgba(67, 134, 123, 1);">
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
<style>
.bt-about-new {
  padding: 80px 0;
}
.bt-about-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
  color: #fff;
  direction: rtl;
  padding: 80px 60px;
}
.bt-about-bg {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background-size: cover;
  background-position: center;
  z-index: 0;
}
.bt-about-overlay-new {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: rgba(97, 160, 149, 0.85);
  z-index: 1;
}
.bt-about-inner-grid {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 80px;
  width: 100%;
}
@media (max-width: 992px) {
  .bt-about-card {
    padding: 40px 30px;
  }
  .bt-about-inner-grid {
    grid-template-columns: 1fr;
    gap: 50px;
  }
}
</style>

<div class="container">
<section class="bt-about-new fade-in" id="bt-about">
  <div class="bt-about-card">
    <div class="bt-about-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Frame%202147239726.png');"></div>
    <div class="bt-about-overlay-new"></div>
    
    <div class="bt-about-inner-grid">
      <!-- Right Column -->
      <div style="display: flex; flex-direction: column;">
        <span style="font-size: 16px; color: rgba(255, 255, 255, 0.8); margin-bottom: 12px; display: block;">ماذا نعرف عنها؟</span>
        <h2 style="font-size: clamp(32px, 4vw, 46px); font-weight: 800; color: #fff; margin-bottom: 40px; line-height: 1.3; margin-top: 0;">جراحة أورام العظام</h2>
        
        <div style="border-right: 2px solid #fff; padding-right: 24px; margin-bottom: 40px; font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.95);">
          نقدم رعاية فائقة الدقة في استئصال أورام العظام، حيث نعتمد على استراتيجيات جراحية توازن بين الاستئصال الكامل للورم وبين الحفاظ على أقصى قدر من الوظيفة الحركية للطرف المصاب.
        </div>
        
        <div style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 16px; padding: 24px;">
          <h3 style="font-size: 18px; font-weight: 800; color: #fff; margin-bottom: 12px; margin-top: 0;">لماذا د. خالد الحارثي؟</h3>
          <p style="font-size: 15px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin: 0;">
            يُعد د. خالد من أبرز الأسماء في جراحة الأورام، حيث يجمع بين الخبرة الأكاديمية والممارسة الجراحية لأكثر من ٢٠٠٠ عملية ناجحة.
          </p>
        </div>
      </div>
      
      <!-- Left Column -->
      <div style="display: flex; flex-direction: column; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: flex-start; gap: 20px; margin-bottom: 30px;">
          <div style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 2px solid rgba(255, 255, 255, 0.5); flex-shrink: 0;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/avatars.png" alt="د. خالد الحارثي" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="text-align: right;">
            <span style="font-size: 14px; color: rgba(255, 255, 255, 0.8); margin-bottom: 4px; display: block;">عن الاستشاري</span>
            <div style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">د. خالد الحارثي</div>
            <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">استشاري جراحة العظام والأورام</div>
          </div>
        </div>
        
        <div style="height: 1px; background: rgba(255, 255, 255, 0.3); margin-bottom: 30px;"></div>
        
        <div style="display: flex; align-items: center; justify-content: center; gap: 40px; margin-bottom: 40px;">
          <div style="text-align: center; flex: 1;">
            <div style="font-size: 40px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; font-family: sans-serif;">+٢K</div>
            <div style="font-size: 15px; color: rgba(255, 255, 255, 0.8);">عملية ناجحة</div>
          </div>
          <div style="width: 1px; height: 50px; background: rgba(255, 255, 255, 0.3);"></div>
          <div style="text-align: center; flex: 1;">
            <div style="font-size: 40px; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 8px; font-family: sans-serif;">+١٣</div>
            <div style="font-size: 15px; color: rgba(255, 255, 255, 0.8);">سنة خبرة</div>
          </div>
        </div>
        
        <div style="font-size: 16px; line-height: 1.8; color: rgba(255, 255, 255, 0.9); text-align: right;">
          استشاري جراحة العظام بخبرة تتجاوز ١٣ عاماً في الجراحات الدقيقة والمعقدة. يتميز بخبرة متقدمة في جراحة أورام العظام وإعادة بناء المفاصل، مع الاعتماد على أحدث التقنيات الجراحية لتحقيق أفضل النتائج.
        </div>
      </div>
      
    </div>
  </div>
</section>
</div>
<!-- ===== END ABOUT SECTION ===== -->


<!-- ===== INDICATIONS SECTION ===== -->
<style>
/* New Styles for Indications, Stages, CTA */
.bt-indications-new, .bt-stages-new, .bt-cta-new {
  padding: 80px 0;
}
.bt-card-new {
  background-color: #E5F2EE;
  border-radius: 24px;
  padding: 60px 50px;
  direction: rtl;
}
.bt-top-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 50px;
  gap: 40px;
}
.bt-top-right h2 {
  font-size: clamp(28px, 4vw, 42px);
  font-weight: 800;
  color: #6a716f;
  margin: 0;
  line-height: 1.4;
}
.bt-top-left p {
  font-size: 17px;
  color: #6a716f;
  line-height: 1.8;
  margin: 0;
  max-width: 450px;
}
.bt-ind-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  border-top: 1px solid rgba(106, 113, 111, 0.3);
}
.bt-ind-col {
  padding: 40px 30px;
  border-left: 1px solid rgba(106, 113, 111, 0.3);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.bt-ind-col:last-child {
  border-left: none;
}
.bt-ind-tag {
  background-color: #6a716f;
  color: #fff;
  padding: 6px 16px;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 24px;
}

.bt-stg-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border-top: 1px solid rgba(106, 113, 111, 0.3);
}
.bt-stg-cell {
  padding: 40px 30px;
}
.bt-stg-cell:nth-child(odd) {
  border-left: 1px solid rgba(106, 113, 111, 0.3);
}
.bt-stg-cell:nth-child(1), .bt-stg-cell:nth-child(2) {
  border-bottom: 1px solid rgba(106, 113, 111, 0.3);
}
.bt-stg-header {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 12px;
  margin-bottom: 20px;
}
.bt-stg-num {
  width: 40px; height: 40px;
  border-radius: 50%;
  border: 2px solid rgba(106, 113, 111, 0.4);
  display: flex; align-items: center; justify-content: center;
  font-size: 20px; font-weight: 800; color: #6a716f;
}
.bt-stg-pill {
  background-color: #9abfb7;
  color: #fff;
  padding: 4px 12px;
  border-radius: 6px;
  font-size: 13px; font-weight: 600;
}

.bt-cta-card-new {
  background-color: #E5F2EE;
  border-radius: 24px;
  padding: 60px 50px;
  direction: rtl;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.bt-cta-img-col .hero-img-wrapper {
  border: none !important;
  background: transparent !important;
  box-shadow: none !important;
  padding: 0 !important;
}
.bt-cta-img-col .hero-img {
  border-radius: 24px !important;
}
.bt-cta-text-new {
  display: flex;
  flex-direction: column;
}
.bt-cta-title-new {
  font-size: clamp(32px, 5vw, 48px);
  font-weight: 800;
  color: #61A095;
  margin-bottom: 24px;
  line-height: 1.3;
}

@media (max-width: 992px) {
  .bt-top-row { flex-direction: column; align-items: flex-start; }
  .bt-ind-grid { grid-template-columns: 1fr; }
  .bt-ind-col { border-left: none; border-bottom: 1px solid rgba(106, 113, 111, 0.3); }
  .bt-ind-col:last-child { border-bottom: none; }
  .bt-stg-grid { grid-template-columns: 1fr; }
  .bt-stg-cell:nth-child(odd) { border-left: none; }
  .bt-stg-cell:nth-child(3) { border-bottom: 1px solid rgba(106, 113, 111, 0.3); }
  .bt-cta-card-new { grid-template-columns: 1fr; }
}
</style>

<section class="bt-indications-new fade-in" id="bt-indications">
  <div class="container">
    <div class="bt-card-new">
      <div class="bt-top-row">
        <div class="bt-top-right">
          <span style="font-size: 15px; color: #6a716f; margin-bottom: 12px; display: block; font-weight: 600;">الأعراض</span>
          <h2>متى يحتاج المريض<br>لهذه الجراحة؟</h2>
          <span style="font-size: 17px; color: #6a716f; display: block; margin-top: 8px;">علامات تستدعي التدخل الطبي الدقيق</span>
        </div>
        <div class="bt-top-left">
          <p>لا تتجاهل هذه العلامات — التشخيص المبكر يفتح الباب لخيارات علاجية أوسع ونتائج أفضل.</p>
        </div>
      </div>
      
      <div class="bt-ind-grid">
        <!-- Col 1 -->
        <div class="bt-ind-col">
          <div class="bt-ind-tag">تورم</div>
          <div style="height: 60px; margin-bottom: 24px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="تورم" style="height: 100%; object-fit: contain;">
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #6a716f; margin-bottom: 12px;">كتلة أو تورم</h3>
          <p style="font-size: 14px; color: rgba(106, 113, 111, 0.8); margin: 0; line-height: 1.8;">وجود تورم غير طبيعي في العظام أو الأنسجة المحيطة يستمر ويتزايد مع الوقت.</p>
        </div>
        <!-- Col 2 -->
        <div class="bt-ind-col">
          <div class="bt-ind-tag">ألم</div>
          <div style="height: 60px; margin-bottom: 24px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page2.png" alt="ألم" style="height: 100%; object-fit: contain;">
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #6a716f; margin-bottom: 12px;">آلام مستمرة</h3>
          <p style="font-size: 14px; color: rgba(106, 113, 111, 0.8); margin: 0; line-height: 1.8;">آلام عظمية متزايدة لا تستجيب للمسكنات التقليدية وتزداد في الليل أو عند الراحة.</p>
        </div>
        <!-- Col 3 -->
        <div class="bt-ind-col">
          <div class="bt-ind-tag">حركة</div>
          <div style="height: 60px; margin-bottom: 24px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page3.png" alt="حركة" style="height: 100%; object-fit: contain;">
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #6a716f; margin-bottom: 12px;">صعوبة الحركة</h3>
          <p style="font-size: 14px; color: rgba(106, 113, 111, 0.8); margin: 0; line-height: 1.8;">ضعف مفاجئ أو عدم استقرار في المفصل أو العظم المصاب يؤثر على الحياة اليومية.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===== END INDICATIONS SECTION ===== -->

<!-- ===== TREATMENT STAGES SECTION ===== -->
<section class="bt-stages-new fade-in" id="bt-stages">
  <div class="container">
    <div class="bt-card-new">
      <div class="bt-top-row">
        <div class="bt-top-right">
          <span style="font-size: 15px; color: #6a716f; margin-bottom: 12px; display: block; font-weight: 600;">مراحل العلاج</span>
          <h2>مراحل العلاج<br>والجراحة</h2>
        </div>
        <div class="bt-top-left">
          <p>أربع مراحل متكاملة — كل خطوة مصممة لتحقيق أفضل نتيجة ممكنة لك.</p>
        </div>
      </div>
      
      <div class="bt-stg-grid">
        <!-- Stage 1 -->
        <div class="bt-stg-cell">
          <div class="bt-stg-header">
            <div class="bt-stg-num">١</div>
            <div class="bt-stg-pill">المرحلة الأولى</div>
          </div>
          <div style="height: 50px; margin-bottom: 20px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi1.png" alt="التشخيص الدقيق" style="height: 100%; object-fit: contain;">
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #6a716f; margin-bottom: 12px;">التشخيص الدقيق</h3>
          <p style="font-size: 14px; color: rgba(106, 113, 111, 0.8); margin: 0; line-height: 1.8;">إجراء الأشعة (MRI/CT) والفحوصات النسيجية لتقييم نوع الورم ومدى انتشاره بدقة.</p>
        </div>
        <!-- Stage 2 -->
        <div class="bt-stg-cell">
          <div class="bt-stg-header">
            <div class="bt-stg-num">٢</div>
            <div class="bt-stg-pill">المرحلة الثانية</div>
          </div>
          <div style="height: 50px; margin-bottom: 20px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi2.png" alt="وضع الخطة الجراحية" style="height: 100%; object-fit: contain;">
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #6a716f; margin-bottom: 12px;">وضع الخطة الجراحية</h3>
          <p style="font-size: 14px; color: rgba(106, 113, 111, 0.8); margin: 0; line-height: 1.8;">تحديد الإجراء الأنسب لاستئصال الورم مع دراسة إمكانية الحفاظ على العظام.</p>
        </div>
        <!-- Stage 3 -->
        <div class="bt-stg-cell">
          <div class="bt-stg-header">
            <div class="bt-stg-num">٣</div>
            <div class="bt-stg-pill">المرحلة الثالثة</div>
          </div>
          <div style="height: 50px; margin-bottom: 20px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ta3afi.png" alt="الاستئصال بدقة عالية" style="height: 100%; object-fit: contain;">
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #6a716f; margin-bottom: 12px;">الاستئصال بدقة عالية</h3>
          <p style="font-size: 14px; color: rgba(106, 113, 111, 0.8); margin: 0; line-height: 1.8;">إزالة الورم جراحياً مع حماية الأعصاب والأوعية الدموية والأنسجة السليمة.</p>
        </div>
        <!-- Stage 4 -->
        <div class="bt-stg-cell">
          <div class="bt-stg-header">
            <div class="bt-stg-num">٤</div>
            <div class="bt-stg-pill">المرحلة الرابعة</div>
          </div>
          <div style="height: 50px; margin-bottom: 20px;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon_page1.png" alt="إعادة البناء والترميم" style="height: 100%; object-fit: contain;">
          </div>
          <h3 style="font-size: 20px; font-weight: 800; color: #6a716f; margin-bottom: 12px;">إعادة البناء والترميم</h3>
          <p style="font-size: 14px; color: rgba(106, 113, 111, 0.8); margin: 0; line-height: 1.8;">ترميم الجزء المصاب باستخدام تقنيات تعويضية لدعم استعادة الوظيفة الحركية.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===== END TREATMENT STAGES SECTION ===== -->

<!-- ===== CTA WITH DOCTOR IMAGE SECTION ===== -->
<section class="bt-cta-new fade-in" id="bt-cta">
  <div class="container">
    <div class="bt-cta-card-new">
      
      <!-- Right: Booking Content -->
      <div class="bt-cta-text-new">
        <span style="font-size: 15px; color: #6a716f; margin-bottom: 12px; display: block; font-weight: 600;">ابدأ تقييم حالتك بدقة</span>
        <h2 class="bt-cta-title-new">احجز استشارة مع<br>د. خالد الحارثي</h2>
        <p style="font-size: 17px; color: rgba(106, 113, 111, 0.9); line-height: 1.8; margin-bottom: 40px;">
          استشاري جراحة العظام بخبرة تتجاوز ١٣ عاماً في الجراحات الدقيقة والمعقدة. يتميز بخبرة متقدمة في جراحة أورام العظام وإعادة بناء المفاصل، مع الاعتماد على أحدث التقنيات الجراحية لتحقيق أفضل النتائج.
        </p>
        <div class="bt-cta-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary" id="btCtaWhatsapp" style="border-radius: 50px; padding: 12px 30px;">
            احجز استشارة
          </a>
        </div>
      </div>

      <!-- Left: Doctor Image -->
      <div class="bt-cta-img-col">
        <div class="hero-img-wrapper" style="border: none !important; box-shadow: none !important; padding: 0 !important; background: transparent !important;">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero pic.png" alt="د. خالد الحارثي" class="hero-img" style="border-radius: 24px;" />
          
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero1vector.png" alt="vector" class="hero-floating-badge badge-1" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero2vector.png" alt="vector" class="hero-floating-badge badge-2" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero3vector.png" alt="vector" class="hero-floating-badge badge-3" />
          <div class="hero-floating-badge badge-4">
            <div class="info-card">
              <div class="info-row">
                <div class="info-icon-wrapper"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Icon Container.png" alt="icon"></div>
                <div class="info-text">
                  <span class="info-title">مستشفي السعودي الالماني</span>
                </div>
              </div>
              <div class="info-row bg-white">
                <div class="info-icon-wrapper"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon2.png" alt="icon"></div>
                <div class="info-text">
                  <span class="info-title">د - خالد سليم الحارثي</span>
                  <span class="info-sub">طب جامعه ام القري البورد <br>السعودي بجراحه العظام</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===== END CTA SECTION ===== -->


<?php get_footer(); ?>
