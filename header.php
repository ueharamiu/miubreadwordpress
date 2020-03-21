<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/miubread.js"></script>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <a href="<?php echo esc_url(home_url('/')); ?>">
    <title><?php bloginfo('name'); ?></title>

<?php wp_head(); ?>
</head>

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
<?php wp_nav_menu( $location, $description ); ?>
            </div> <!-- #nav-drawer -->
        </nav>
      </div> <!-- header -->
