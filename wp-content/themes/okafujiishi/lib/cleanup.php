<?php

if ( ! function_exists( 'okafujiishi_custom_excerpt_more' ) ) {
  function gildrest_custom_excerpt_more($more) {
    return '';
  }
}
add_filter('excerpt_more', 'okafujiishi_custom_excerpt_more');
