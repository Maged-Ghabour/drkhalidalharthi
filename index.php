<?php
/**
 * The main template file
 */
get_header(); ?>

<main class="container" style="padding: 120px 0; min-height: 50vh;">
  <div style="text-align: center; margin-bottom: 60px;">
    <div class="section-tag" style="margin: 0 auto 16px;"><span class="dot-teal"></span> المدونة</div>
    <h1 class="section-title">أحدث المقالات والنصائح الطبية</h1>
  </div>

  <div class="articles-grid">
  <?php
  if ( have_posts() ) :
      while ( have_posts() ) :
          the_post();
          ?>
          <article class="article-card" style="display: flex; flex-direction: column;">
            <div class="article-img">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png" alt="<?php the_title_attribute(); ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div style="padding-top: 16px; flex-grow: 1; display: flex; flex-direction: column;">
              <p class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <div class="article-excerpt" style="color: var(--text2); font-size: 14px; margin-top: 8px; flex-grow: 1;">
                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
              </div>
              <a href="<?php the_permalink(); ?>" style="color: var(--teal); font-weight: 700; margin-top: 16px; display: inline-block;">اقرأ المزيد ←</a>
            </div>
          </article>
          <?php
      endwhile;
  else :
      echo '<p style="text-align:center; width:100%;">لا توجد مقالات حالياً.</p>';
  endif;
  ?>
  </div>
  
  <div class="pagination-wrapper">
    <?php 
    the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => 'السابق',
        'next_text' => 'التالي',
        'screen_reader_text' => ' '
    )); 
    ?>
  </div>
</main>

<?php get_footer(); ?>
