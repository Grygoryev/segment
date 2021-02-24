<div class="feedback-card">
	<div class="feedback-card__img-box">
        <img
            loading="lazy"
            alt="<?php the_title(); ?>"
            src="<?php echo get_the_post_thumbnail_url();?>"
        />
		<div class="feedback-card__waffer">
			<h3 class="feedback-card__waffer-title">
              <?php the_title(); ?>
            </h3>
            <a class="feedback-card__waffer-btn btn" href="<?php the_permalink(); ?>">
				<div class="btn__title">
                    Читать отзыв
                </div>
            </a>
		</div>
	</div>
	<a href="<?php the_permalink(); ?>" class="feedback-card__title"><?php echo get_field('review_client_name'); ?></a>
	<div class="feedback-card__subtitle"><?php echo get_field('review_client_slogan'); ?></div>
</div>