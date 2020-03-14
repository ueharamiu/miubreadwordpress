<?php
// テーマサポート
add_theme_support('menus');



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
