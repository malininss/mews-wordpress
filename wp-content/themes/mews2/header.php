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
    <div class="mobile-header__menu">
      <a class="mobile-header__link" href="about.html">О нас</a>
      <a class="mobile-header__link" href="service.html">Услуги</a>
      <a class="mobile-header__link" href="price.html">Стоимость</a>
      <a class="mobile-header__link" href="news.html">Новости</a>
      <a class="mobile-header__link" href="contacts.html">Контакты</a>
    </div>
    <div class="mobile-header__background">
    </div>
  </header>

  
  <section class="horse-bg-screen">
  <div class="horse-bg-screen__background">
    <img src="<?php echo get_template_directory_uri()?>/img/horse-bg.png" alt="Шереметьевские конюшни">
  </div>
  <header class="header wrapper">
    <div class="header__burger-wrapper">
      <div class="header__burger"></div>
    </div>
    <div class="header__left-menu">
      <div class="header__logo">
        <a href="index.html"><img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="Логотип"></a>
      </div>


      <?php
      
        wp_nav_menu(array(
          'theme_location' => 'top',
          'container' => 'div',
          'container_class' => 'header__menu',
          'menu_class' => 'header__menu-cont'
        ));
      ?>


      <!-- <div class="header__menu">
        <ul class="header__menu-cont">
          <li class="header__menu-elem"><a href="about.html">О нас</a></li>
          <li class="header__menu-elem"><a  href="about.html">О нас</a></li>
          <li class="header__menu-elem"><a  href="about.html">О нас</a></li>
          <li class="header__menu-elem"><a  href="about.html">О нас</a></li>
          <li class="header__menu-elem"><a href="about.html">О нас</a></li>
        </ul>
      </div> -->


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
  <div class="main-description-block wrapper">
    <div class="main-description-block__message">
      <h1 class="main-description-block__title">
        Там, где любовь к&nbsp;лошадям
      </h1>
      <div class="main-description-block__text serif-text">
        Шереметьевские конюшни - это обучение верховой езде, надежный постой лошадей и отдых на природе
      </div>
      <a href="#horsemanship" class="main-bottom">Узнать больше</a>
    </div>
  </div>
</section>
