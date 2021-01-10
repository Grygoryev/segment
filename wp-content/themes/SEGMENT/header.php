<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="/img/icon-logo.svg">
    <?php wp_head(); ?>
</head>

<body class="
    <?php
       if (is_front_page()) {
    ?>
    <?php } else { ?>
    common-body
    <?php
        }
       ?>
">
<header class="header box" id="header">
    <div class="header__line --top">
        <div class="header__container box__container">
            <a class="header__logo" href="<?php echo get_home_url(); ?>">
                <svg>
                    <use xlink:href="#icon-logo-white" href="#icon-logo-white"></use>
                </svg>
            </a>
            <div class="header__feedback">
                <div class="header__text">Отвечаем в</div>
                <div class="social-links header__social-links">
                    <svg class="soc-link">
                        <use xlink:href="#icon-telegram" href="#icon-telegram"> </use>
                    </svg>
                    <svg class="soc-link">
                        <use xlink:href="#icon-whatsapp" href="#icon-whatsapp"> </use>
                    </svg>
                    <svg class="soc-link">
                        <use xlink:href="#icon-viber" href="#icon-viber"> </use>
                    </svg>
                </div>
                <div class="header__text">+375 29 625-21-03</div>
                <div class="header__btn btn --call">
                    <div class="btn__title">Заказать звонок</div>
                </div>
                <div class="header__btn btn">
                    <div class="btn__title">Узнать стоимость</div>
                </div>
            </div>
            <div class="header__menu-btn-box" id="mobile-menu-btn">
                <p>Меню</p>
                <div class="header__menu-btn"><span> </span><span></span><span></span></div>
            </div>
        </div>
    </div>
    <div class="header__line --nav">
        <div class="header__nav-container box__container">
            <nav class="nav box" id="nav">
                <svg class="nav__search">
                    <use xlink:href="#icon-search" href="#icon-search"></use>
                </svg>
                <div class="nav__container box__container">
                    <div class="nav__link-box --about">
                        <div class="nav__link">О нас</div>
                        <div class="nav__link-more">
                            <a class="nav__link-more-item" href="about.html">О компании</a>
                            <a class="nav__link-more-item" href="manufacture.html"> Печать книг</a>
                            <a class="nav__link-more-item" href="license.html"> Лицензии</a>
                            <a class="nav__link-more-item" href="achievments.html"> Достижения </a>
                            <a class="nav__link-more-item" href="feedbacks.html"> Отзывы </a>
                            <a class="nav__link-more-item" href="news.html"> Новости </a>
                            <a class="nav__link-more-item" href="inmedia.html"> СМИ о нас </a>
                        </div>
                    </div>
                    <a class="nav__link-box" href="<?php echo site_url('/team'); ?>">
<!--                    <a class="nav__link-box" href="--><?php //echo get_post_type_archive_link('workers'); ?><!--">-->
                        <div class="nav__link">Наша команда</div>
                    </a>
                    <a class="nav__link-box" href="publish.html">
                        <div class="nav__link">Издать книгу</div>
                    </a>
                    <a class="nav__link-box" href="portfolio.html">
                        <div class="nav__link">Портфолио</div>
                    </a>
                    <a class="nav__link-box link" href="contacts.html">
                        <div class="nav__link">Контакты</div>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>