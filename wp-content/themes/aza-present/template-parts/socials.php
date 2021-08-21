<ul class="socials">
  <?php if (have_rows('socials', 'options')) : ?>
    <?php while (have_rows('socials', 'options')) : the_row(); ?>
      <li class="socials__item">
        <a href="<?php the_sub_field('social_link', 'option'); ?>" class="socials__link" style="background-image: url('<?php the_sub_field('social_icon', 'option'); ?>')"></a>
      </li>
    <?php endwhile; ?>
  <?php endif; ?>
</ul>