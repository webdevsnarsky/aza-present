<div class="delivery">
  <div class="container">
    <div class="delivery__inner">
      <div class="delivery__content">
        <div class="delivery__image-wrap">
          <img src=" <?php the_field('delivery_image') ?>" alt="как осуществить доставку" class="delivery__image">
        </div>
        <div class="delivery__text">
          <h3 class="delivery__title"><?php the_field('delivery_title') ?></h3>
          <p class="delivery__descr">
            <?php the_field('surprise_descr') ?>
          </p>
        </div>
      </div>

      <div class="delivery__items">
        <div class="row">
          <?php if (have_rows('delivery_items')) : ?>
            <?php while (have_rows('delivery_items')) : the_row(); ?>
              <div class="delivery__item">
                <?php
                $image = get_sub_field('delivery_item_image');
                if (!empty($image)) : ?>
                  <img src="<?php echo esc_url($image['url']); ?>" class="delivery__item-image" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h3 class="delivery__item-title"><?php the_sub_field('delivery_item_title'); ?></h3>
                <!-- <p class="delivery__item-descr"> -->
                  <?php the_sub_field('delivery_item_descr'); ?>
                <!-- </p> -->
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>