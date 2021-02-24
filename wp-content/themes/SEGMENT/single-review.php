<?php
	get_header();
	while (have_posts()) {
		the_post();
?>
        <section class="feedback-page box">
            <div class="feedback-page__container box__container">
                <div class="title-box">
                    <div class="title-box__title"><?php the_title(); ?></div>
                    <div class="title-box__back"><?php the_title(); ?></div>
                </div>
                <div class="feedback-page__title"><?php echo get_field('review_single_title') ?></div>
                <div class="feedback-page__description">
                    <?php echo get_field('review_single_subtitle'); ?>
                </div>
                <div class="feedback">
                    <img
                        loading="lazy"
                        class="feedback__img feedback__section"
                        src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="<?php the_title(); ?>">
                    <div class="feedback__content feedback__section common-content">
                        <?php the_content(); ?>
<!--                        <div class="feedback__btn-learn-more btn">-->
<!--                            <div class="btn__title">Посмотреть книгу в портфолио</div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </section>

<?php
	}
	get_footer();
?>