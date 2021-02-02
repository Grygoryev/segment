<?php
	get_header();
	while (have_posts()) {
		the_post();
?>
        <section class="box">
            <div class="box__container">
                <div class="title-box">
                    <div class="title-box__title"><?php the_title(); ?></div>
                </div>
            </div>
        </section>
        <section class="blog box">
            <div class="blog__container box__container">
                <article class="article common-content">
									<?php the_content(); ?>
                </article>
            </div>
        </section>
<!--	<section class="news box">-->
<!--		<div class="news__container box__container">-->
<!--            <div class="title-box">-->
<!--                <div class="title-box__title">--><?php //the_title(); ?><!--</div>-->
<!--                <div class="title-box__back">СМИ о НАС-->
<!--                </div>-->
<!--            </div>-->
<!--            <article class="news-article">-->
<!--                <div class="news-article__section --img">-->
<!--                    <img src="--><?php //echo get_the_post_thumbnail_url(); ?><!--" alt="--><?php //the_title(); ?><!--">-->
<!--                </div>-->
<!--                <div class="news-article__section --text">-->
<!--                    --><?php //the_content(); ?>
<!--                </div>-->
<!--            </article>-->
<!--		</div>-->
<!--	</section>-->

<?php
	}
//	get_template_part('template-parts/slider-common');
//	get_template_part('template-parts/video-frame-common');
	get_footer();
?>