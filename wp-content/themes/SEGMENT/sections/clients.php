<section class="clients box" id="clients">
  <div class="clients__container box__container">
    <div class="title-box">
      <div class="title-box__title">С нами работают</div>
      <div class="title-box__back">Клиенты</div>
    </div>
    <div class="clients__slider-container swiper-client-container common-slider">
      <div class="swiper-client-button-next clients__slider-controller common-slider__controller common-slider__controller--right">
          <div class="common-slider__btn-icon"></div>
      </div>
      <div class="swiper-client-button-prev clients__slider-controller common-slider__controller common-slider__controller--left">
          <div class="common-slider__btn-icon"></div>
      </div>
      <div class="clients__slider-wrapper swiper-wrapper">
          <?php
            $clients = get_field('clients');

            foreach ($clients as $client) {
                ?>
                <div class="client-slide swiper-slide">
                    <img
                        src="<?php echo $client['client_img']; ?>"
                        alt="<?php echo $client['client_img_alt']; ?>"
                        title="<?php echo $client['client_img_title']; ?>">
                </div>

          <?php
            }
          ?>
      </div>
      <div class="swiper-client-pagination"></div>
    </div>
  </div>
</section>