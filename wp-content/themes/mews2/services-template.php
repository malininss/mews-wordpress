<?php /* Template Name: Services template */ 


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