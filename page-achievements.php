<?php
/**
 * Template Name: الإنجازات
 * Template Post Type: page
 *
 * Dedicated template for the "الإنجازات" page.
 */

get_header();
?>

<!-- ===== HERO SECTION ===== -->
<section class="ip-hero ach-hero" id="ach-hero">
  <div class="container">
    <div class="ip-hero-banner ach-hero-banner"
      style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/followupBG.png');">

      <div class="ip-hero-content ach-hero-content fade-in">
        <h1 class="ip-hero-title ach-hero-title" style="color: rgba(67, 134, 123, 1);">إنجازات طبية وبحثية رائدة</h1>
        <p class="ip-hero-sub ach-hero-sub" style="color: rgba(67, 134, 123, 1);">
          مسيرة علمية وجراحية متميزة في مجال جراحة العظام وأورام العظام<br>
          تجمع بين الخبرة الجراحية العالية والمساهمة في البحث العلمي الدولي.
        </p>
        <div class="ip-hero-btns">
          <?php $wa = get_theme_mod('fikrtak_contact_whatsapp', '966500000000'); ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary btn-lg" id="achHeroCtaBtn">
            احجز استشارة
          </a>
        </div>
      </div>


      



    </div>
  </div>
</section>
<!-- ===== END HERO SECTION ===== -->

<style>
/* ===== ACHIEVEMENTS PAGE STYLES ===== */
.ach-section {
  padding: 80px 0;
}
.ach-card {
  background-color: #E5F2EE;
  border-radius: 24px;
  padding: 60px 50px;
  direction: rtl;
  margin-bottom: 40px;
}
.ach-section-label {
  font-size: 15px;
  color: #6a716f;
  font-weight: 600;
  margin-bottom: 12px;
  display: block;
}
.ach-section-title {
  font-size: clamp(26px, 4vw, 40px);
  font-weight: 800;
  color: #6a716f;
  margin-bottom: 16px;
  line-height: 1.4;
}
.ach-section-subtitle {
  font-size: 17px;
  color: rgba(106, 113, 111, 0.85);
  line-height: 1.8;
  margin-bottom: 50px;
  max-width: 700px;
}
.ach-divider {
  border: none;
  border-top: 1px solid rgba(106, 113, 111, 0.25);
  margin-bottom: 50px;
}

/* ===== Research Banner Cards ===== */
.research-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
}
.research-banner-link {
  display: block;
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  text-decoration: none;
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}
.research-banner-link:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 48px rgba(97, 160, 149, 0.25);
  text-decoration: none;
}
.research-banner-link img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.research-banner-link:hover img {
  transform: scale(1.04);
}
.research-banner-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(30,50,45,0.82) 0%, rgba(30,50,45,0.35) 55%, rgba(30,50,45,0.08) 100%);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-end;
  padding: 28px 30px;
  direction: rtl;
  text-align: right;
}
.research-banner-label {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(255,255,255,0.18);
  backdrop-filter: blur(4px);
  color: #fff;
  font-size: 12px;
  font-weight: 700;
  padding: 5px 12px;
  border-radius: 50px;
  margin-bottom: 10px;
  border: 1px solid rgba(255,255,255,0.25);
}
.research-banner-title {
  font-size: 18px;
  font-weight: 800;
  color: #fff;
  line-height: 1.45;
  margin-bottom: 14px;
  text-shadow: 0 2px 8px rgba(0,0,0,0.3);
}
.research-banner-cta {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #61A095;
  color: #fff;
  font-size: 13px;
  font-weight: 700;
  padding: 8px 18px;
  border-radius: 50px;
  transition: background 0.25s;
}
.research-banner-link:hover .research-banner-cta {
  background: #4d8a80;
}
.research-banner-cta svg {
  width: 13px; height: 13px; flex-shrink: 0;
}

/* ===== Surgical Achievements ===== */
.surgical-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-bottom: 40px;
}
.surgical-card {
  background: #fff;
  border-radius: 16px;
  padding: 30px 24px;
  direction: rtl;
  text-align: center;
  border: 1px solid rgba(106, 113, 111, 0.15);
}
.surgical-icon {
  width: 56px; height: 56px;
  background-color: #E5F2EE;
  border-radius: 16px;
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 20px;
}
.surgical-icon svg {
  width: 28px; height: 28px; color: #61A095;
}
.surgical-card-num {
  font-size: 36px;
  font-weight: 900;
  color: #61A095;
  line-height: 1;
  margin-bottom: 6px;
}
.surgical-card-label {
  font-size: 15px;
  font-weight: 700;
  color: #6a716f;
  margin-bottom: 10px;
}
.surgical-card-desc {
  font-size: 13px;
  color: rgba(106, 113, 111, 0.75);
  line-height: 1.7;
}

/* ===== Certifications ===== */
.cert-list {
  display: flex;
  flex-direction: column;
  gap: 16px;
}
.cert-item {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  background: #fff;
  border-radius: 14px;
  padding: 20px 24px;
  direction: rtl;
  border: 1px solid rgba(106, 113, 111, 0.12);
}
.cert-icon {
  width: 44px; height: 44px;
  background-color: #61A095;
  border-radius: 12px;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.cert-icon svg {
  width: 22px; height: 22px; color: #fff;
}
.cert-text h4 {
  font-size: 16px;
  font-weight: 700;
  color: #4a5250;
  margin-bottom: 4px;
}
.cert-text p {
  font-size: 14px;
  color: rgba(106, 113, 111, 0.75);
  margin: 0;
  line-height: 1.6;
}

@media (max-width: 992px) {
  .research-grid { grid-template-columns: 1fr; }
  .surgical-grid { grid-template-columns: 1fr 1fr; }
  .ach-card { padding: 40px 24px; }
}
@media (max-width: 600px) {
  .surgical-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ===== ACHIEVEMENTS MAIN SECTION ===== -->
<section class="ach-section" id="ach-content">
  <div class="container">

    <!-- ===== RESEARCH CARD ===== -->
    <div class="ach-card">
      <span class="ach-section-label">البحث العلمي</span>
      <h2 class="ach-section-title">الإنجازات الجراحية والأبحاث العلمية</h2>
      <p class="ach-section-subtitle">
        مساهمات علمية محكّمة في المجلات الدولية المتخصصة، تعكس عمق الخبرة والتزام الدكتور خالد الحارثي بتطوير تخصص جراحة العظام على المستوى العالمي.
      </p>
      <hr class="ach-divider">

      <div class="research-grid">

        <!-- Banner 1: PMC -->
        <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC10037116/" target="_blank" rel="noopener noreferrer" class="research-banner-link" id="achResearch1Link">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bannerDr1.jpeg" alt="بحث Glomus Tumor">
          <div class="research-banner-overlay">
            <span class="research-banner-label">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              PubMed Central
            </span>
            <h3 class="research-banner-title">Glomus Tumor Within the Tensor Fascia Lata: A Case Report</h3>
            <span class="research-banner-cta">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              اقرأ البحث
            </span>
          </div>
        </a>

        <!-- Banner 2: ScienceDirect -->
        <a href="https://www.sciencedirect.com/science/article/pii/S2773157X2300173X" target="_blank" rel="noopener noreferrer" class="research-banner-link" id="achResearch2Link">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bannerDr2.jpeg" alt="بحث ScienceDirect">
          <div class="research-banner-overlay">
            <span class="research-banner-label">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              ScienceDirect
            </span>
            <h3 class="research-banner-title">الإنجازات الجراحية والأبحاث العلمية</h3>
            <span class="research-banner-cta">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              اقرأ البحث
            </span>
          </div>
        </a>

      </div>
    </div>
    <!-- ===== END RESEARCH CARD ===== -->

    <!-- ===== SURGICAL ACHIEVEMENTS CARD ===== -->
    <div class="ach-card">
      <span class="ach-section-label">مسيرة جراحية</span>
      <h2 class="ach-section-title">الإنجازات الجراحية والأبحاث العلمية</h2>
      <p class="ach-section-subtitle">
        خبرة تتجاوز ١٣ عاماً في جراحة أورام العظام وإعادة بناء المفاصل، مع حضور دولي في المؤتمرات والمجلات العلمية المحكّمة.
      </p>
      <hr class="ach-divider">

      <!-- Stats Row -->
      <div class="surgical-grid">
        <div class="surgical-card">
          <div class="surgical-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <div class="surgical-card-num">+٢٠٠٠</div>
          <div class="surgical-card-label">عملية جراحية ناجحة</div>
          <div class="surgical-card-desc">في جراحة أورام العظام وإعادة بناء المفاصل</div>
        </div>

        <div class="surgical-card">
          <div class="surgical-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <div class="surgical-card-num">١٣+</div>
          <div class="surgical-card-label">سنة خبرة</div>
          <div class="surgical-card-desc">تخصص عالي في الجراحات الدقيقة والمعقدة</div>
        </div>

        <div class="surgical-card">
          <div class="surgical-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <div class="surgical-card-num">٢+</div>
          <div class="surgical-card-label">بحث علمي منشور</div>
          <div class="surgical-card-desc">في مجلات دولية محكّمة معترف بها عالمياً</div>
        </div>
      </div>

      <!-- Certifications List -->
      <div class="cert-list">
        <div class="cert-item">
          <div class="cert-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <div class="cert-text">
            <h4>البورد السعودي في جراحة العظام</h4>
            <p>حاصل على البورد السعودي لجراحة العظام — أعلى شهادة تخصصية في المملكة العربية السعودية.</p>
          </div>
        </div>

        <div class="cert-item">
          <div class="cert-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div class="cert-text">
            <h4>زمالة دقيقة — مستشفى بادوفا، إيطاليا</h4>
            <p>حاصل على الزمالة الدقيقة في جراحة أورام العظام وإعادة بناء المفاصل من مستشفى بادوفا، إيطاليا.</p>
          </div>
        </div>

        <div class="cert-item">
          <div class="cert-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div class="cert-text">
            <h4>زمالة دقيقة — مستشفى ديزولي، جامعة بولونيا</h4>
            <p>حاصل على الزمالة الدقيقة في جراحة أورام العظام وإعادة بناء المفاصل من مستشفى ديزولي، جامعة بولونيا، إيطاليا.</p>
          </div>
        </div>

        <!-- Research Links repeated -->
        <div class="cert-item" style="flex-direction: column; align-items: flex-start;">
          <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px; width:100%;">
            <div class="cert-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            </div>
            <div class="cert-text">
              <h4>الأبحاث العلمية المنشورة</h4>
              <p>روابط مباشرة للأبحاث العلمية المنشورة في مجلات دولية محكّمة.</p>
            </div>
          </div>
          <div style="display:flex; gap:14px; flex-wrap:wrap; width:100%; padding-right: 56px;">
            <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC10037116/" target="_blank" rel="noopener noreferrer" id="achCertResearch1Link"
              style="display:inline-flex; align-items:center; gap:8px; background:#E5F2EE; color:#61A095; font-size:14px; font-weight:700; padding:10px 20px; border-radius:50px; text-decoration:none; transition:background 0.2s;">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              بحث PubMed Central
            </a>
            <a href="https://www.sciencedirect.com/science/article/pii/S2773157X2300173X" target="_blank" rel="noopener noreferrer" id="achCertResearch2Link"
              style="display:inline-flex; align-items:center; gap:8px; background:#E5F2EE; color:#61A095; font-size:14px; font-weight:700; padding:10px 20px; border-radius:50px; text-decoration:none; transition:background 0.2s;">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              بحث ScienceDirect
            </a>
          </div>
        </div>

      </div>
    </div>
    <!-- ===== END SURGICAL ACHIEVEMENTS CARD ===== -->

  </div>
</section>
<!-- ===== END ACHIEVEMENTS MAIN SECTION ===== -->

<?php get_footer(); ?>
