<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mews
 */

get_header();
?>

<section class="article wrapper">
  <div class="main-description-block">
    <div class="main-description-block__message">
      <h1 class="main-description-block__title">
        <?php the_title(); ?>
      </h1>
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

<!-- <section class="gallery-section wrapper">
  <div class="description-block">
    <h2 class="description-block-title">Галерея</h2>
    <div class="description-block__text serif-text grey-text">Мы создали место, которое объединяет в себе всё то, что люди ждут от конного мира.
    </div>
  </div>
  <div class="gallery">
    <div class="gallery__main-pic">
      <div class="gallery__prev-arrow"></div>
      <img class="test" src="./img/main-gallery/1.jpg" alt="">
      <div class="gallery__next-arrow"></div>
    </div>
    <div class="gallery__prev-block">
      <div class="gallery__prev-pic">
        <img src="./img/main-gallery/1.jpg" alt="">
      </div>
      <div class="gallery__prev-pic">
        <img src="./img/main-gallery/2.jpg" alt="">
      </div>
      <div class="gallery__prev-pic">
        <img src="./img/main-gallery/3.jpg" alt="">
      </div>
      <div class="gallery__prev-pic">
        <img src="./img/main-gallery/4.jpg" alt="">
      </div>
    </div>
  </div>
</section> -->

<?php
get_footer();
