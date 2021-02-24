<?php
	get_header();
?>

    <section class="contacts box">
        <div class="contacts__container box__container">
            <div class="title-box">
                <div class="title-box__title"><?php the_title(); ?></div>
                <h2 class="title-box__back"><?php the_title(); ?></h2>
            </div>
            <div class="contacts__description">
	            <?php the_content(); ?>
            </div>
            <div class="contacts__content">
                <div class="contacts__text-info contacts__section">
                    <div class="contacts-section">
                        <h3 class="contacts-section__title">Звоните нам:</h3>
                        <div class="contacts-section__container">
                            <a class="contacts-section__item" href="tel:<?php echo get_field('contacts_phone','option'); ?>">
                                <svg>
                                    <use xlink:href="#icon-phone" href="#icon-phone"></use>
                                </svg>
                                <p>
                                  <?php echo get_field('contacts_phone','option'); ?>
                                </p>
                            </a>
                            <a class="contacts-section__item" href="tel:<?php echo get_field('contacts_mobile','option'); ?>">
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
                        <h3 class="contacts-section__title">Пишите нам:</h3>
                        <div class="conacts-section__container"><a class="contacts-section__item" href="mailto:info@segment.by">
                                <svg>
                                    <use xlink:href="#icon-mail" href="#icon-mail"></use>
                                </svg>
                                <p><?php echo get_field('contacts_email','option'); ?></p></a>
                        </div>
                    </div>
                    <div class="contacts-section">
                        <h3 class="contacts-section__title">Мы находимся по адресу:</h3>
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
                        <h3 class="contacts-section__title">Мы работаем:</h3>
                        <div class="contacts-section__container">
                            <div class="contacts-section__item">
                                <p><?php echo get_field('contacts_work_time','option'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-section">
                        <div class="contacts-section__title">Мы в соц.сетях:</div>
                        <div class="contacts-section__container">
                            <div class="social-links">
                                <svg class="soc-link">
                                    <a href="https://t.me/svetlana_lebed">
                                        <use xlink:href="#icon-telegram" href="#icon-telegram"> </use>
                                    </a>
                                </svg>
                                <svg class="soc-link">
                                    <a href="https://wa.me/375296252103/?text=Добрый%20день!%20Я%20по%20поводу%20издания%20книги.%20Меня%20интересует%20вопрос:%20">
                                        <use xlink:href="#icon-whatsapp" href="#icon-whatsapp"> </use>
                                    </a>
                                </svg>
                                <svg class="soc-link">
                                    <a href="viber://chat?number=375296252103">
                                        <use xlink:href="#icon-viber" href="#icon-viber"></use>
                                    </a>
                                </svg>
                                <div class="soc-link">
                                    <a href="https://www.instagram.com/segment.book/?hl=ru">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132 132" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><radialGradient id="c" cx="158.429" cy="578.088" r="65" xlink:href="#a" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)" fx="158.429" fy="578.088"/><radialGradient id="d" cx="147.694" cy="473.455" r="65" xlink:href="#b" gradientUnits="userSpaceOnUse" gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)" fx="147.694" fy="473.455"/><linearGradient id="b"><stop offset="0" stop-color="#3771c8"/><stop stop-color="#3771c8" offset=".128"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></linearGradient><linearGradient id="a"><stop offset="0" stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></linearGradient></defs><path fill="url(#c)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28a27.22 27.22 0 0017.75-14.53c1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="url(#d)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28a27.22 27.22 0 0017.75-14.53c1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="#fff" d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97a5.76 5.76 0 105.76 5.758c0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z"/></svg>
                                    </a>
                                </div>
                                <svg class="soc-link">
                                    <a href="https://www.youtube.com/channel/UCEEZwPZl98t41pErHB7n5cw">
                                        <use xlink:href="#icon-youtube" href="#icon-youtube"> </use>
                                    </a>
                                </svg>
                                <svg class="soc-link">
                                    <a href="https://www.facebook.com/segment.by">
                                        <use xlink:href="#icon-facebook" href="#icon-facebook"> </use>
                                    </a>
                                </svg>
                                <svg class="soc-link">
                                    <a href="https://ok.ru/group/57430752362589">
                                        <use xlink:href="#icon-ok" href="#icon-ok"> </use>
                                    </a>
                                </svg>
                            </div>
                        </div>
                    </div>
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