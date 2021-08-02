<?php wp_footer(); ?>

<footer class="footer">
  <div class="footer__inner">
    <div class="footer__top">
      <div class="container">
        <div class="footer__top-inner">
          <div class="footer__contacts">
            <a href="tel:<?php echo str_replace('-', '', strval(get_field('phone', 'option')))  ?>" class="footer__phone"><?php the_field('phone', 'option') ?></a>
            <a href="malito:<?php get_field('mail', 'option')  ?>" class="footer__mail"><?php the_field('mail', 'option') ?></a>
          </div>

          <div class="footer__logo-wrap">
            <a href="/" class="footer__logo-link">
              <img src="<?php the_field('logo', 'option')  ?>" alt="logo" class="footer__logo">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer__main">
      <div class="container">
        <div class="footer__categories">
          <div class="row">
            <div class="footer__cat">
              <h3 class="footer__cat-title">Каталог</h3>
              <div class="footer__menus-item footer__cat-wrap">
                <?php
                wp_nav_menu([
                  'theme_location'  => 'product_cats',
                  'menu'            => '',
                  'container'       => 'nav',
                  'container_class' => 'footer__cat-nav',
                  'container_id'    => '',
                  'menu_class'      => 'footer__cat-menu',
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
            <div class="footer__cat">
              <h3 class="footer__cat-title">Информация</h3>
              <div class="footer__menus-item footer__pages-wrap footer__menu-wrap">
                <?php
                wp_nav_menu([
                  'theme_location'  => 'primary',
                  'menu'            => '',
                  'container'       => 'nav',
                  'container_class' => 'footer__pages-nav',
                  'container_id'    => '',
                  'menu_class'      => 'footer__pages-menu',
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
            <div class="footer__cat">
              <h3 class="footer__cat-title">Контакты</h3>
              <div class="footer__socials-wrap">
                <ul class="footer__socials socials">
                  <?php if (have_rows('socials', 'options')) : ?>
                    <?php while (have_rows('socials', 'options')) : the_row(); ?>
                      <li class="socials__item">
                        <a href="<?php the_sub_field('social_link', 'option'); ?>" class="socials__link" style="background-image: url('<?php the_sub_field('social_icon', 'option'); ?>')"></a>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>
              </div>
              <p class="footer__adress">г. Саранск, ул. Степана Разина 19</p>
            </div>
            <div class="footer__cat">
              <div class="footer__cta-wrap">
                <button class="footer__cta btn-prime">Подобрать букет</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer__bottom">
      <div class="container">
        <div class="footer__bottom-inner">
          <p class="footer__confidental">
            <a href="#" class="footer__confidental-link">Политика конфиденциальности</a>
          </p>
          <p class="footer__copyrights">Aza-present 2021 Все права защищены</p>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>

</html>