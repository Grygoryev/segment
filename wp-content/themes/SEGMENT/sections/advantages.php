<section class="advantages box" id="advantages">
  <div class="advantages__container box__container">
    <div class="title-box">
      <div class="title-box__back"><?php echo get_field('why_we_big_back_title'); ?></div>
      <h2 class="title-box__title"><?php echo get_field('why_we_big_title'); ?></h2>
    </div>
    <div class="advantages__items">
        <?php
            $why_we_cards = get_field('why_we');

            foreach ($why_we_cards as $card) {

        ?>
            <div class="advantage">
                <div class="advantage__img advantage__section">
                    <img
                        loading="lazy"
                        src="<?php echo $card['why_we_img']; ?>"
                        alt="<?php echo $card['why_we_img_alt']; ?>"
                    />
                </div>
                <div class="advantage__info advantage__section">
                    <div class="advantage__num"><?php echo $card['why_we_number']; ?></div>
                    <h3 class="advantage__title"><?php echo $card['why_we_title']; ?></h3>
                    <div class="advantage__description"><?php echo $card['why_we_description']; ?></div>
                    <a href="<?php echo $card['why_we_link']; ?>" class="advantage__btn-learn-more btn">
                        <div class="btn__title">Узнать больше</div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
  </div>
</section>