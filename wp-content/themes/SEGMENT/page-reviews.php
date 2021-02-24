<?php
	get_header();
?>

	<section class="feedbacks box">
		<div class="feedbacks__container box__container">
			<div class="title-box">
				<h1 class="title-box__title">Отзывы</h1>
				<div class="title-box__back">Отзывы</div>
			</div>
			<div class="common-description">
				<?php the_content(); ?>
			</div>
			<div class="feedbacks__cards">
				<?php

					$reviews = new WP_Query(array(
						'posts_per_page' => -1,
						'post_type' => 'review',
					));

					while($reviews->have_posts()) {
						$reviews-> the_post();
						get_template_part('template-parts/review-card');
					?>

					<?php }
					wp_reset_postdata();
				?>
			</div>
		</div>
	</section>

<?php
	get_footer();