<div class="contacts">
  <div class="container">
    <div class="contacts__inner">
      <div class="contacts__info">
        <div class="row">
          <div class="contacts__info-item contacts__tel">
            <img src="<?php the_field('contacts_tel_img'); ?>" alt="phone" class="contacts__info-image">
            <a href="tel:<?php echo str_replace('-', '', strval(get_field('phone', 'option')))  ?>" class="contacts__info-link contacts__tel"><?php the_field('phone', 'option') ?></a>
            <p class="contacts__info-text contacts__tel-order">Обработка заказов с 09:00 до 21:00</p>
          </div>
          <div class="contacts__info-item contacts__adress">
            <img src="<?php the_field('contacts_adress_img'); ?>" alt="adress" class="contacts__info-image">
            <p class="contacts__info-link"><?php the_field('contacts_adress_street'); ?></p>
            <p class="contacts__info-text contacts__adress-city"><?php the_field('contacts_adress_city'); ?></p>
          </div>
          <div class="contacts__info-item contacts__mail">
            <img src="<?php the_field('contacts_mail_img'); ?>" alt="mail" class="contacts__info-image">
            <a href="mailto:<?php the_field('mail', 'option') ?>" class="contacts__info-link contacts__mail"><?php the_field('mail', 'option') ?></a>
            <p class="contacts__info-text contacts__mail-text">Мы ждем Вашего сообщения</p>
          </div>
        </div>
      </div>

      <div class="contacts__map-wrap">
        <h3 class="contacts__map-title">Мы находимся тут</h3>
        <div class="contacts__map">
          <?php the_field('contacts_map'); ?>
        </div>
      </div>

      <div class="contacts__box">
        <h3 class="contacts__box-title">Юридическая информация</h3>
        <p class="contacts__box-descr">
          <?php the_field('contacts_descr'); ?>
        </p>
      </div>
    </div>
  </div>
</div>