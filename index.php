<?php
/**
 * The main template file
 */
get_header(); ?>

<div class="blog-page">
  <header class="blog-hero">
    <div class="container">
      <div class="section-tag"><span class="dot-teal"></span> المدونة</div>
      <h1>أحدث المقالات والنصائح الطبية</h1>
    </div>
  </header>

  <main class="container">
    <div class="articles-grid">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article class="article-card">
              <div class="article-img">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('large'); ?>
                  <?php else : ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog.png" alt="<?php the_title_attribute(); ?>" />
                  <?php endif; ?>
                </a>
              </div>
              <div class="article-body">
                <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="article-excerpt">
                  <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="article-more">
                  اقرأ المزيد 
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M5 12L12 19M5 12L12 5"/></svg>
                </a>
              </div>
            </article>
            <?php
        endwhile;
    else :
        echo '<p class="no-posts">لا توجد مقالات حالياً.</p>';
    endif;
    ?>
    </div>
    
    <div class="pagination-wrapper">
      <div class="pagination">
        <?php 
        the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => '→',
            'next_text' => '←',
            'screen_reader_text' => ' '
        )); 
        ?>
      </div>
    </div>
  </main>
</div>


<?php get_footer(); ?>
