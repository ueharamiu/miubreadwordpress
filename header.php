<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link type="css/style.css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <a href="<?php echo esc_url(home_url('/')); ?>">
    <title><?php bloginfo('name'); ?></title>


    <body <?php body_class(); ?>>
      <div id="header">
        <nav>
          <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="images/logo.svg" alt="Miu Bread ロゴ"></a></h1>
            <div id="nav-drawer">
              <input id="nav-input" type="checkbox" class="nav-unshown">
              <label id="nav-open" for="nav-input">
                <span class="ham_line ham_line1"></span>
                <span class="ham_line ham_line2"></span>
                <span class="ham_line ham_line3"></span>
              </label>
              <label class="nav-unshown" id="nav-close" for="nav-input"></label>
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
