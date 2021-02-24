<a
	class="portfolio-item"
	href="<?php the_permalink(); ?>"
	data-tag="<?php
		$categoryArr = get_the_category();
		echo $categoryArr[0]->cat_name;
	?>"
>

	<div class="portfolio-item__body">
		<img loading="lazy" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
	</div>
	<div class="portfolio-item__footer">
		<h2 class="portfolio-item__title">
			<?php the_title(); ?>
		</h2>
		<div class="portfolio-item__description">
	        <?php echo get_field('portfolio_tab_subtitle'); ?>
		</div>
	</div>
</a>