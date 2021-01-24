<?php
	get_header();
	while (have_posts()) {
		the_post();
?>
	<section class="news box">
		<div class="news__container box__container">
            <div class="title-box">
                <div class="title-box__title"><?php the_title(); ?></div>
                <div class="title-box__back">СМИ о НАС
                </div>
            </div>
            <article class="news-article">
                <div class="news-article__section --img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="news-article__section --text">
                    <?php the_content(); ?>
                </div>
            </article>
		</div>
	</section>

<?php
	}
	get_footer();
?>