<?php get_header(); ?>
<main class="page__main">
  <div class="page__video">
    <div class="js-youtube dark" id="js-youtube"></div>
  </div><!-- /.page__video -->
  <section class="page__contents">
    <div class="page__content page__content--card">
      <h1 class="page__categoryTitle"><?php single_cat_title(); ?></h1>
    </div>
    <div class="page__content page__content--card">
      <ul class="worksList">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); get_template_part('each_exrpt_post'); ?>
            <li class="worksList__item">
              <a class="worksList__link" href="<?php the_permalink() ?>">
                <?php if (has_post_thumbnail()): ?>
                  <div class="worksList__imgWrapper">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php endif; ?>
                <div class="worksList__titleWrapper">
                  <h3 class="worksList__title"><?php the_title(); ?></h3>
                  <p class="worksList__date"><?php the_time('Y/m/j H:i'); ?></p>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <li class="worksList__item">
            <p class="worksList__noItemText">記事はありません。</p>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </section><!-- /.page__contents -->
</main>
<?php get_footer(); ?>
