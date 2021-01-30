<?php
	get_header();
?>
	<section class="achievments box">
		<div class="achievments__container box__container">
			<div class="title-box">
				<div class="title-box__back"><?php the_title(); ?></div>
				<div class="title-box__title"><?php the_title(); ?></div>
			</div>
			<div class="common-description">
                <?php the_content(); ?>
            </div>
			<div class="achievments__list">
                <?php
                    $achievs = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'achievments',
                    ));

                    while($achievs->have_posts()) {
                        $achievs-> the_post();
                    ?>
                        <a
                            href="<?php the_permalink(); ?>"
                            class="achievment"
                        >
                            <div class="achievment__title">
                                <?php the_title(); ?>
                            </div>
                            <div class="achievment__img-box">
                                <img
                                    src="<?php the_post_thumbnail_url(); ?>"
                                    alt="<?php the_title(); ?>"
                                >
                            </div>
                        </a>
                    <?php }
                    wp_reset_postdata();
                ?>

		</div>
	</section>
<?php
	get_footer();
