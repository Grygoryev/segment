<!DOCTYPE html>
<html
	<?php if (is_singular('smi') || is_page('izdat-knigu')) {
		?>
      style="height: 100%"
		<?php
	}?>
        lang="ru"
>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" lang="ru">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="google-site-verification" content="ZoQojDDl8DM48u9A35rcJuK8L1RJvrz2s-cq1rAL3ho" />
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <title><?php wp_title(); ?></title>
    <link rel="canonical" href="<?php echo get_permalink(); ?>">

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
            <a class="header__logo"
							<?php
								if (is_front_page()) {
									?>

									<?php
								} else {
									?>

                    href="<?php echo get_home_url(); ?>"
									<?php
								}
							?>

            >
                <svg>
                    <use xlink:href="#icon-logo-white" href="#icon-logo-white"></use>
                </svg>
            </a>
            <div class="header__feedback">
                <div class="header__text">Отвечаем в</div>
                <div class="social-links header__social-links">
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
                </div>
                <a
                        href="tel:<?php echo get_field('contacts_mobile','option'); ?>"
                        class="header__text"
                >
									<?php echo get_field('contacts_mobile','option'); ?>
                </a>
                <a href="<?php echo site_url(); ?>#quiz-form" class="header__btn btn --call">
                    <div class="btn__title">Заказать звонок</div>
                </a>
                <a href="<?php echo site_url(); ?>#quiz-form" class="header__btn btn">
                    <div class="btn__title">Узнать стоимость</div>
                </a>
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

<?php
	if (
	!is_front_page() &&
	!is_page('pechat-knig') &&
	!is_singular('service')
	) {
?>
<div class="box breadcrumbs">
    <div class="box__container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
        </div>
    </div>
</div>

<?php
	}
?>