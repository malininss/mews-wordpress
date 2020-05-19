<a href="<?php the_permalink(); ?>" class="news__card">
  <?php echo get_the_post_thumbnail( get_the_ID(), 'news-image', array('class' => 'news__cards-img') ); ?>
  <div class="news__cards-text regular-text"><?php the_excerpt(); ?></div>
  <div class="news__date grey-text"><?php echo get_the_date() ?></div>
</a>