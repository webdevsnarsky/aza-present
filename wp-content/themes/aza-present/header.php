<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/favicon.ico" type="image/x-icon">
  <title>Магазин подарков</title>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__inner">
      <div class="header__top">
        <div class="container">
          <div class="header__top-inner">
            <div class="header__search search">
              <input type="search" placeholder="Search" class="search__input">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg-icons/micro-icon.svg" alt="microfone" class="search__micro">
            </div>
            <div class="header__menu-wrap header__menu-wrap_mobile-hidden">
              <?php
              wp_nav_menu([
                'theme_location'  => 'primary',
                'menu'            => '',
                'container'       => 'nav',
                'container_class' => 'header__pages-nav',
                'container_id'    => '',
                'menu_class'      => 'header__pages-menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
              ]);
              ?>
            </div>
            <div class="header__logo-wrap header__logo-wrap_mobile-hidden">
              <a href="/" class="header__logo-link">
                <img src="<?php the_field('logo', 'option')  ?>" alt="logo" class="header__logo">
              </a>
            </div>
            <div class="header__contacts">
              <span class="header__adress">Саранск</span>
              <a href="tel:<?php echo str_replace('-', '', strval(get_field('phone', 'option')))  ?>" class="header__phone"><?php the_field('phone', 'option') ?></a>
            </div>
            <div class="header__cta-wrap header__cta-wrap_mobile-hidden">
              <button class="header__cta btn-prime" data-modal-open="modal-offer">Подобрать букет</button>
            </div>
          </div>
        </div>
      </div>
      <div class="header__bottom">
        <div class="container">
          <div class="header__bottom-inner">
            <!-- <div class="header__content-overlay"> -->
              <div class="header__bottom-box">
                <div class="header__burger-wrap">
                  <div class="burger">
                    <span class="burger__line"></span>
                  </div>
                </div>
                <div class="header__logo-wrap">
                  <a href="/" class="header__logo-link">
                    <img src="<?php the_field('logo', 'option')  ?>" alt="logo" class="header__logo">
                  </a>
                </div>
                <a href="/cart" class="header__customer-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg-icons/buy-mobile-icon.svg" alt="user cart"></a>
              </div>
              <div class="header__content">
                <!-- <div class="header__content-overlay"> -->
                <div class="header__cta-wrap header__cta-wrap_desct-hidden">
                  <button class="header__cta btn-prime" data-modal-open="modal-offer">Подобрать букет</button>
                </div>
                <div class="header__login-wrap header__login-wrap_desct-hidden">
                  <a href="#" class="header__login-link">Вход/Регистрация</a>
                </div>
                <div class="header__menus">
                  <div class="header__menus-item header__cat-wrap header__cat-wrap_desct-hidden">
                    <?php
                    wp_nav_menu([
                      'theme_location'  => 'product_cats',
                      'menu'            => '',
                      'container'       => 'nav',
                      'container_class' => 'header__cat-nav',
                      'container_id'    => '',
                      'menu_class'      => 'header__cat-menu',
                      'menu_id'         => '',
                      'echo'            => true,
                      'fallback_cb'     => 'wp_page_menu',
                      'before'          => '',
                      'after'           => '',
                      'link_before'     => '',
                      'link_after'      => '',
                      'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                      'depth'           => 0,
                      'walker'          => '',
                    ]);
                    ?>
                  </div>
                  <div class="header__menus-item header__menu-wrap header__menu-wrap_desct-hidden">
                    <?php
                    wp_nav_menu([
                      'theme_location'  => 'primary',
                      'menu'            => '',
                      'container'       => 'nav',
                      'container_class' => 'header__pages-nav',
                      'container_id'    => '',
                      'menu_class'      => 'header__pages-menu',
                      'menu_id'         => '',
                      'echo'            => true,
                      'fallback_cb'     => 'wp_page_menu',
                      'before'          => '',
                      'after'           => '',
                      'link_before'     => '',
                      'link_after'      => '',
                      'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                      'depth'           => 0,
                      'walker'          => '',
                    ]);
                    ?>
                  </div>
                </div>
                <div class="header__socials-wrap header__socials-wrap_desct-hidden">
                  <ul class="header__socials socials">
                    <?php if (have_rows('socials', 'options')) : ?>
                      <?php while (have_rows('socials', 'options')) : the_row(); ?>
                        <li class="socials__item">
                          <a href="<?php the_sub_field('social_link', 'option'); ?>" class="socials__link" style="background-image: url('<?php the_sub_field('social_icon', 'option'); ?>')"></a>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
                <!-- </div> -->
              </div>
              <div class="header__customer-area header__customer-area_mobile-hidden">
                <a href="/login" class="header__customer-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg-icons/avatar-icon.svg" alt="user area"></a>
                <a href="/cart" class="header__customer-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg-icons/cart-icon.svg" alt="user cart"></a>
              </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </header>