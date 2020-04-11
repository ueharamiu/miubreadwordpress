<!-- プルリクエストテスト2 -->
<?php
// テーマサポート
add_theme_support('menus');

function miubread_script() {
  // WordPress提供のjquery.jsを読み込まない
  wp_deregister_script('jquery');
  // jQuery読み込み
  wp_enqueue_script('jquery-min', "https://code.jquery.com/jquery-3.4.1.min.js", array());
  wp_enqueue_script('jquery', get_template_directory_uri()  . '/js/miubread.js', array());
  wp_enqueue_style('miubread', get_template_directory_uri() . '/style.css', array());
  wp_enqueue_style('Noto+Sans+JP','//fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap',array());
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
