<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>

<main class="container" style="padding: 120px 0; min-height: 50vh;">
  <?php
  while ( have_posts() ) :
      the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-article'); ?> style="max-width: 800px; margin: 0 auto;">
        
        <header class="entry-header" style="text-align: center; margin-bottom: 40px;">
          <div class="section-tag" style="margin: 0 auto 16px;"><span class="dot-teal"></span> مقال طبي</div>
          <?php the_title( '<h1 class="entry-title section-title" style="margin-bottom: 0;">', '</h1>' ); ?>
          <div class="post-meta" style="color: var(--text2); font-size: 14px; margin-top: 16px;">
            <span>📅 <?php echo get_the_date(); ?></span>
            <span style="margin: 0 10px; color: var(--border);">|</span>
            <span>👤 <?php the_author(); ?></span>
          </div>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail" style="border-radius: var(--radius); overflow: hidden; margin-bottom: 40px; box-shadow: var(--shadow-md);">
              <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; display: block;')); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content blog-content" style="font-size: 17px; line-height: 2; color: var(--text);">
          <?php
          the_content();
          ?>
        </div>
        
        <div class="post-navigation" style="margin-top: 60px; padding-top: 30px; border-top: 1px solid var(--border); display: flex; justify-content: space-between;">
            <div class="nav-previous"><?php previous_post_link('%link', '← المقال السابق'); ?></div>
            <div class="nav-next"><?php next_post_link('%link', 'المقال التالي →'); ?></div>
        </div>
        
      </article>
      <?php
  endwhile;
  ?>
</main>

<?php get_footer(); ?>
