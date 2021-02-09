<?php
	get_header();
	while (have_posts()) {
		the_post();
?>
        <?php
			if (get_field('top_slider')) {
				get_template_part('template-parts/top-slide-template');
			}
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
<?php
	}
	get_footer();
?>