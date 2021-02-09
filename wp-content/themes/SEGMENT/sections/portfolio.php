<section class="portfolio box">
    <div class="portfolio__container box__container">
        <div class="title-box">
            <div class="title-box__back"><?php the_field('portfolio_title'); ?></div>
            <div class="title-box__title"><?php the_field('portfolio_title'); ?></div>
        </div>
        <div class="portfolio__subtitle">
					<?php the_field('portfolio_subtitle'); ?>
        </div>
        <div class="portfolio__description">
					<?php the_content(); ?>
        </div>
        <div class="portfolio__items">
					<?php
						wp_reset_postdata();

						$args = array(
							'parent' => 19,
							'taxonomy' => 'category'
						);

						$categories = get_categories($args);

						foreach($categories as $category) {
							?>
                <a
                        class="service service--1"
                        href="<?php echo get_category_link( $category->term_id );?>"
                >
                    <div
                            class="service__body"
											<?php
												if (function_exists('z_taxonomy_image_url')) {
													?>
                            style="background-image: url(
														<?php echo z_taxonomy_image_url($category->term_id); ?>
                                    )"
												<?php } ?>
                    >
                        <div class="service__btn-learn-more btn">
                            <div class="btn__title">Узнать больше</div>
                        </div>
                    </div>
                    <footer class="service__footer">
                        <div class="service__title">
													<?php echo $category->name; ?>
                        </div>
                        <div class="service__description">
													<?php echo $category->category_description; ?>
                        </div>
                    </footer>
                </a>

							<?php
						}
					?>
        </div>
        <div class="portfolio__section">
            <div class="portfolio__title">Наши изданные книги по разделам</div>
            <div class="portfolio-board">
                <div class="portfolio-board__tabs header-tabs">
                    <div class="portfolio-board__tab header-tab --all --active">Все</div>
									<?php
										wp_reset_postdata();

										$args = array(
											'parent' => 19,
											'taxonomy' => 'category'
										);


										$categories = get_categories($args);

										foreach($categories as $category) {
											?>
                        <div
                                class="portfolio-board__tab header-tab"
                                data-tag="<?php echo $category->cat_name; ?>"
                        >
													<?php echo $category->cat_name; ?>
                        </div>

											<?php
										}
									?>
                </div>
                <div class="portfolio-board__items">
									<?php
										wp_reset_postdata();
										$portfolios = new WP_Query(array(
											'posts_per_page' => -1,
											'post_type' => 'portfolio',
										));

										while($portfolios->have_posts()) {
											$portfolios-> the_post();
											get_template_part('template-parts/portfolio-item');

											?>

										<?php }
										wp_reset_postdata();
									?>
                </div>
            </div>
        </div>
</section>