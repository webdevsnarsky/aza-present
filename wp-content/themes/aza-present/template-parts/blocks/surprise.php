<section class="surprise">
  <div class="container">
    <div class="surprise__inner">
      <h2 class="surprise__title"><?php the_field('surprise_title') ?></h2>
      <div class="surprise__accordeon">
        <div class="surprise__content">
          <?php the_field('surprise_section') ?>
        </div>
        <button class="surprise__button">Читать далее</button>
      </div>
    </div>
  </div>
</section>