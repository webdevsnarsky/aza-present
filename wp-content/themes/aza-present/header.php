<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Магазин подарков</title>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header class="header">

    <div class="header__top">
      <div class="container">
        <div class="header__top-menu-wrap">
          <?php
          wp_nav_menu([
            'theme_location'  => '',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'header__top-nav',
            'container_id'    => '',
            'menu_class'      => 'header__menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ]);
          ?>
        </div>
        <div class="header__logo-wrap">
          <a href="/" class="header__logo-link">
            <img src="<?php the_field('logo', 'option')  ?>" alt="logo" class="header__logo">
          </a>
        </div>
        <div class="header__contacts">
          <a href="tel:<?php get_field('phone', 'option')  ?>" class="header__phone"><?php the_field('phone', 'option') ?></a>
          <span class="header__adress">Саранск</span>
        </div>
        <div class="header__cta-wrap">
          <button class="header__cta btn-prime">Подобрать букет</button>
        </div>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <div class="header__burger-wrap">
          <div class="burger">
          </div>
        </div>
        <div class="header__bottom-menu-wrap">
          <nav class="header__bottom-nav">
            <ul class="header__cat-menu">
              <li class="menu-item"><a href="">Клубничные</a></li>
              <li class="menu-item"><a href="">Клубничные</a></li>
              <li class="menu-item"><a href="">Клубничные</a></li>
              <li class="menu-item"><a href="">Клубничные</a></li>
              <li class="menu-item"><a href="">Клубничные</a></li>
            </ul>
          </nav>
        </div>
        <div class="header__customer-area">
          <a href="/login" class="header__customer-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg-icons/avatar-icon.svg" alt="user area"></a>
          <a href="/cart" class="header__customer-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg-icons/cart-icon.svg" alt="user cart"></a>
        </div>
      </div>
    </div>
  </header>