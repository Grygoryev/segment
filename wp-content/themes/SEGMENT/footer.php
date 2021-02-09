<footer class="footer box" id="footer">
    <div class="footer__container box__container">
      <div class="footer__section footer__section--about">
        <div class="footer__title">О нас</div>
        <div class="footer__about-description">Издательский дом «Сегмент» (ООО «Колорград»)– это крупнейший в стране частный издательско-полиграфический комплекс, специализирующийся на издании книг малыми тиражами.</div>
        <svg class="footer__logo">
          <use xlink:href="#icon-logo-colorful" href="#icon-logo-colorful"></use>
        </svg>
      </div>
      <div class="footer__section">
        <div class="footer__title">Меню</div>
        <div class="footer__line --bordered">Вопрос-ответ</div>
        <a href="<?php echo site_url("/dostavka-i-oplata")?>" class="footer__line --bordered">Доставка и оплата</a>
        <div class="footer__line">Ответим в соц. сетях:</div>
        <div class="social-links">
          <svg class="soc-link">
            <use xlink:href="#icon-telegram" href="#icon-telegram"> </use>
          </svg>
          <svg class="soc-link">
            <use xlink:href="#icon-whatsapp" href="#icon-whatsapp"> </use>
          </svg>
          <svg class="soc-link">
            <use xlink:href="#icon-viber" href="#icon-viber"> </use>
          </svg>
          <svg class="soc-link">
            <use xlink:href="#icon-instagram" href="#icon-instagram"> </use>
          </svg>
          <svg class="soc-link">
            <use xlink:href="#icon-youtube" href="#icon-youtube"> </use>
          </svg>
        </div>
      </div>
      <div class="footer__section">
        <div class="footer__title">Контакты </div>
        <div class="footer__contact-line">
          <svg>
            <use xlink:href="#icon-geopin" href="#icon-geopin"></use>
          </svg>
          <p><?php echo get_field('contacts_work_time','option'); ?></p>
        </div>
        <div class="footer__contact-line">
          <svg>
            <use xlink:href="#icon-phone" href="#icon-phone"></use>
          </svg>
          <p><?php echo get_field('contacts_phone','option'); ?></p>
        </div>
        <div class="footer__contact-line">
          <svg>
            <use xlink:href="#icon-smartphone" href="#icon-smartphone"></use>
          </svg>
          <p><?php echo get_field('contacts_mobile','option'); ?></p>
        </div>
        <div class="footer__contact-line">
          <svg>
            <use xlink:href="#icon-fax" href="#icon-fax"></use>
          </svg>
          <p><?php echo get_field('contacts_fax','option'); ?></p>
        </div>
        <div class="footer__contact-line">
          <svg>
            <use xlink:href="#icon-mail" href="#icon-mail"></use>
          </svg>
          <p><?php echo get_field('contacts_email','option'); ?></p>
        </div>
      </div>
      <div class="footer__section">
        <div class="footer__title --feedback-form">Связаться с нами </div>
        <form class="feedback-form" id="feedback-form">
          <label class="feedback-form__line" for="">
            <input class="feedback-form__input" type="text" placeholder="Ваше имя:">
          </label>
          <label class="feedback-form__line" for="">
            <input class="feedback-form__input" type="text" placeholder="Ваше email:">
          </label>
          <textarea class="feedback-form__input" rows="4" placeholder="Сообщение"></textarea>
          <label class="feedback-form__line --privacy-agreement">
            <input type="checkbox" checked>
            <p>Даю согласие на обработку своих персональных данных</p>
          </label>
          <button class="btn footer__btn" type="submit">
            <div class="btn__title">Отправить</div>
          </button>
        </form>
      </div>
    </div>
  </footer>

    <?php
        include get_theme_file_path('./components/icons.php');
        wp_footer();
    ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-54N3SVQ');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54N3SVQ"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>