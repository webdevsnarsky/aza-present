<div class="promo">
  <div class="container promo__container">
    <div class="promo__inner">
      <div class="swiper-container promo__slider">
        <div class="swiper-pagination promo__slider-pagination"></div>
        <div class="swiper-wrapper">
          <?php if (have_rows('promo_slider')) : ?>
            <?php while (have_rows('promo_slider')) : the_row(); ?>
              <div class="swiper-slide">
                <div class="promo__slider-item" style="background-image: url(<?php the_sub_field('promo_slider_img'); ?>)">
                  <h1 class="promo__slider-title"><?php the_sub_field('promo_slider_title'); ?></h1>
                  <p class="promo__slider-descr"><?php the_sub_field('promo_slider_descr'); ?></p>
                  <?php
                  $link = get_sub_field('promo_slider_link');
                  if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="promo__slider-btn" style="background-color:<?php the_sub_field('promo_slider_btn_color'); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="promo__content">
        <div class="promo__content-item" style="background-image: url(<?php the_field('promo_banner_img_1'); ?>)">
          <h3 class="promo__content-title"><?php the_field('promo_content-title_1') ?></h3>
          <p class="promo__content-descr"><?php the_field('promo_content-descr_1') ?></p>
          <?php
          $link = get_field('promo_content-link_1');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="promo__content-link" target="<?php echo esc_attr($link_target) ?>" ;><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
        <div class="promo__content-item" style="background-image: url(<?php the_field('promo_banner_img_2'); ?>)">
          <h3 class="promo__content-title"><?php the_field('promo_content-title_2') ?></h3>
          <p class="promo__content-descr"><?php the_field('promo_content-descr_2') ?></p>
          <?php
          $link = get_field('promo_content-link_2');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="promo__content-link" target="<?php echo esc_attr($link_target) ?>" ;><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>