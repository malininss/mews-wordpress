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
	<p>Здесь вы сможете следить за жизнью нашей конюшни. </p>
	<p>Мы будем публиковать результаты наших спортсменов, анонсы домашних соревнований, квестов. Летом мы стараемся организовать увлекательный досуг для наших постояльцев и учеников, так в 2018 году мы впервые выехали не только на соревнования, но и на отдых в Тверскую область.</p>
	<p>Не забывайте посещать этот раздел, будет интересно!</p>
  </div>
</section>

<section class="news wrapper">

<div class="news__cards">
    <?php
      global $post;

      $args = array(
        'post_type' => 'news',
        'numberposts' => -1,
        'publish' => true
      );

      $news = get_posts($args);

      foreach ($news as $post) {
        include(get_template_directory() . '/content-news.php');
      }
      wp_reset_postdata();
      
    ?>
  </div>
  </section>

<?php
  get_footer();
?>