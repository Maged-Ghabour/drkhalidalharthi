<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>

<div class="single-post-page">
  <?php
  while ( have_posts() ) :
      the_post();
      ?>
      <header class="post-header">
        <div class="container">
          <div class="section-tag"><span class="dot-teal"></span> مقال طبي</div>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="post-meta">
            <span class="meta-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> <?php echo get_the_date(); ?></span>
            <span class="meta-item"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> <?php the_author(); ?></span>
          </div>
        </div>
      </header>

      <main class="container">
        <div class="single-post-layout">
          <!-- Main Content -->
          <div class="post-main-content">
            <?php if (has_post_thumbnail()) : ?>
              <div class="post-featured-img">
                  <?php the_post_thumbnail('full'); ?>
              </div>
            <?php endif; ?>

            <div class="post-content-wrap">
              <div class="entry-content blog-content">
                <?php the_content(); ?>
              </div>
              
              <!-- Author Box -->
              <div class="author-box">
                 <div class="author-avatar">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 90 ); ?>
                 </div>
                 <div class="author-info">
                    <h4>د. خالد سليم الحارثي</h4>
                    <p>استشاري جراحة أورام العظام وإعادة بناء المفاصل، يقدم أحدث النصائح الطبية والخبرات العلمية لمساعدتكم على استعادة الحركة والحياة الصحية.</p>
                 </div>
              </div>

              <footer class="post-footer-nav">
                  <div class="post-navigation">
                      <div class="nav-prev"><?php previous_post_link('%link', '← المقال السابق'); ?></div>
                      <div class="nav-next"><?php next_post_link('%link', 'المقال التالي →'); ?></div>
                  </div>
              </footer>
            </div>
          </div>

          <!-- Sidebar -->
          <aside class="post-sidebar">
             <div class="sidebar-widget">
                <h4 class="widget-title">أحدث المقالات</h4>
                <div class="recent-posts-list">
                   <?php
                   $recent_posts = new WP_Query(array(
                       'post_type' => 'post',
                       'posts_per_page' => 5,
                       'post__not_in' => array(get_the_ID())
                   ));
                   if ($recent_posts->have_posts()) :
                       while ($recent_posts->have_posts()) : $recent_posts->the_post();
                   ?>
                   <div class="recent-post-item">
                      <a href="<?php the_permalink(); ?>" class="recent-post-thumb">
                         <?php if (has_post_thumbnail()) : the_post_thumbnail('thumbnail'); else : ?>
                         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png" alt="">
                         <?php endif; ?>
                      </a>
                      <div class="recent-post-info">
                         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                         <span class="recent-post-date"><?php echo get_the_date(); ?></span>
                      </div>
                   </div>
                   <?php
                       endwhile;
                       wp_reset_postdata();
                   endif;
                   ?>
                </div>
             </div>
             
             <!-- Special Advice Card -->
             <div class="sidebar-promo">
                <h4>تحتاج لاستشارة؟</h4>
                <p>تواصل مباشرة مع عيادة الدكتور خالد للحصول على تشخيص دقيق.</p>
                <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('fikrtak_whatsapp', '')); ?>" class="btn btn-primary btn-sm">احجز موعدك الآن</a>
             </div>
          </aside>
        </div>
      </main>

      <?php
  endwhile;
  ?>
</div>


<?php get_footer(); ?>
