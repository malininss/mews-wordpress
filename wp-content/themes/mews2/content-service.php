<a href="<?php the_permalink(); ?>" class="services__card center-block">
    <div class="services__card-title"><h4><?php the_title();?></h4></div>
    <div class="services__card-text"><?php the_excerpt();?></div>
    <div class="services__card-background">
        
    <?php echo get_the_post_thumbnail( get_the_ID(), 'services-image'); ?>

    </div>
</a>
