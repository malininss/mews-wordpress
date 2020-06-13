<?php /* Template Name: About template */ 

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
  <div class="article__text regular-text">
    <?php
      if (have_posts()) : while (have_posts()) : the_post();
        the_content(); 
      endwhile; endif; 
    ?>
  </div>
</section>

<?php
  require 'includes/map.php';
?>


<section class="we-have wrapper">
  <div class="center-block">
    <h2>У нас есть</h2>
  </div>
  <div class="we-have__list">
    <ul class="we-have__item-container">
      <li class="we-have__item">2 манежа</li>
      <li class="we-have__item">Плац</li>
      <li class="we-have__item">Левады</li>
    </ul>
    <ul class="we-have__item-container">
      <li class="we-have__item">Коневоз</li>
      <li class="we-have__item">Комната отдыха</li>
      <li class="we-have__item">Душевая</li>
    </ul>
    <ul class="we-have__item-container">
      <li class="we-have__item">Амуничники</li>
      <li class="we-have__item">Аптечка</li>
      <li class="we-have__item">Денники</li>
    </ul>
    <ul class="we-have__item-container">
      <li class="we-have__item">Запариватель</li>
      <li class="we-have__item">Операционная</li>
      <li class="we-have__item">Подвес и пр.</li>
    </ul>
  </div>
</section>

<section class="about wrapper">
  <div class="description-block">
    <h2 class="description-block-title">Галерея</h2>
    <div class="description-block__text serif-text grey-text">Мы создали место, которое объединяет в себе всё то, что люди ждут от конного мира.
    </div>
  </div>
  <div class="gallery">
    <div class="gallery__main-pic">
      <div class="gallery__prev-arrow"></div>
      <img class="test" src="<?php echo get_template_directory_uri()?>/img/main-gallery/1.jpg" alt="">
      <div class="gallery__next-arrow"></div>
    </div>
    <div class="gallery__prev-block">
    <?php
      global $post;

      $args = array(
        'post_type' => 'gallery',
        'numberposts' => 4,
        'publish' => true
      );

      $picture = get_posts($args);

      foreach ($picture as $post) {
        include(get_template_directory() . '/gallery-pic-template.php');
      }
      wp_reset_postdata();
      
    ?>
    </div>
  </div>
</section>



<?php
  require 'includes/rules.php';
?>

<?php
  get_footer();
?>