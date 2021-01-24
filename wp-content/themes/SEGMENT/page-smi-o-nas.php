<?php
	get_header();
?>
	<section class="inmedia box">
		<div class="box__container inmedia__container">
			<div class="title-box">
				<div class="title-box__title"><?php the_title(); ?></div>
				<div class="title-box__back"><?php the_title(); ?></div>
			</div>
			<div class="inmedia__description">
				<?php the_content(); ?>
			</div>
			<div class="inmedia__list">
                <?php
                    wp_reset_postdata();
                    $posts = new WP_Query(array(
	                    'posts_per_page' => -1,
	                    'post_type' => 'smi',
                    ));

	                while($posts->have_posts()) {
                        $posts-> the_post();
		                get_template_part('template-parts/smi-o-nas-item');
                    ?>

	                <?php }
	                wp_reset_postdata();
                ?>
			</div>
		</div>
	</section>
<?php
	get_footer();
