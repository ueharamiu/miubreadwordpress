<?php
// テーマサポート
add_theme_support('menus');

// メニューバー表示
register_nav_menus(
    array(
      'place_global' => 'グローバル')
);


function miubread_script() {
  wp_enqueue_style('miubread', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('Noto+Sans+JP', '//fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap', array());
}
add_action('wp_enqueue_scripts', 'miubread_script');

function miubread_widgets_init() {
  register_sidebar (
    array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
      'description' => 'サイドバーのウィジェット',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => "</h2>\n",
    )
  );
}
add_action('widgets_init','miubread_widgets_init');

?>
