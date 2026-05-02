<?php
/**
 * The template for displaying all pages
 */
get_header(); ?>

<main class="container" style="padding: 140px 0 100px; min-height: 60vh;">
  <?php
  while ( have_posts() ) :
      the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width: 900px; margin: 0 auto;">
        
        <header class="entry-header" style="text-align: center; margin-bottom: 50px;">
          <h1 class="entry-title section-title" style="margin-bottom: 15px;"><?php the_title(); ?></h1>
          <div class="header-line" style="width: 60px; height: 3px; background: var(--teal); margin: 0 auto; border-radius: 10px;"></div>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail" style="border-radius: var(--radius); overflow: hidden; margin-bottom: 50px; box-shadow: var(--shadow);">
              <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: auto; display: block;')); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content" style="font-size: 17px; line-height: 2; color: var(--text);">
          <?php
          the_content();
          ?>
        </div>
        
      </article>
      <?php
  endwhile;
  ?>
</main>

<?php get_footer(); ?>
