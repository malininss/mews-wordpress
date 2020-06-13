<?php /* Template Name: Contacts template */ 

get_header();
?>
<section class="article wrapper">
  <div class="main-description-block">
    <div class="main-description-block__message">
      <h1 class="main-description-block__title">
        <?php the_title(); ?>
      </h1>
      <div class="main-description-block__text serif-text">
        Шереметьевские конюшни - это обучение верховой езде, надежный постой лошадей и отдых на природе
      </div>
    </div>
  </div>
</section>

<div class="contact-map wrapper">
  <div class="contact-map__content">
    <p><b>График работы:</b> каждый день с 7:00 до 21:00, перерыв на кормление с 13:00 до 15:00</p>
    <p><b>Адрес:</b> Московская область, Долгопрудный, микрорайон Шереметьевский, улица Комарова, д. 28</p>
    <p><b>Телефон:</b> +7 (985) 776-76-19; +7 (985) 776-76-19</p>
    <p><b>E-mail:</b> garles@rambler.ru</p>
    <!-- <a href="#" class="contact-map__buttom main-bottom">Напишите нам</a> -->
  </div>
  <div class="contact-map__map">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adb70e4b784b2e2fe59abad2da8305a52a05bf3e80b9c0c0e6049110d66e2028c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
  </div>
</div>

<div class="how-to-get wrapper">

<?php
  if (have_posts()) : while (have_posts()) : the_post();
    the_content(); 
  endwhile; endif; 
?>

</div>

<?php
  get_footer();
?>