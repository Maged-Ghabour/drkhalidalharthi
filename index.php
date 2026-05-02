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
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => $paged,
        'post_status'    => 'publish'
    );
    $blog_query = new WP_Query( $args );

    if ( $blog_query->have_posts() ) :
        while ( $blog_query->have_posts() ) :
            $blog_query->the_post();
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
                  <?php echo wp_trim_words(get_the_excerpt(), 22, '...'); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="article-more">
                  اقرأ المزيد 
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M5 12L12 19M5 12L12 5"/></svg>
                </a>
              </div>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<div style="grid-column: 1/-1; text-align: center; padding: 60px 0;">';
        echo '<img src="'.esc_url(get_template_directory_uri()).'/assets/images/no-posts.svg" style="width: 150px; margin: 0 auto 20px; opacity: 0.3;">';
        echo '<p class="no-posts" style="font-size: 14px; color: #ccc; font-weight: 700;">لا توجد مقالات حالياً في هذا القسم.</p>';
        echo '</div>';
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
