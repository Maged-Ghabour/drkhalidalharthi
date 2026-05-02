<?php
/**
 * The front page template file
 */
get_header(); ?>

<div class="hero-content">
  <div class="social-proof">
    <div class="avatars">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/avatars.png" alt="زوار"
        class="avatars-img" />
    </div>
    <div class="social-text">
      <span class="social-num">+12K</span>
      <span class="social-lbl">استشارة</span>
    </div>
  </div>
  <div class="hero-title-wrap">
    <h1 class="hero-title">استشاري جراحة أورام<br>العظام وإعادة بناء<br>المفاصل</h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Vector.png" alt="vector"
      class="hero-vector" />
  </div>
  <div class="hero-sub-wrap">
    <p class="hero-sub-title">متى يجب زيارة الطبيب؟</p>
    <p class="hero-sub">عند الشعور بألم مستمر أو ظهور أعراض غير طبيعية في العظام.</p>
  </div>
  <div class="hero-btns">
    <a href="https://wa.me/966500000000" class="btn btn-primary btn-lg">
      استشارة عبر واتساب
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
        <path
          d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
      </svg>
    </a>
    <a href="#about" class="btn btn-dark btn-lg">معرفة المزيد ←</a>
  </div>
  <div class="symptoms-section">
    <div class="symptoms-top-row">
      <p class="symptoms-title">متى تحتاج زيارة دكتور<br>أورام العظام؟</p>
      <div class="symptoms-nav">
        <button class="icon-btn dark">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </button>
        <button class="icon-btn light">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
    <div class="symptoms-bottom-row">
      <div class="symptoms-col">
        <span class="symptom-chip chip-sm">ألم يزداد مع الوقت أو أثناء الليل</span>
        <span class="symptom-chip chip-lg bg-teal-light">صعوبة في الحركة أو ضعف مفاجئ</span>
      </div>
      <div class="symptoms-col">
        <span class="symptom-chip chip-lg">ألم مستمر في العظام بدون سبب واضح</span>
        <span class="symptom-chip chip-sm">تورم أو كتلة في أحد الأطراف</span>
      </div>
      <a href="#services" class="symptoms-more-btn">
        المزيد
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </a>
    </div>
  </div>
</div>
<div class="hero-img-col">
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
</section>

<!-- ===== STATS ===== -->
<section class="stats" id="about">
  <div class="container">
    <div class="stats-inner">
      <div class="stats-text">
        <div class="stats-text-header">
          <h2>نتميز بخبرتنا</h2>
          <a href="https://wa.me/966500000000" class="btn btn-primary whatsapp-stat-btn">
            استشارة عبر واتساب
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
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
          <span class="stat-num"><span class="counter" data-target="99">0</span>%</span>
          <span class="stat-lbl">نسبة نجاحنا</span>
        </div>

        <div class="stat-item">
          <span class="stat-num"><span class="counter" data-target="13">0</span>+</span>
          <span class="stat-lbl">سنوات خبرة</span>
        </div>

        <div class="stat-item">
          <span class="stat-num">+<span class="counter" data-target="2000" data-format-k="true">0</span></span>
          <span class="stat-lbl">حالة مرضية</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="services" id="services">
  <div class="container">
    <div class="section-tag"><span class="dot-teal"></span> الخدمات</div>
    <h2 class="section-title">تقديم استشارات متخصصة لتقييم الحالة<br />ووضع خطة علاج مناسبة</h2>
    <div class="services-grid">
      <?php
      $services_query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => -1
      ));
      if ($services_query->have_posts()):
        while ($services_query->have_posts()):
          $services_query->the_post(); ?>
          <div class="service-card"><?php the_title(); ?></div>
        <?php endwhile;
        wp_reset_postdata();
      else: ?>
        <div class="service-card">جراحة أورام العظام</div>
        <div class="service-card">إعادة بناء المفاصل</div>
        <div class="service-card">الجراحات الدقيقة للعظام</div>
        <div class="service-card">المتابعة بعد الجراحة</div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ===== ARTICLES ===== -->
<section class="articles" id="articles">
  <div class="container">
    <div class="section-tag"><span class="dot-teal"></span> المقالات والاخبار</div>
    <h2 class="section-title">نوفر اكثر من +٢٠ مقال ونصائح طبيه</h2>
    <div class="articles-grid">
      <?php
      $articles_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 4
      ));
      if ($articles_query->have_posts()):
        while ($articles_query->have_posts()):
          $articles_query->the_post(); ?>
          <article class="article-card">
            <div class="article-img">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png"
                  alt="<?php the_title_attribute(); ?>" />
              <?php endif; ?>
            </div>
            <p class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      else: ?>
        <article class="article-card">
          <div class="article-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png"
              alt="مقالة طبية" /></div>
          <p class="article-title">عنوان المقالة</p>
        </article>
        <article class="article-card">
          <div class="article-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png"
              alt="مقالة طبية" /></div>
          <p class="article-title">عنوان المقالة</p>
        </article>
        <article class="article-card">
          <div class="article-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png"
              alt="مقالة طبية" /></div>
          <p class="article-title">عنوان المقالة</p>
        </article>
        <article class="article-card">
          <div class="article-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png"
              alt="مقالة طبية" /></div>
          <p class="article-title">عنوان المقالة</p>
        </article>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ===== REVIEWS ===== -->
<section class="reviews" id="reviews">
  <div class="container">
    <div class="reviews-mobile-header">
      <div class="section-tag"><span class="dot-teal"></span> قصص نجاح</div>
      <h2 class="reviews-title">آراء العملاء</h2>
    </div>
    <div class="reviews-inner">
      <div class="reviews-content">
        <h2 class="reviews-title desktop-only">آراء العملاء</h2>
        <div class="review-card" id="reviewCard">
          <!-- سيتم ملء هذا الجزء عبر JavaScript -->
          <div class="review-meta">
            <div class="reviewer-info">
              <strong class="reviewer-name">اسم العميل</strong>
              <span class="reviewer-handle">@Username</span>
            </div>
            <div class="reviewer-avatar"></div>
          </div>
          <div class="stars">★★★★★</div>
          <p class="review-score">5.0 review</p>
          <blockquote class="review-text">
            جاري تحميل الآراء...
          </blockquote>
        </div>
      </div>

      <div class="reviews-images">
        <div class="section-tag desktop-only"><span class="dot-teal"></span> قصص نجاح</div>
        <?php
        $reviews_query = new WP_Query(array(
          'post_type' => 'review',
          'posts_per_page' => -1
        ));
        $js_reviews = array();
        if ($reviews_query->have_posts()):
          while ($reviews_query->have_posts()):
            $reviews_query->the_post();
            $js_reviews[] = array(
              'name' => get_the_title(),
              'handle' => get_post_meta(get_the_ID(), 'reviewer_handle', true) ?: '@' . sanitize_title(get_the_title()),
              'stars' => (int) (get_post_meta(get_the_ID(), 'review_stars', true) ?: 5),
              'score' => get_post_meta(get_the_ID(), 'review_score', true) ?: '5.0',
              'text' => '"' . get_the_content() . '"',
              'avatar' => get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?: ''
            );
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
        <script>
          window.dynamicReviews = <?php echo json_encode($js_reviews); ?>;
        </script>
        <div class="slide-counter"><span
            id="currentSlide">01</span>/<?php echo str_pad(count($js_reviews) ?: 3, 2, '0', STR_PAD_LEFT); ?></div>
        <div class="reviews-imgs-row">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/testimonials.png" alt="العيادة"
            class="rev-img" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/testimonials.png" alt="العيادة"
            class="rev-img rev-img-sm" />
        </div>
        <div class="slide-nav">
          <button class="slide-btn" id="prevReview" aria-label="السابق">←</button>
          <button class="slide-btn slide-btn-active" id="nextReview" aria-label="التالي">→</button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="faq" id="faq">
  <div class="container">
    <div class="faq-inner">
      <div class="faq-header-centered">
        <p class="faq-sub-centered">أكثر الأسئلة تكراراً... نجاوب عليها عشانك</p>
        <h2 class="faq-title-centered">الأسئلة الشائعة</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item active-item">
          <button class="faq-q" id="faq1-btn" aria-expanded="true" aria-controls="faq1">
            <span>متى يجب زيارة الطبيب؟</span>
            <span class="faq-icon">
              <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>
          </button>
          <div class="faq-a open" id="faq1" role="region">
            <p>عند الشعور بألم مستمر أو ظهور أعراض غير طبيعية في العظام.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-q" id="faq2-btn" aria-expanded="false" aria-controls="faq2">
            <span>هل تقدمون استشارات عن بُعد؟</span>
            <span class="faq-icon">
              <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>
          </button>
          <div class="faq-a" id="faq2" role="region">
            <p>نعم، نقدم استشارات طبية متخصصة عن بُعد عبر واتساب لتقييم حالتك ووضع خطة علاج مناسبة.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-q" id="faq3-btn" aria-expanded="false" aria-controls="faq3">
            <span>ما هي تخصصات الدكتور خالد الحارثي؟</span>
            <span class="faq-icon">
              <svg class="icon-down" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <svg class="icon-minus" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>
          </button>
          <div class="faq-a" id="faq3" role="region">
            <p>متخصص في جراحة أورام العظام، إعادة بناء المفاصل، الجراحات الدقيقة للعظام، والمتابعة ما بعد الجراحة.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>