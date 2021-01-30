<?php
	get_header();
?>

	<section class="intro intro--author box --no-padding-top" id="intro">
		<div class="intro__container box__container">
			<div class="intro__slider-container swiper-intro-container common-slider">
				<div class="intro__swipper-wrapper">
					<div class="intro__slide --visible">
						<img
                            class="intro__img --director-img"
                            src="<?php echo esc_url(get_template_directory_uri()) ?>/img/worker.png"
                            alt="Издаем книги от 1 экземпляра">
						<div class="intro__text-info">
							<div class="intro__back --from-one-example">Издаем книги от <br> 1 экземпляра</div>
							<h1 class="intro__title">Издаем книги от 1 экземпляра</h1>
							<p class="intro__description">Наши заказчики — это профессиональные и начинающие авторы, преподаватели, ученые, компании, государственные учреждения и предприятия.</p>
							<div class="intro__buttons">
								<div class="intro__btn-box --calculate link" data-go-to="quiz">
									<div class="btn">
										<div class="btn__title">Расчитать стоимость</div>
									</div>
								</div>
								<div class="intro__btn-box">
									<div class="intro__btn-learn-more btn link" data-go-to="intro-manufacture">
										<div class="btn__title">Узнать подробнее</div>
									</div>
								</div>
							</div>
							<p class="intro__btn-signtature">Прямо сейчас <span>получите бесплатный расчёт</span><br/>стоимости в твёрдом и мягком переплёте</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section id="intro-manufacture" class="intro-manufacture box">
        <div class="into-manufacture box__container">
            <div class="title-box">
                <div class="title-box__back"><?php echo get_field('pechat_knig_title'); ?></div>
                <div class="title-box__title"><?php echo get_field('pechat_knig_title'); ?></div>
            </div>
            <div class="intro-manufacture__content common-content">
                <div class="common-iframe intro-manufacture__video">
                    <iframe src="<?php echo get_field('pechat_knig_video_link'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <section class="author box">
    <div class="author__container box__container">
    <div class="author__title">
        <?php echo get_field('pechat_knig_tabs_title'); ?>
    </div>
    <div class="author__cards">
        <?php
            $tabs = get_field('pechat_knig_tabs');

            foreach ($tabs as $tab) {
        ?>
            <div class="author-card">
                <div class="author-card__section --img">
                    <img src="<?php echo $tab['pechat_knig_tab_img']; ?>" alt="<?php echo $tab['pechat_knig_tab_title']; ?>">
                </div>
                <div class="author-card__section --text">
                    <div class="author-card__title"><?php echo $tab['pechat_knig_tab_title'];?></div>
                    <div class="author-card__description">
                        <?php echo $tab['pechat_knig_tab_text']; ?>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
			<div class="author-swiper-container">
				<div class="swiper-wrapper author-swiper-wrapper">
                    <?php
                        $photos = get_field('pechat_knig_slider');

                        foreach ($photos as $photo) {
                    ?>
					    <div
                            class="swiper-slide author-slide"
                            style="background-image:url(<?php echo $photo['pechat_knig_slider_img']; ?>)"
                            title="<?php echo $photo['pechat_knig_slider_img_alt']; ?>"
                        >
                        </div>

                    <?php
                        }
                    ?>
				</div>
				<div class="swiper-pagination"></div>
            </div>
        </div>
	</section>

<?php
	include get_theme_file_path('/components/quiz-form.php');
	get_footer();
