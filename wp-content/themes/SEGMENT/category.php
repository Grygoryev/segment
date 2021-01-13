<?php
	get_header();

	$cat_id = get_query_var('cat');
	$cat_name = get_query_var('cat_name');
	query_posts("post_type=portfolio&cat=$cat_id");
?>

    <section class="box">
        <div class="box__container">
            <div class="title-box">
                <div class="title-box__back"><?php single_cat_title( $prefix = '', $display = true ) ?></div>
                <h1 class="title-box__title"><?php single_cat_title( $prefix = '', $display = true ) ?></h1>
            </div>
            <div class="portfolio-board">
                <div class="portfolio-board__items">
	                <?php
		                while(have_posts()) {
			                the_post();
			                get_template_part('template-parts/portfolio-item');
			                ?>
		                <?php
		                }
			                wp_reset_postdata();
		                ?>
                </div>
            </div>
        </div>
    </section>


<?php
	get_footer();