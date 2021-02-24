<div class="news-item">
    <img
            loading="lazy"
            class="news-item__img"
            src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="<?php the_title(); ?>">
    <a href="<?php the_permalink(); ?>" class="news-item__title">
        <h3>
					<?php the_title(); ?>
        </h3>
    </a>
    <div class="news-item__description">
			<?php echo get_field('news_short_description'); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="news-item__btn-learn-more btn">
        <div class="btn__title">Узнать больше</div>
    </a>
</div>