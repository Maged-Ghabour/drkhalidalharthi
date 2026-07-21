<?php
/**
 * Template Name: من نحن
 * Template Post Type: page
 *
 * Dedicated template for the "من نحن" (About Us) inner page.
 */

get_header();
?>

<!-- ===== ABOUT HERO SECTION ===== -->
<style>
.about-hero {
  padding: 120px 0 100px;
  min-height: 80vh;
  display: flex;
  align-items: center;
  position: relative;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #f8fffe;
  border-radius: 24px;
  margin-top: 40px;
  overflow: hidden;
}
.about-hero-overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  /* Uncomment or adjust if background needs a light overlay to make text readable */
  /* background: rgba(248, 255, 254, 0.85); */
  z-index: 1;
}
.about-hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  max-width: 950px;
  margin: 0 auto;
  direction: rtl;
}
.about-top-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent;
  border: 1px solid rgba(97, 160, 149, 0.3);
  padding: 6px 20px;
  border-radius: 50px;
  font-size: 14px;
  color: #61a095;
  font-weight: 600;
  margin-bottom: 24px;
}
.about-top-badge .dot {
  width: 8px; height: 8px;
  background-color: #61a095;
  border-radius: 50%;
}
.about-doc-name {
  font-size: 26px;
  font-weight: 800;
  color: #6a716f;
  margin-bottom: 12px;
}
.about-hero-title {
  font-size: clamp(32px, 5vw, 48px);
  font-weight: 800;
  color: #61a095;
  line-height: 1.4;
  margin-bottom: 24px;
}
.about-hero-desc {
  font-size: 18px;
  color: #889290;
  line-height: 1.8;
  max-width: 700px;
  margin: 0 auto 30px;
}
.about-tags {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 16px;
  margin-bottom: 30px;
}
.about-tag {
  background: #fff;
  border: 1px solid #e0e8e7;
  padding: 10px 28px;
  border-radius: 50px;
  font-size: 16px;
  color: #6a716f;
  font-weight: 600;
  box-shadow: 0 4px 12px rgba(0,0,0,0.02);
}
.about-note {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  background: rgba(97, 160, 149, 0.08);
  border: 1px solid rgba(97, 160, 149, 0.15);
  padding: 14px 32px;
  border-radius: 50px;
  font-size: 15px;
  color: #61a095;
  font-weight: 600;
  margin-bottom: 40px;
}
.about-note svg {
  width: 22px; height: 22px;
}
.about-hero-btns {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}
.btn-about-primary {
  background-color: #43867b;
  color: #fff;
  padding: 16px 48px;
  border-radius: 50px;
  font-size: 17px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.3s;
  box-shadow: 0 8px 24px rgba(67, 134, 123, 0.2);
}
.btn-about-primary:hover {
  background-color: #2e665d;
  color: #fff;
}
.btn-about-outline {
  background-color: #fff;
  color: #43867b;
  border: 1px solid #e0e8e7;
  padding: 16px 48px;
  border-radius: 50px;
  font-size: 17px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.3s;
  box-shadow: 0 4px 12px rgba(0,0,0,0.02);
}
.btn-about-outline:hover {
  border-color: #43867b;
}

@media (max-width: 768px) {
  .about-hero {
    padding: 100px 0 60px;
  }
  .about-hero-title {
    font-size: 28px;
  }
  .about-hero-desc {
    font-size: 16px;
  }
  .about-note {
    font-size: 14px;
    padding: 12px 20px;
  }
}
</style>

<?php
// Default Background (used in other pages too)
$bg_image = get_template_directory_uri() . '/assets/images/followupBG.png';

// Change background if a featured image is set on the page
if (has_post_thumbnail()) {
    $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
}
?>

<div class="container">
<section class="about-hero" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
  
  <div class="fade-in">
    <div class="about-hero-content">
      
      <div class="about-top-badge">
        <span class="dot"></span>
        رعاية طبية متقدمة
      </div>

      <div class="about-doc-name">د. خالد الحارثي</div>
      
      <h1 class="about-hero-title">استشاري جراحة أورام العظام وإعادة بناء المفاصل</h1>
      
      <p class="about-hero-desc">
        خبرة متقدمة في التعامل مع الحالات المعقدة والدقيقة في جراحات العظام،<br>
        باستخدام أحدث التقنيات الطبية لتحقيق أفضل النتائج العلاجية.
      </p>

      <div class="about-tags">
        <span class="about-tag">جراحات أورام العظام</span>
        <span class="about-tag">إعادة بناء المفاصل</span>
        <span class="about-tag">الجراحات الدقيقة والمعقدة</span>
      </div>

      <div class="about-note">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h2.5l1.5-3 2 6 1.5-3H16" />
        </svg>
        استعادة الحركة، تحسين جودة الحياة، وتحقيق تعافٍ آمن ودقيق لكل مريض.
      </div>

      <div class="about-hero-btns">
        <?php $wa = get_field('whatsapp_number') ?: '966500000000'; ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn-about-primary">
          احجز موعدك الآن
        </a>
        <!-- You can link this to a specific section or page -->
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn-about-outline">
          استشارة الآن
        </a>
      </div>

    </div>
  </div>
</section>
</div>

<!-- ===== STATS ===== -->
<section class="stats" style="margin-top: -40px; position: relative; z-index: 10;">
  <div class="container">
    <div class="stats-inner">
      <div class="stats-text">
        <div class="stats-text-header">
          <h2>نتميز بخبرتنا</h2>
          <?php $wa = get_field('whatsapp_number') ?: '966500000000'; ?>
          <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="btn btn-primary whatsapp-stat-btn" style="background-color: #61a095; border-color: #61a095;">
            احجز موعد متابعة الآن
          </a>
        </div>
        <ul class="creds-list">
          <li>حاصل على البورد السعودي لجراحة العظام</li>
          <li>حاصل على الزمالة الدقيقة في جراحة أورام العظام وإعادة بناء المفاصل مستشفى بادوفا في إيطاليا</li>
          <li>حاصل على الزمالة الدقيقة في جراحة أورام العظام واعادة بناء المفاصل مستشفى ديزولي جامعة بولونيا</li>
        </ul>
      </div>

      <div class="stats-numbers">
        <div class="stat-item">
          <span class="stat-num">+<span class="counter" data-target="13">0</span></span>
          <span class="stat-lbl">سنة خبرة</span>
        </div>

        <div class="stat-item">
          <span class="stat-num">%<span class="counter" data-target="100">0</span></span>
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

<!-- ===== ABOUT DOCTOR ===== -->
<section class="about-doctor-section" id="about-doctor-section">
  <div class="container">
    <div class="about-doctor-inner">
      <div class="about-doctor-text">
        <h2 class="about-doctor-title">نبذة عن د. خالد الحارثي</h2>
        <p class="about-doctor-desc">
          د. خالد الحارثي هو استشاري متخصص في جراحة أورام العظام وإعادة بناء المفاصل، يمتلك خبرة واسعة في التعامل مع الحالات الطبية المعقدة والدقيقة. يكرس جهوده لتقديم رعاية طبية استثنائية تركز على المريض وتستند إلى أحدث الأبحاث والتقنيات.
        </p>
        <div class="about-doctor-cards">
          
          <div class="about-doctor-card">
            <div class="about-doctor-card-icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="#61A095" stroke-width="1.5" fill="#E5F2EE"/>
                <path d="M8 12L11 15L16 9" stroke="#61A095" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="about-doctor-card-text">
              <h3 class="about-doctor-card-title">جراحة أورام العظام</h3>
              <p class="about-doctor-card-desc">تشخيص وعلاج أورام العظام الحميدة والخبيثة بأحدث التقنيات.</p>
            </div>
          </div>
          
          <div class="about-doctor-card">
            <div class="about-doctor-card-icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="#61A095" stroke-width="1.5" fill="#E5F2EE"/>
                <path d="M8 12L11 15L16 9" stroke="#61A095" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="about-doctor-card-text">
              <h3 class="about-doctor-card-title">إعادة بناء المفاصل</h3>
              <p class="about-doctor-card-desc">عمليات استبدال المفاصل المعقدة وإعادة بنائها لاستعادة الحركة.</p>
            </div>
          </div>
          
          <div class="about-doctor-card">
            <div class="about-doctor-card-icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="#61A095" stroke-width="1.5" fill="#E5F2EE"/>
                <path d="M8 12L11 15L16 9" stroke="#61A095" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="about-doctor-card-text">
              <h3 class="about-doctor-card-title">الحالات المعقدة</h3>
              <p class="about-doctor-card-desc">التعامل مع الإصابات والكسور المعقدة وحالات فشل الجراحات السابقة.</p>
            </div>
          </div>
          
        </div>
      </div>
      <div class="about-doctor-image">
        <div class="hero-img-col" style="margin-top: 0; align-self: center;">
          <div class="hero-img-wrapper">
            <?php 
            $hero_image = get_field('hero_background');
            $hero_image_url = $hero_image ? esc_url($hero_image) : esc_url(get_template_directory_uri()) . '/assets/images/hero pic.webp';
            ?>
            <img src="<?php echo $hero_image_url; ?>" alt="د. خالد الحارثي"
              class="hero-img" fetchpriority="high" loading="eager" decoding="async" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/سنة خبرة.png" alt=""
              class="hero-floating-badge badge-1" loading="lazy" decoding="async" aria-hidden="true" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/استشاري متخصص.png" alt=""
              class="hero-floating-badge badge-2" loading="lazy" decoding="async" aria-hidden="true" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero3vector.webp" alt=""
              class="hero-floating-badge badge-3" loading="lazy" decoding="async" aria-hidden="true" />
            <div class="hero-floating-badge badge-4">
              <div class="info-card">
                <div class="info-row">
                  <div class="info-icon-wrapper"><img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Icon Container.webp" alt="icon">
                  </div>
                  <div class="info-text">
                    <span class="info-title">مستشفي السعودي الالماني</span>
                  </div>
                </div>
                <div class="info-row bg-white">
                  <div class="info-icon-wrapper"><img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon2.webp" alt="icon"></div>
                  <div class="info-text">
                    <span class="info-title">د - خالد سليم الحارثي </span>
                    <span class="info-sub">طب جامعه ام القري البورد <br>السعودي بجراحه العظام
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== QUALIFICATIONS SECTION ===== -->
<style>
.about-edu {
  background-color: #E5F2EE;
  padding: 80px 50px;
  border-radius: 24px;
  margin: 60px auto;
  direction: rtl;
}
.about-edu-header {
  text-align: center;
  margin-bottom: 50px;
}
.about-edu-title {
  font-size: clamp(28px, 4vw, 36px);
  font-weight: 800;
  color: #4a5e5d;
  margin-bottom: 15px;
  position: relative;
  display: inline-block;
}
.about-edu-title::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 3px;
  background-color: #61A095;
  border-radius: 2px;
}
.about-edu-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
}
.edu-card {
  background-color: #ffffff;
  border-radius: 16px;
  padding: 30px;
  display: flex;
  align-items: center;
  gap: 20px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.03);
}
.edu-card-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  border: 1.5px solid rgba(97, 160, 149, 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: #61A095;
}
.edu-card-icon img {
  max-width: 24px;
  max-height: 24px;
  object-fit: contain;
}
.edu-card-icon svg {
  width: 24px;
  height: 24px;
  stroke-width: 1.5;
}
.edu-card-content {
  flex: 1;
}
.edu-card-title {
  font-size: 18px;
  font-weight: 800;
  color: #4a5e5d;
  margin: 0 0 8px 0;
  line-height: 1.4;
}
.edu-card-sub {
  font-size: 14px;
  color: #889290;
  margin: 0;
  line-height: 1.6;
}

@media (max-width: 992px) {
  .about-edu { padding: 50px 30px; }
  .about-edu-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .about-edu { padding: 40px 20px; }
  .edu-card { padding: 20px; }
}
</style>

<div class="container">
<section class="about-edu fade-in">
  <div class="about-edu-header">
    <h2 class="about-edu-title">المؤهلات العلمية</h2>
  </div>
  
  <div class="about-edu-grid">
    <?php
    // Default SVGs
    $default_svgs = array(
      1 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>',
      2 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
      3 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>',
      4 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>'
    );

    $edu_defaults = array(
      1 => array( 'title' => 'الزمالة الإيطالية جامعة بادوفا', 'sub' => 'في تخصص جراحة أورام العظام وإعادة بناء المفاصل' ),
      2 => array( 'title' => 'استشاري جراحة أورام العظام وإعادة بناء المفاصل', 'sub' => 'تصنيف الهيئة السعودية للتخصصات الصحية' ),
      3 => array( 'title' => 'الزمالة الإيطالية في مستشفى ريزولي في جامعة بولونيا', 'sub' => 'في تخصص جراحة أورام العظام وإعادة بناء المفاصل' ),
      4 => array( 'title' => 'البورد السعودي في جراحة العظام', 'sub' => 'شهادة الاختصاص السعودية' ),
    );

    for ($i = 1; $i <= 4; $i++) {
      $title = get_field('fikrtak_edu_'.$i.'_title') ?: $edu_defaults[$i]['title'];
      $sub   = get_field('fikrtak_edu_'.$i.'_sub') ?: $edu_defaults[$i]['sub'];
      $icon  = get_field('fikrtak_edu_'.$i.'_icon') ?: '';
      
      echo '<div class="edu-card">';
      echo '  <div class="edu-card-icon">';
      if (!empty($icon)) {
        echo '    <img src="' . esc_url($icon) . '" alt="icon">';
      } else {
        echo $default_svgs[$i];
      }
      echo '  </div>';
      echo '  <div class="edu-card-content">';
      echo '    <h3 class="edu-card-title">' . esc_html($title) . '</h3>';
      echo '    <p class="edu-card-sub">' . esc_html($sub) . '</p>';
      echo '  </div>';
      echo '</div>';
    }
    ?>
  </div>
</section>
</div>

<!-- ===== EXPERIENCE SECTION ===== -->
<style>
.about-exp {
  background-color: #E5F2EE;
  padding: 80px 50px;
  border-radius: 24px;
  margin: 60px auto;
  direction: rtl;
}
.about-exp-header {
  text-align: center;
  margin-bottom: 50px;
}
.about-exp-title {
  font-size: clamp(28px, 4vw, 36px);
  font-weight: 800;
  color: #4a5e5d;
  margin-bottom: 15px;
  position: relative;
  display: inline-block;
}
.about-exp-title::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 3px;
  background-color: #61A095;
  border-radius: 2px;
}
.about-exp-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 24px;
}
.exp-card {
  background-color: #ffffff;
  border-radius: 16px;
  padding: 30px 20px;
  width: calc(33.333% - 16px);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  box-shadow: 0 4px 12px rgba(0,0,0,0.03);
}
.exp-card-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  border: 1.5px solid rgba(97, 160, 149, 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #61A095;
  margin-bottom: 20px;
}
.exp-card-icon img {
  max-width: 24px;
  max-height: 24px;
  object-fit: contain;
}
.exp-card-icon svg {
  width: 24px;
  height: 24px;
  stroke-width: 1.5;
}
.exp-card-title {
  font-size: 18px;
  font-weight: 800;
  color: #4a5e5d;
  margin: 0;
  line-height: 1.4;
}

@media (max-width: 992px) {
  .exp-card {
    width: calc(50% - 12px);
  }
}
@media (max-width: 768px) {
  .about-exp { padding: 40px 20px; }
  .exp-card {
    width: 100%;
  }
}
</style>

<div class="container">
<section class="about-exp fade-in">
  <div class="about-exp-header">
    <h2 class="about-exp-title"><?php echo esc_html(get_field('fikrtak_exp_main_title') ?: 'الخبرة الجراحية'); ?></h2>
  </div>
  
  <div class="about-exp-cards">
    <?php
    $default_svgs_exp = array(
      1 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
      2 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8 6a2 2 0 10-3 1.732v8.536A2 2 0 108 18a2 2 0 103-1.732V7.732A2 2 0 108 6z"></path></svg>',
      3 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12h4l3-9 5 18 3-9h3"></path></svg>',
      4 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>',
      5 => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h2.5l1.5-3 2 6 1.5-3H16"></path></svg>'
    );
    
    $exp_defaults = array(
      1 => 'جراحات أورام العظام',
      2 => 'إعادة بناء المفاصل',
      3 => 'الجراحات الدقيقة والمعقدة',
      4 => 'الحالات المتقدمة',
      5 => 'استعادة وظيفة العظام والمفاصل',
    );
    
    for ($i = 1; $i <= 5; $i++) {
      $title = get_field('fikrtak_exp_'.$i.'_title') ?: $exp_defaults[$i];
      $icon  = get_field('fikrtak_exp_'.$i.'_icon') ?: '';
      
      echo '<div class="exp-card">';
      echo '  <div class="exp-card-icon">';
      if (!empty($icon)) {
        echo '    <img src="' . esc_url($icon) . '" alt="icon">';
      } else {
        echo $default_svgs_exp[$i];
      }
      echo '  </div>';
      echo '  <h3 class="exp-card-title">' . esc_html($title) . '</h3>';
      echo '</div>';
    }
    ?>
  </div>
</section>
</div>

<!-- ===== FEATURES SECTION ===== -->
<style>
.about-features {
  background-color: #535756;
  padding: 60px;
  border-radius: 24px;
  margin: 60px auto;
  direction: rtl;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.about-features-text {
  color: #fff;
}
.about-features-title {
  font-size: clamp(28px, 4vw, 42px);
  font-weight: 800;
  color: #fff;
  margin-bottom: 20px;
  line-height: 1.3;
}
.about-features-desc {
  font-size: 16px;
  color: rgba(255, 255, 255, 0.8);
  line-height: 1.8;
  margin-bottom: 40px;
}
.about-features-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 16px;
}
.about-features-list li {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 16px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.9);
}
.about-features-icon {
  width: 24px;
  height: 24px;
  color: #61A095;
  flex-shrink: 0;
  border-radius: 50%;
  border: 1.5px solid #61A095;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2px;
}
.about-features-img {
  width: 100%;
  height: auto;
  border-radius: 16px;
  object-fit: cover;
  display: block;
}
.about-features-img-placeholder {
  width: 100%;
  aspect-ratio: 4/3;
  border-radius: 16px;
  background-color: rgba(255,255,255,0.05);
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255,255,255,0.5);
  font-size: 18px;
  border: 1px dashed rgba(255,255,255,0.2);
}

@media (max-width: 992px) {
  .about-features {
    grid-template-columns: 1fr;
    gap: 40px;
    padding: 40px 30px;
  }
}
@media (max-width: 768px) {
  .about-features { padding: 40px 20px; }
}
</style>

<div class="container">
<section class="about-features fade-in">
  
  <div class="about-features-text">
    <h2 class="about-features-title"><?php echo esc_html(get_field('fikrtak_features_title') ?: 'ما يميز د. خالد الحارثي'); ?></h2>
    <p class="about-features-desc">
      <?php echo esc_html(get_field('fikrtak_features_desc') ?: 'اختيار د. خالد الحارثي يعني الاعتماد على خبرة علمية وجراحية متقدمة في التعامل مع أدق حالات العظام، مع التركيز على تحقيق أفضل نتيجة علاجية ممكنة لكل مريض.'); ?>
    </p>
    
    <ul class="about-features-list">
      <?php
      $features_defaults = array(
        1 => 'خبرة واسعة',
        2 => 'تدريب دولي في إيطاليا',
        3 => 'التعامل مع الحالات المعقدة',
        4 => 'أفضل النتائج الوظيفية',
        5 => 'متابعة دقيقة بعد الجراحة',
      );
      for ($i = 1; $i <= 5; $i++) {
        $feature = get_field('fikrtak_feature_' . $i) ?: $features_defaults[$i];
        if (!empty($feature)) {
          echo '<li>';
          echo '  <div class="about-features-icon">';
          echo '    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>';
          echo '  </div>';
          echo '  ' . esc_html($feature);
          echo '</li>';
        }
      }
      ?>
    </ul>
  </div>

  <div class="about-features-img-col">
    <?php 
    $img = get_field('fikrtak_features_img') ?: '';
    if (!empty($img)) {
      echo '<img src="' . esc_url($img) . '" alt="د. خالد الحارثي" class="about-features-img">';
    } else {
      echo '<div class="about-features-img-placeholder">الرجاء رفع الصورة من تخصيص القالب</div>';
    }
    ?>
  </div>

</section>
</div>

<!-- ===== METHODOLOGY SECTION ===== -->
<style>
.about-methodology {
  background-color: #ffffff;
  padding: 80px 0;
  margin: 40px auto;
  direction: rtl;
}
.about-method-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 60px auto;
}
.about-method-title {
  font-size: clamp(28px, 4vw, 36px);
  font-weight: 800;
  color: #4a5e5d;
  margin-bottom: 20px;
  position: relative;
  display: inline-block;
}
.about-method-title::after {
  content: "";
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 3px;
  background-color: #61A095;
  border-radius: 2px;
}
.about-method-desc {
  font-size: 16px;
  color: #889290;
  line-height: 1.8;
  margin-top: 35px;
}
.about-method-timeline {
  display: flex;
  justify-content: space-between;
  position: relative;
  margin: 0 auto;
}
/* The line behind the circles */
.about-method-timeline::before {
  content: "";
  position: absolute;
  top: 40px; /* Half of circle height */
  left: 10%;
  right: 10%;
  height: 2px;
  background-color: #E5F2EE;
  z-index: 1;
}
.method-step {
  flex: 1;
  text-align: center;
  position: relative;
  z-index: 2;
  padding: 0 15px;
}
.method-step-circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #ffffff;
  border: 3px solid #E5F2EE;
  margin: 0 auto 20px auto;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  font-weight: 800;
  color: #61A095;
  box-shadow: 0 0 0 10px #ffffff; /* hide the line behind */
}
.method-step-title {
  font-size: 18px;
  font-weight: 800;
  color: #4a5e5d;
  margin-bottom: 10px;
}
.method-step-desc {
  font-size: 14px;
  color: #889290;
  line-height: 1.6;
}

@media (max-width: 768px) {
  .about-method-timeline {
    flex-direction: column;
    gap: 40px;
  }
  .about-method-timeline::before {
    top: 0;
    bottom: 0;
    left: 50%;
    right: auto;
    width: 2px;
    height: 100%;
    transform: translateX(-50%);
  }
}
</style>

<div class="container">
<section class="about-methodology fade-in">
  <div class="about-method-header">
    <h2 class="about-method-title"><?php echo esc_html(get_field('fikrtak_method_title') ?: 'منهجية العلاج'); ?></h2>
    <p class="about-method-desc">
      <?php echo esc_html(get_field('fikrtak_method_desc') ?: 'يتبع د. خالد الحارثي نهجاً طبياً دقيقاً في التعامل مع حالات العظام، يعتمد على التشخيص الشامل والتخطيط الجراحي المتخصص لضمان أفضل نتيجة علاجية ممكنة.'); ?>
    </p>
  </div>
  
  <div class="about-method-timeline">
    <?php
    $method_defaults = array(
      1 => array('title' => 'تقييم دقيق للحالة', 'desc' => 'فحص شامل وتحاليل دقيقة لفهم كامل للحالة.'),
      2 => array('title' => 'وضع خطة علاج مناسبة', 'desc' => 'خطة علاجية مخصصة وفق طبيعة الحالة.'),
      3 => array('title' => 'التدخل الجراحي عند الحاجة', 'desc' => 'تنفيذ الجراحة بأعلى مستويات الدقة والأمان.'),
      4 => array('title' => 'المتابعة بعد العلاج', 'desc' => 'متابعة منتظمة لضمان أفضل النتائج.'),
    );
    
    for ($i = 1; $i <= 4; $i++) {
      $title = get_field('fikrtak_method_'.$i.'_title') ?: $method_defaults[$i]['title'];
      $desc  = get_field('fikrtak_method_'.$i.'_desc') ?: $method_defaults[$i]['desc'];
      
      echo '<div class="method-step">';
      echo '  <div class="method-step-circle">' . $i . '</div>';
      echo '  <h3 class="method-step-title">' . esc_html($title) . '</h3>';
      echo '  <p class="method-step-desc">' . esc_html($desc) . '</p>';
      echo '</div>';
    }
    ?>
  </div>
</section>
</div>

<!-- ===== ABOUT CTA SECTION ===== -->
<style>
.about-final-cta {
  background-color: #535756;
  background-size: cover;
  background-position: center;
  padding: 80px 40px;
  border-radius: 24px;
  margin: 60px auto;
  direction: rtl;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.about-final-cta::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: linear-gradient(to bottom, rgba(83,87,86,0.9), rgba(83,87,86,0.95));
  z-index: 1;
}
.about-final-cta-content {
  position: relative;
  z-index: 2;
  max-width: 800px;
  margin: 0 auto;
}
.about-final-cta-title {
  font-size: clamp(32px, 5vw, 48px);
  font-weight: 800;
  color: #fff;
  margin-bottom: 20px;
}
.about-final-cta-desc {
  font-size: 18px;
  color: rgba(255, 255, 255, 0.8);
  line-height: 1.8;
  margin-bottom: 40px;
}
.about-final-cta-features {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 24px;
  list-style: none;
  padding: 0;
  margin: 0 0 50px 0;
}
.about-final-cta-features li {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 16px;
  color: rgba(255, 255, 255, 0.9);
}
.about-final-cta-features svg {
  width: 20px;
  height: 20px;
  color: #61A095;
}
.about-final-cta-btns {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}
.about-final-cta-btns .btn {
  padding: 15px 40px;
  border-radius: 50px;
  font-size: 16px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.3s ease;
}
.about-final-cta-btns .btn-primary {
  background-color: #61A095;
  color: #fff;
  border: 1px solid #61A095;
}
.about-final-cta-btns .btn-primary:hover {
  background-color: #4a5e5d;
  border-color: #4a5e5d;
}
.about-final-cta-btns .btn-outline {
  background-color: transparent;
  color: #fff;
  border: 1px solid rgba(255,255,255,0.4);
}
.about-final-cta-btns .btn-outline:hover {
  background-color: rgba(255,255,255,0.1);
  border-color: #fff;
}

@media (max-width: 768px) {
  .about-final-cta { padding: 50px 20px; }
  .about-final-cta-features { flex-direction: column; align-items: center; gap: 15px; }
  .about-final-cta-btns { flex-direction: column; }
  .about-final-cta-btns .btn { width: 100%; }
}
</style>

<div class="container">
<?php 
$bg_img = get_field('fikrtak_about_cta_bg') ?: '';
$bg_style = !empty($bg_img) ? 'background-image: url(' . esc_url($bg_img) . ');' : '';
?>
<section class="about-final-cta fade-in" style="<?php echo $bg_style; ?>">
  <div class="about-final-cta-content">
    <h2 class="about-final-cta-title"><?php echo esc_html(get_field('fikrtak_about_cta_title') ?: 'احجز موعدك الآن'); ?></h2>
    <p class="about-final-cta-desc">
      <?php echo esc_html(get_field('fikrtak_about_cta_desc') ?: 'ابدأ رحلتك العلاجية مع د. خالد الحارثي للحصول على تقييم دقيق لحالتك وخطة علاج مناسبة تعتمد على أحدث الأساليب في جراحة العظام.'); ?>
    </p>
    
    <ul class="about-final-cta-features">
      <?php
      $cta_features = array(
        1 => 'استشارة طبية',
        2 => 'تقييم شامل للحالة',
        3 => 'خطة علاج متخصصة',
      );
      for ($i = 1; $i <= 3; $i++) {
        $feat = get_field('fikrtak_about_cta_feat_'.$i) ?: $cta_features[$i];
        if (!empty($feat)) {
          echo '<li>';
          echo '  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>';
          echo '  ' . esc_html($feat);
          echo '</li>';
        }
      }
      ?>
    </ul>
    
    <div class="about-final-cta-btns">
      <?php 
      $wa_number = get_field('whatsapp_number') ?: '966500000000'; 
      $btn1_text = get_field('fikrtak_about_cta_btn1_text') ?: 'احجز موعدك';
      $btn2_text = get_field('fikrtak_about_cta_btn2_text') ?: 'استشارة الآن';
      ?>
      <a href="https://wa.me/<?php echo esc_attr($wa_number); ?>" class="btn btn-primary"><?php echo esc_html($btn1_text); ?></a>
      <a href="https://wa.me/<?php echo esc_attr($wa_number); ?>" class="btn btn-outline"><?php echo esc_html($btn2_text); ?></a>
    </div>
  </div>
</section>
</div>

<!-- ===== FAQ SECTION ===== -->
<style>
.about-faq {
  padding: 80px 0;
  background: var(--white);
}
.about-faq-inner {
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: 60px;
  align-items: start;
}
.about-faq-text-col {
  text-align: right;
}
.about-faq-text-col .faq-sub-centered {
  text-align: right;
  color: var(--text);
  font-weight: 500;
  font-size: 16px;
  margin-bottom: 8px;
}
.about-faq-text-col .faq-title-centered {
  text-align: right;
  color: var(--teal);
  font-weight: 800;
  margin-bottom: 24px;
  font-size: clamp(28px, 4vw, 36px);
}
.about-faq-desc {
  color: var(--teal-dark);
  opacity: 0.7;
  line-height: 1.8;
  margin-bottom: 32px;
  font-size: 15px;
  max-width: 400px;
}
.about-faq-btn {
  padding: 12px 40px;
  border-radius: 24px;
  font-size: 15px;
  background-color: #61a095;
  border: none;
  color: white;
  text-decoration: none;
  display: inline-block;
  font-weight: 700;
  transition: all 0.3s ease;
}
.about-faq-btn:hover {
  background-color: #4a5e5d;
  transform: translateY(-2px);
}

@media (max-width: 992px) {
  .about-faq-inner {
    grid-template-columns: 1fr;
    gap: 40px;
  }
}
</style>

<section class="about-faq faq" id="about-faq">
  <div class="container">
    <div class="about-faq-inner fade-in">
      
      <!-- Right: Title & CTA -->
      <div class="about-faq-text-col">
        <p class="faq-sub-centered">الأسئلة الشائعة</p>
        <h2 class="faq-title-centered">
          <?php echo wp_kses_post(get_field('fikrtak_about_faq_title') ?: 'إجابات لأكثر الأسئلة<br>شيوعاً'); ?>
        </h2>
        <p class="about-faq-desc">
          <?php echo esc_html(get_field('fikrtak_about_faq_desc') ?: 'نجيب على أبرز استفساراتك حول فترة التعافي وما يمكن توقعه خلال جلسات المتابعة.'); ?>
        </p>
        <?php 
        $wa = get_field('whatsapp_number') ?: '966500000000'; 
        $btn_text = get_field('fikrtak_about_faq_btn_text') ?: 'احجز الآن';
        ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="about-faq-btn">
          <?php echo esc_html($btn_text); ?>
        </a>
      </div>

      <!-- Left: FAQ Accordion -->
      <div class="faq-list" id="aboutFaqList">
        <?php
        $faq_defaults = array(
          1 => array('q' => 'كم تستغرق فترة المتابعة بعد العملية؟', 'a' => 'تعتمد المدة على نوع العملية وحالة المريض، وتتراوح عادة بين أسابيع إلى بضعة أشهر لضمان التئام العظام واستعادة الوظائف الحركية بالكامل.'),
          2 => array('q' => 'متى يمكنني البدء في العلاج الطبيعي؟', 'a' => 'يتم تحديد وقت البدء بناءً على نوع العملية وتوجيهات الطبيب المعالج، وغالباً ما يبدأ العلاج الطبيعي بشكل مبدئي بعد أيام من الجراحة.'),
          3 => array('q' => 'كيف يمكنني التحكم في الألم خلال فترة التعافي؟', 'a' => 'يوصف الطبيب مجموعة من المسكنات وتوجيهات للراحة تسهم في السيطرة على الألم بطريقة فعالة وآمنة.'),
          4 => array('q' => 'هل المتابعة تشمل تغيير الضمادات فقط؟', 'a' => 'تشمل المتابعة تقييم الجرح، إزالة الغرز، إجراء أشعة للاطمئنان على التئام العظام وتوجيه المريض لخطوات العلاج الطبيعي.'),
          5 => array('q' => 'ما هي العلامات التي تستوجب التواصل الفوري مع الدكتور؟', 'a' => 'تواصل فوراً في حال ظهور ارتفاع حاد في الحرارة، إفرازات أو احمرار شديد حول الجرح، ألم متصاعد لا يُحتمل، أو تورم مفاجئ.'),
        );
        
        for ($i = 1; $i <= 5; $i++) {
          $q = get_field('fikrtak_about_faq_q_' . $i) ?: $faq_defaults[$i]['q'];
          $a = get_field('fikrtak_about_faq_a_' . $i) ?: $faq_defaults[$i]['a'];
          
          if (!empty($q) && !empty($a)) {
            echo '<div class="faq-item" id="aboutFaqItem' . $i . '">';
            echo '  <button class="faq-q" aria-expanded="false" aria-controls="aboutFaqA' . $i . '" id="aboutFaqQ' . $i . '">';
            echo '    <span class="faq-q-text">' . esc_html($q) . '</span>';
            echo '    <span class="faq-icon">';
            echo '      <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9" /></svg>';
            echo '      <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12" /></svg>';
            echo '    </span>';
            echo '  </button>';
            echo '  <div class="faq-a" id="aboutFaqA' . $i . '" role="region" aria-labelledby="aboutFaqQ' . $i . '">';
            echo '    <p>' . nl2br(esc_html($a)) . '</p>';
            echo '  </div>';
            echo '</div>';
          }
        }
        ?>
      </div><!-- .faq-list -->

    </div><!-- .faq-inner -->
  </div><!-- .container -->
</section>
<!-- ===== END FAQ SECTION ===== -->

<div class="container" style="padding: 60px 0;">
  <div class="entry-content" style="font-size: 17px; line-height: 2; color: var(--text);">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
  </div>
</div>

<?php get_footer(); ?>
