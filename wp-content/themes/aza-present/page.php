<?php get_header(); ?>

<div class="ip-content">
  <div class="ip-content__head">
    <div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
      <h1 class="ip-content__title"><?php the_title() ?></h1>
    </div>
  </div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile;
wp_reset_query();
?>

<?php get_footer(); ?>