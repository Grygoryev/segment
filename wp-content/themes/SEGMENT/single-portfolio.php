<?php
	get_header();
	while (have_posts()) {
		the_post();
?>
	<section class="portfolio box">
        <div class="portfolio__container box__container">
            <div class="title-box">
                <h1 class="title-box__title"><?php the_title();?></h1>
                <div class="title-box__back"><?php the_title();?></div>
            </div>
            <div class="portfolio-info">
                <div class="portfolio-info__section --img">
                    <img
                        loading="lazy"
                        src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="<?php the_title();?>"
                    />
                </div>
                <?php
                    $data = get_field('portfolio_book_data');

                ?>
                <div class="portfolio-info__section --info">
                    <div class="portfolio-info__author-n-year portfolio-info__title">
                        <?php
                             echo get_field('portfolio_book_author') . ', ';
                             echo get_field('portfolio_book_year');
                        ?>
                    </div>

                    <div class="portfolio-info__book-techs">
                    <?php
                        $data = get_field('portfolio_book_data2');

                        foreach ($data as $item) {
                    ?>

                        <h4 class="portfolio-info__title">
                          <?php echo $item['portfolio_data2_block_title']; ?>
                        </h4>

                        <div class="table">
                        <?php
                            $section = $item['portfolio_data2_section'];

                            foreach ($section as $tr) {
                          ?>
                                <div class="tr">
                                    <div class="td tr__title"><?php echo $tr['portfolio_data2_td_name']; ?></div>
                                    <div class="td"><?php echo $tr['portfolio_data2_td_value']; ?></div>
                                </div>
                            <?php }?>
                                </div>
                    <?php }
                    ?>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
                <h4 class="portfolio-description__title"> Описание </h4>
	            <?php the_content(); ?>
            </div>
        </div>
	</section>

<?php
	}
	include get_theme_file_path('/components/quiz-form.php');

	get_footer();
?>