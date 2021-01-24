<?php
	get_header();
?>

    <section class="contacts box">
        <div class="contacts__container box__container">
            <div class="title-box">
                <div class="title-box__title"><?php the_title(); ?></div>
                <div class="title-box__back"><?php the_title(); ?></div>
            </div>
            <div class="contacts__description">
	            <?php the_content(); ?>
            </div>
            <div class="contacts__content">
                <div class="contacts__text-info contacts__section">
                    <div class="contacts-section">
                        <div class="contacts-section__title">Звоните нам:</div>
                        <div class="contacts-section__container">
                            <a class="contacts-section__item" href="+375173619140">
                                <svg>
                                    <use xlink:href="#icon-phone" href="#icon-phone"></use>
                                </svg>
                                <p>
                                  <?php echo get_field('contacts_phone','option'); ?>
                                </p>
                            </a>
                            <a class="contacts-section__item" href="tel:+375296252103">
                                <svg>
                                    <use xlink:href="#icon-smartphone" href="#icon-smartphone"></use>
                                </svg>
                                <p><?php echo get_field('contacts_mobile','option'); ?></p></a><a class="contacts-section__item" href="tel:+375173522135">
                                <svg>
                                    <use xlink:href="#icon-fax" href="#icon-fax"></use>
                                </svg>
                                <p><?php echo get_field('contacts_fax','option'); ?></p></a></div>
                    </div>
                    <div class="contacts-section">
                        <div class="contacts-section__title">Пишите нам:</div>
                        <div class="conacts-section__container"><a class="contacts-section__item" href="mailto:info@segment.by">
                                <svg>
                                    <use xlink:href="#icon-mail" href="#icon-mail"></use>
                                </svg>
                                <p><?php echo get_field('contacts_email','option'); ?></p></a>
                        </div>
                    </div>
                    <div class="contacts-section">
                        <div class="contacts-section__title">Мы находимся по адресу:</div>
                        <div class="conacts-section__container">
                            <div class="contacts-section__item">
                                <svg>
                                    <use xlink:href="#icon-geopin" href="#icon-geopin"></use>
                                </svg>
                                <p><?php echo get_field('contacts_geo','option'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-section">
                        <div class="contacts-section__title">Мы работаем:</div>
                        <div class="contacts-section__container">
                            <div class="contacts-section__item">
                                <p><?php echo get_field('contacts_work_time','option'); ?></p>
                            </div>
                        </div>
                    </div>
<!--                    <div class="contacts-section">-->
<!--                        <div class="contacts-section__title">Мы в соц.сетях:</div>-->
<!--                        <div class="contacts-section__container">-->
<!--                            <div class="contacts-section__item"></div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="contacts__map contacts__section">
                    <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/157/minsk/?utm_medium=mapframe&amp;utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">&Mcy;&icy;&ncy;&scy;&kcy;</a><a href="https://yandex.ru/maps/profile?from=api-maps&amp;ll=27.586481%2C53.882269&amp;oid=1373599128&amp;ol=biz&amp;origin=jsapi_2_1_74&amp;sll=27.566619%2C53.882966&amp;text=%D0%A0%D0%B5%D1%81%D0%BF%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0%20%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C%2C%20%D0%B3.%20%D0%9C%D0%B8%D0%BD%D1%81%D0%BA%2C%20%D0%BF%D0%B5%D1%80.%20%D0%92%D0%B5%D0%BB%D0%BE%D1%81%D0%B8%D0%BF%D0%B5%D0%B4%D0%BD%D1%8B%D0%B9%2C%20%D0%B4.%205&amp;utm_medium=mapframe&amp;utm_source=maps&amp;z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;">&YAcy;&ncy;&dcy;&iecy;&kcy;&scy;.&Kcy;&acy;&rcy;&tcy;&ycy;</a>
                        <iframe src="https://yandex.ru/map-widget/v1/-/CCUIqRGMcB" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();