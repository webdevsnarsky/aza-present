<section class="surprise">
  <div class="container">
    <div class="surprise__inner">
      <h2 class="surprise__title"><?php the_field('surprise_title') ?></h2>
      <div class="surprise__accordeon accordion">
        <div class="surprise-accordion__el accordion__el">
          <button class="surprise__btn accordion__head">Читать далее</button>
          <div class="surprise__content accordion__body">
            <?php the_field('surprise_section') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>