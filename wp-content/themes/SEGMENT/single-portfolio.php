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
                             echo $data[0]['portfolio_book_author'] . ', ';
                             echo $data[0]['portfolio_book_year'];
                        ?>
                    </div>

                    <div class="portfolio-info__book-techs">
                        <h4 class="portfolio-info__title">Вид издания</h4>
                        <div class="table">
                            <div class="tr">
                                <div class="td tr__title">Формат:</div>
                                <div class="td"><?php echo $data[0]['portfolio_book_format']; ?></div>
                            </div>
                            <div class="tr">
                                <div class="td tr__title">Переплёт:</div>
                                <div class="td"><?php echo $data[0]['portfolio_book_cover']; ?></div>
                            </div>
                        </div>
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