<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta name="format-detection" content="telephone=no">
  <title><?php if (! is_front_page()): wp_title('ー', true, 'right'); endif; ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('page'); ?>>
  <header class="page__header<?php if (is_admin_bar_showing()): ?> page__header--isAdmin<?php endif; ?><?php if (is_front_page()): ?> js-toggleHeader<?php endif; ?>"<?php if (is_front_page()): ?> id="js-toggleHeader"<?php endif; ?>>
    <div class="header">
      <div class="header__flexWrapper">
        <a class="header__logo" href="/">岡藤石</a>
        <nav class="header__nav">
          <ul class="globalNavList">
            <li class="globalNavList__item">
              <a class="globalNavList__link" href="/#conceptDescription">CONCEPT</a>
            </li>
            <li class="globalNavList__item">
              <a class="globalNavList__link" href="/about">ABOUT</a>
            </li>
            <li class="globalNavList__item">
              <a class="globalNavList__link" href="/category/works">WORKS</a>
            </li>
          </ul>
        </nav>
      </div><!-- /.header__flexWrapper -->
    </div>
  </header>
