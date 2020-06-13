<?php /* Template Name: Price template */ 


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

<section class="price wrapper">
  <div class="price__columns">
    <div class="price__left-column">
        <div class="price__links">
          <?php
            global $post;

            $args = array(
              'post_type' => 'prices',
              'numberposts' => -1,
              'publish' => true
            );

            $news = get_posts($args);

            foreach ($news as $post) {
              include(get_template_directory() . '/content-price-title.php');
            }
            wp_reset_postdata();
            
          ?>
        </div>
    </div>
    <div class="price__right-column">
      <?php
        global $post;

        $args = array(
          'post_type' => 'prices',
          'numberposts' => -1,
          'publish' => true
        );

        $news = get_posts($args);

        foreach ($news as $post) {
          include(get_template_directory() . '/content-price-description.php');
        }
        wp_reset_postdata();
        
      ?>
    </div>  
  </div>
</section>





















<?php
  get_footer();
?>