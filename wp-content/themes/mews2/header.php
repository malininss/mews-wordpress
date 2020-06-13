<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="mobile-header">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'top',
        'container' => 'div',
        'container_class' => 'mobile-header__menu',
        'menu_class' => 'header__menu-mobile-cont'
      ));
    ?>
    <div class="mobile-header__background">
    </div>
  </header>
  <section>



  <header class="header wrapper">
    <div class="header__burger-wrapper">
      <div class="header__burger"></div>
    </div>
    <div class="header__left-menu">
      <div class="header__logo">
        <a href="/"><img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="Логотип"></a>
      </div>


      <?php
        wp_nav_menu(array(
          'theme_location' => 'top',
          'container' => 'div',
          'container_class' => 'header__menu',
          'menu_class' => 'header__menu-cont'
        ));
      ?>

    </div>
    <div class="header__phone">
      <div class="header__head-phone">
        <a href="tel:+7985554433">+7 (985) 776 76 19</a>
      </div>
      <div class="header__sub-phone">
        <a href="tel:+7985554433">+7 (985) 776 76 19</a>
      </div>
    </div>
    <a href="tel:+79857767618" class="header__mobile-icon">
      <img src="<?php echo get_template_directory_uri()?>/img/phone.svg" alt="phone">
    </a>
  </header>
</section>
