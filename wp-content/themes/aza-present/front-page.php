<?php get_header(); ?>

<div class="swiper-container">
<!-- Additional required wrapper -->
<div class="swiper-wrapper">
<!-- Slides -->
<div class="swiper-slide">Slide 1</div>
<div class="swiper-slide">Slide 2</div>
<div class="swiper-slide">Slide 3</div>
</div>
</div>
<?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
  wp_reset_query();
    ?>
<?php get_footer(); ?>