<!DOCTYPE html>
<html
    <?php if (is_singular('smi') || is_page('izdat-knigu')) {
    ?>
      style="height: 100%"
    <?php
    }?>
>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="/img/icon-logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>

<body class="
    <?php
       if (is_front_page() || is_page('pechat-knig') || is_singular('service')) {
    ?>
    <?php } else { ?>
    common-body
    <?php
        }
       ?>
">

<?php
    $headerTop = '';

	if ( is_user_logged_in() ) {
		$headerTop = "top: 32px;";
	}
?>

<header class="header box" id="header" style="<?php echo $headerTop; ?>">
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
            <?php include get_theme_file_path('./components/nav.php'); ?>
        </div>
    </div>
</header>