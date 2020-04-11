<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/miubread.js"></script>

    <!-- CSS -->
<<<<<<< HEAD
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link type="css/style.css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <a href="<?php echo esc_url(home_url('/')); ?>">
=======
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
>>>>>>> f1fa3620972d97316afa9f0e1ef189aea60edefb
    <title><?php bloginfo('name'); ?></title>

<?php wp_head(); ?>
</head>

      <div id="header">
        <nav>
          <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Miu Bread ロゴ"></a></h1>
            <div id="nav-drawer">
              <input id="nav-input" type="checkbox" class="nav-unshown">
              <label id="nav-open" for="nav-input">
                <span class="ham_line ham_line1"></span>
                <span class="ham_line ham_line2"></span>
                <span class="ham_line ham_line3"></span>
              </label>
              <label class="nav-unshown" id="nav-close" for="nav-input"></label>
<<<<<<< HEAD
<?php wp_nav_menu(); ?>
            </div> <!-- #nav-drawer -->
        </nav>
      </div> <!-- header -->


<!-- jQuery -->
<script src="https:ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- 先に jQuery を読み込む -->
<script type="text/javascript">
$(function() {
  $('#nav-input').click(function() {
    $(this).toggleClass('active');

    if($(this).hasClass('active')) {
      $('.ham_line').addClass('active');
      $('body').addClass('overflowHidden');
    } else {
      $('.ham_line').removeClass('active');
      $('body').removeClass('overflowHidden');
    }
  });
});
</script>

<?php
    wp_enqueue_script('jquery');
    wp_head();
?>
</head>
=======
              <div id="nav-content">
                <ul class="main-nav">
                  <li><a href="#">こだわり</a></li>
                  <li><a href="#">お店の特徴</a></li>
                  <li><a href="#">商品メニュー</a></li>
                  <li><a href="#">お知らせ</a></li>
                  <li><a href="#">店舗情報</a></li>
                  <li><a href="#">お問い合わせ</a></li>
                </ul>
            </div> <!-- #nav-drawer -->
        </nav>
      </div> <!-- header -->
>>>>>>> f1fa3620972d97316afa9f0e1ef189aea60edefb
