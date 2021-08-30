<div id="modal-offer" class="modal modal-offer">
  <div class="modal__overlay" modal-close>
    <div class="modal__content" role="dialog">
      <div class="modal__head">
        <p class="modal__title">Отправьте Ваш номер телефона</p>
        <div class="modal__close" modal-close></div>
      </div>
      <div class="modal__body modal-offer__content">
        <p class="modal-offer__info">С Вами свяжется менеджер, уточнит предпочтения и придумает варианты композиции специально для Вас и рассчитает стоимость</p>
        <form action="">
          <input type="radio" id="contactChoice1" name="contact" value="tel">
          <label for="contactChoice1">Телефон</label>
          <br>
          <input type="radio" id="contactChoice2" name="contact" value="viber">
          <label for="contactChoice2">Viber</label>
          <br>
          <input type="radio" id="contactChoice3" name="contact" value="whatsapp">
          <label for="contactChoice3">Whatsapp</label>
          <br>
          <input type="radio" id="contactChoice4" name="contact" value="telegramm">
          <label for="contactChoice4">Telegram</label>
          <br>
          <br>
          <input type="tel" id="tel" class="form__input" placeholder="+3752912345678">
          <br>
          <br>
          <input type="submit" value="Отправить" class="btn-prime">
          <br>
          <br>
          <div>
            <input type="checkbox" id="confid" name="scales">
            <label for="confid">Я даю согласие на обработку персональных данных в соответсвии с политикой конфиденциальности</label>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

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
                <?php get_template_part('template-parts/socials'); ?>
              </div>
              <p class="footer__adress">г. Минск, ул. Степана Разина 19</p>
            </div>
            <div class="footer__cat">
              <div class="footer__cta-wrap">
                <button class="footer__cta btn-prime" data-modal-open="modal-offer">Подобрать букет</button>
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

<?php wp_footer(); ?>

</body>

</html>