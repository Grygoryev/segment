<?php
	get_header();
?>

	<section class="news box">
		<div class="news__container box__container">
			<div class="title-box">
				<div class="title-box__title"><?php the_title(); ?></div>
				<h2 class="title-box__back"><?php the_title(); ?></h2>
			</div>
			<div class="common-description">
				<?php echo get_the_content(); ?>
			</div>
			<div class="news__list">

				<?php
					$news = new WP_Query(array(
						'posts_per_page' => -1,
						'post_type' => 'news',
					));

					while($news->have_posts()) {
						$news-> the_post();
						get_template_part('template-parts/news-item');
                    ?>

					<?php }
					wp_reset_postdata();
				?>

			</div>
		</div>
	</section>

<?php
	get_footer();