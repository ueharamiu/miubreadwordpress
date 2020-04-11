<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
