<section class="posts">

	<div class="container">
		<div class="row">

			<?php
			if (is_page(19)) {
				$category = 'blog';
			} else {
				$category = 'news';
			}
			?>

			<?php
			// WP_Query arguments
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type'              => array('post'),
				'post_status'            => array('publish'),
				'nopaging'               => false,
				'posts_per_page'         => '3',
				'order'                  => 'DESC',
				'orderby'                => 'date',
				'category_name' => $category,
				'paged' => $paged
			);

			// The Query
			$query = new WP_Query($args);

			// The Loop
			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					echo
					'<div class = "posts__card post-card">' .
						'<div class = "post-card__image">' . get_the_post_thumbnail(null, 'medium', array('class' => 'post-card__thumbnail')) . '</div>' .
						'<p class = "post-card__title">' . get_the_title() . '</p>' .
						'<div class = "post-card__descr">' . get_the_excerpt() . '</div>' .
						'<a href="' . get_the_permalink() . '"class ="post-card__link btn-prime"> Читать далее </a>' .
						'</div>';
				}
			} else {
				echo 'No posts';
			}

			// Restore original Post Data
			wp_reset_postdata();
			?>

		</div>

		<?php
		echo	'<div class = "pagination">' .
			paginate_links(array(
				'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
				'total'        => $query->max_num_pages,
				'current'      => max(1, get_query_var('paged')),
				'format'       => '?paged=%#%',
				'show_all'     => false,
				'type'         => 'plain',

			)) .
			'</div>';
		?>
	</div>
</section>