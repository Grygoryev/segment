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
                <div class="title-box__title">
                  <?php the_title(); ?>
                </div>
            </div>
            <div class="intro-manufacture__content common-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <section class="author box">
        <div class="author__container box__container">
            <div class="author__cards">
                <div class="author-card">
                    <div class="author-card__section --img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/advantage-img1.jpg" alt=""></div>
                    <div class="author-card__section --text">
                        <div class="author-card__title">Сегмент — лидер белорусского книгоиздания</div>
                        <div class="author-card__description">
                            <p>Для книги может быть выполнен любой вид переплета из большого ассортимента материалов.</p>
                            <p>В большой количестве технических спецификаций легко запутаться. Мы поможем автору определиться с выбором типа переплета, исходя из его потребностей и количества публикуемого материала.</p>
                            <p>Тираж книг может быть напечатан в разных вариантах исполнения. Например, часть тиража в твердом, а часть — в мягком переплете. Наличие собственной типографии позволяет гибко подходить к пожеланиям наших авторов.</p>
                        </div>
                    </div>
                </div>
                <div class="author-card">
                    <div class="author-card__section --img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/advantage-img2.jpg" alt=""></div>
                    <div class="author-card__section --text">
                        <div class="author-card__title">Занимаемся продвижением и реализацией</div>
                        <div class="author-card__description">
                            <p>Например, переплет этих книг автор пожелал переплести в специальный переплетный материал двух видов. Крышка лаконично, но, тем не менее, изящно декорирована золотым рельефным тиснением несколькими видами клише.</p>
                            <p>Тиснение — это традиционный метод оформления экстерьера книги. Позволяет акцентировать детали художественной концепции обложки или быть самодостаточным методом декорирования.</p>
                        </div>
                    </div>
                </div>
                <div class="author-card">
                    <div class="author-card__section --img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/advantage-img3.jpg" alt=""></div>
                    <div class="author-card__section --text">
                        <div class="author-card__title">Сегмент — лидер белорусского книгоиздания</div>
                        <div class="author-card__description">
                            <p>Что делать, если вы — библиофил? Или вам необходимо подарить книгу важному и значимому человеку? Как сделать так, чтобы у владельца не поднялась рука выбросить книгу в макулатуру. Напротив — она всегда будет стоять на самом видном месте.</p>
                            <p>Ответ — переплести книгу в традиционный кожаный переплет.</p>
                            <p>Это будет индивидуальный нумерованный тираж или всего одна книга, изданная отдельно от общего тиража в современном переплете</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                if (get_field('pechat_knig_slider')) { ?>
                    <div class="author-swiper-container common-slider">
                        <div class="common-slider__controller swiper-author-button-next">
                            <div class="round"></div>
                        </div>
                        <div class="common-slider__controller swiper-author-button-prev">
                            <div class="round"></div>
                        </div>
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
            <?php
                }
            ?>
        </div>
    </section>


<?php
	include get_theme_file_path('/components/quiz-form.php');
	get_footer();
