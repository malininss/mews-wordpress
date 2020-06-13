<?php
/**
 * The template for displaying news archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mews
 */

get_header();
?>
<section class="article wrapper">
  <div class="main-description-block">
    <div class="main-description-block__message">
      <h1 class="main-description-block__title">
        Новости
      </h1>
      <div class="main-description-block__text serif-text">
        Шереметьевские конюшни - это обучение верховой езде, надежный постой лошадей и отдых на природе
      </div>
    </div>
  </div>
  <div class="article__text regular-text">
    <p>КСК «Шереметьевские конюшни» предоставляет услуги по аренде денников и летников. Готовы принять на постой лошадей с проблемами по здоровью и лошадей, нуждающихся в реабилитации.</p>
    <p>У нас есть собственный коневоз на 2 и на 4 головы, можем помочь организовать переезд или выезд на соревнования.</p>
    <p>Проводим чипирование, с внесением лошади в базу данных ANIMAL-ID.</p>
    <p>КСК «Шереметьевские конюшни» представляет интерес не только для частных владельцев, но также и для тех, кто только хочет приобщиться к конному миру. Мы проводим тренировки для начинающих и опытных всадников, готовим спортивные пары к соревнованиям по дисциплинам конкур и выездка.</p>
    <p>Если же вам ближе прогулки на природе, то наша конюшня окружена лесами и полями, вы можете отлично проводить время на воздухе. А если вы хотите повеселиться в компании своих друзей, то мы можем провести для вас экскурсию или организовать увлекательный квест.</p>
  </div>
</section>

<section class="services wrapper">
  <div class="services__cards">
    <?php
      global $post;

      $args = array(
        'post_type' => 'services',
        'numberposts' => 7,
        'publish' => true
      );

      $services = get_posts($args);

      foreach ($services as $post) {
        include(get_template_directory() . '/content-service.php');
      }

      wp_reset_postdata();
      
    ?>
  </div>
</section>

<?php
  get_footer();
?>