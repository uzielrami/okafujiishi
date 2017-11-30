<?php get_header(); ?>

<main class="main main-archive" id="js-main-archive">
  <section class="author-title">
    <div class="section-inner">
      <div class="author-pic">
        <?php echo get_avatar(get_the_author_meta('ID'), 128); ?>
      </div>
      <div class="author-name">
        <h1><?php the_author_meta('display_name'); ?></h1>
      </div>
      <div class="author-description">
        <?php the_author_meta('description'); ?>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="section-inner">
      <div class="section-archives-title" id="js-section-title">
        <?php get_template_part('template-parts/common/archive-title') ?>
      </div>
      <div class="section-content">
        <?php if ( have_posts() ) : ?>
          <div class="articles">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part('template-parts/common/articles-normal'); ?>
            <?php endwhile; ?>
          </div>
          <?php the_posts_pagination( array(
            'format' => '/page/%#%#js-main-index',
            'prev_text' => '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            'next_text' => '<i class="fa fa-caret-right" aria-hidden="true"></i>',
          )); ?>
        <?php else : ?>
            <?php get_template_part('template-parts/common/articles-none'); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
