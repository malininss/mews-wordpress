<?php
  get_header();
?>

<section class="horse-bg-screen">
 
  <div class="horse-bg-screen__background">
    <img src="<?php echo get_template_directory_uri()?>/img/horse-bg.png" alt="Шереметьевские конюшни">
  </div>

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

<section id="horsemanship" class="horsemanship wrapper">
  <div class="description-block horsemanship__description-block">
    <h2 class="description-block-title">Занятия верховой ездой</h2>
    <div class="description-block__text serif-text grey-text">Занятия проводят тренеры, специализирующиеся на выбранном направлении. Гарантирован индивидуальный подход к каждому ученику любого уровня подготовки.</div>
  </div>
  <div class="horsemanship-cards">
    <a href="/services/obuchenie/" class="horsemanship-cards__card">
      <img class="horsemanship-cards__cards-img" src="<?php echo get_template_directory_uri()?>/img/vyyezdka.svg" alt="Выездка">
      <h4 class="horsemanship-cards__cards-title">Выездка</h4>
      <div class="horsemanship-cards__cards-text regular-text">Вид спорта, где всадник должен показать навыки своей лошади в правиль- ных движениях на всех аллюрах в разных темпах.</div>
    </a>
    <a href="/services/obuchenie/" class="horsemanship-cards__card">
      <img class="horsemanship-cards__cards-img" src="<?php echo get_template_directory_uri()?>/img/konkur.svg" alt="Конкур">
      <h4 class="horsemanship-cards__cards-title">Конкур</h4>
      <div class="horsemanship-cards__cards-text regular-text">Вид спорта, где всадник должен показать навыки своей лошади в правиль- ных движениях на всех аллюрах в разных темпах.</div>
    </a>
  </div>
  <div class="center-block horsemanship__button-block"><a href="/services/obuchenie/" class="sub-buttom">Узнать больше</a></div>
</section>
<section class="stables-healing wrapper">
  <a href="/services/postoi-loshadei/" class="stables-healing__link">
    <div class="stables-healing__card">
      <div class="stables-healing__pic">
        <img src="<?php echo get_template_directory_uri()?>/img/stable.png" alt="Постой лошадей">
      </div>
      <div class="stables-healing__description">
        <div class="stables-healing__description-wrap">
          <h2 class="stables-healing__title">Постой лошадей</h2>
          <div class="stables-healing__text regular-text grey-text">Занятия проводят тренеры, специализирующиеся на выбранном направлении. Гарантирован индивидуальный подход к каждому ученику любого уровня подготовки.<br>
            <!-- <a class="more" href="#">Узнать больше</a> -->
          </div>
        </div>
      </div>
    </div>
  </a>
  
  <a href="/services/konevladeltsam/" class="stables-healing__link">
    <div class="stables-healing__card">
      <div class="stables-healing__description">
        <div class="stables-healing__description-wrap">
          <h2 class="stables-healing__title">Лечение и&nbsp;реабилитация</h2>
          <div class="stables-healing__text regular-text grey-text">Занятия проводят тренеры, специализирующиеся на выбранном направлении. Гарантирован индивидуальный подход к каждому ученику любого уровня подготовки.<br>
            <!-- <a class="more" href="#">Узнать больше</a> -->
          </div>
        </div>
      </div>
      <div class="stables-healing__pic">
        <img src="<?php echo get_template_directory_uri()?>/img/healing.png" alt="Постой лошадей">
      </div>
    </div>
  </a>
</section>
<section class="about wrapper">
  <div class="description-block">
    <h2 class="description-block-title">О конюшнях</h2>
    <div class="description-block__text serif-text grey-text">Мы создали место, которое объединяет в себе всё то, что люди ждут от конного мира. Шереметьевские конюшни - это обучение верховой езде, надежный постой лошадей, отдых на природе и теплый коллектив единомышленников.<br>
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




  <div class="under-gallery-description">
    <div class="under-gallery-description__block">
      <h4>Комфорт лошади и всаднику</h4>
      <div class="under-gallery-description__text regular-text">
        В Шереметьевских конюшнях вся инфраструктура обустроена таким образом, чтобы каждый посетитель чувствовал себя хорошо и безопасно. Мы готовы взять на себя ответсвенность за комфорт Ваш и Вашей лошади. 
      </div>
    </div>
    <div class="under-gallery-description__block">
      <h4>Комфорт лошади и всаднику</h4>
      <div class="under-gallery-description__text-list regular-text">
        <ul>
          <li>2 манежа</li>
          <li>Плац</li>
          <li>Левады</li>
          <li>Коневоз</li>
        </ul>
        <ul>
          <li>Комната отдыха</li>
          <li>Душевая</li>
          <li>Амуничники</li>
          <li>Аптечка</li>
        </ul>
        <ul>
          <li>Денники</li>
          <li>Запариватель</li>
          <li>Операционная</li>
          <li>Подвес и пр.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center-block"><a href="about/" class="sub-buttom">Подробнее о нас</a></div>
</section>
<div class="banner wrapper">
  <div class="banner__content">
    <h2 class="banner__title">Теперь у нас можно остаться</h2>
    <div class="banner__text regular-text">Специально для Вашего комфорта команда Шереметьевских конюшен обустроила комнаты для проживания со всеми необходимыми удобствами</div>
    <a href="service/" class="banner__buttom main-bottom">Узнать больше</a>
  </div>
  <div class="banner__img"></div>
</div>

<?php
 require 'includes/map.php';
?>

<section class="news wrapper">
  <div class="description-block">
    <h2 class="description-block-title">Новости и&nbsp;события</h2>
  </div>

  <div class="news__cards">
    <?php
      global $post;

      $args = array(
        'post_type' => 'news',
        'numberposts' => 4,
        'publish' => true
      );

      $news = get_posts($args);

      foreach ($news as $post) {
        include(get_template_directory() . '/content-news.php');
      }
      wp_reset_postdata();
      
    ?>
  </div>
  <div class="center-block"><a href="/news/" class="sub-buttom">Все новости</a></div>
</section>
<?php
get_footer();
