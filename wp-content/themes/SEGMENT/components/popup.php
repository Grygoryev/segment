<div class="box popup-container" id="popup-container">
    <div class="box__container popup-container__container">
        <div class="popup-wrapper">
            <div id="popup-container-close-btn" class="popup-wrapper__close-btn">
                <span></span>
                <span></span>
            </div>
            <div class="popup-wrapper__container">
                <div id="popup-approved" class="popup-approved popup --hidden">
                    <div class="popup__header">
                        <img
                                loading="lazy"
                                src="<?php echo get_template_directory_uri()  . '/img/accepted-icon.png'; ?>"
                                alt="form accepted"
                                class="popup-approved__img"
                        >
                        <h2 class="popup__title">
                            Ваша заявка <span>принята</span>
                        </h2>
                        <p class="popup__subtitle">
                            Мы свяжемся с вами в ближайшее время
                        </p>
                    </div>
                </div>
                <div id="popup-base" class="popup">
                    <div class="popup__header">
                        <h2 class="popup__title">
                            <span>Заполните</span> форму
                        </h2>
                        <p class="popup__subtitle">
                            и менеджер свяжется с вами
                        </p>
                    </div>
                    <form id="popup-form" class="popup-form">
                        <div class="popup-form__field">
                            <label for="">Введите имя</label>
                            <input name="имя" type="text" placeholder="Михаил">
                        </div>
                        <div class="popup-form__field">
                            <label for="">Введите номер телефона</label>
                            <input name="номер_телефона" type="tel" placeholder="+375 (44) 77-86-002">
                        </div>
                        <!--						<div class="popup-form__field">-->
                        <!--							<label for="">Введите ваш email</label>-->
                        <!--							<input name="email" type="email" placeholder="info@segment.by">-->
                        <!--						</div>-->
                        <button class="popup-form__submit btn round-btn">
                            <span class="btn__title round-btn__title">Оставить заявку</span>
                        </button>
                    </form>
                    <p class="popup-form__privacy">
                        Нажимая на кнопку вы даёте своё согласие на <a href="<?php echo get_template_directory_uri() .  '/resources/privacy_agreement.docx' ?>">обработку персональных данных</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>