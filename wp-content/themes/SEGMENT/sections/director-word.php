<section class="director-word box">
	<div class="box__container title-box">
		<div class="title-box__back"><?php the_title(); ?></div>
		<h2 class="title-box__title"><?php the_title(); ?></h2>
	</div>
	<div class="director-word__container box__container">
		<?php the_content(); ?>
	</div>
</section>

<section class="our-pages box cards" id="our-pages">
	<div class="our-pages__container box__container">
		<div class="title-box">
            <div class="title-box__back"><?php echo get_field('why_we_big_back_title'); ?></div>
            <h2 class="title-box__title"><?php echo get_field('why_we_big_title'); ?></h2>
		</div>
		<div class="our-pages__items cards__items">
            <?php
                $why_we_cards = get_field('why_we');

                foreach ($why_we_cards as $card) {

            ?>
			<div class="card">
				<div class="card__img card__section">
                    <img
                        loading="lazy"
                        src="<?php echo $card['why_we_img']; ?>"
                        alt="<?php echo $card['why_we_img_alt']; ?>"
                    >
                </div>
				<div class="card__info card__section">
					<h3 class="card__title">
                      <?php echo $card['why_we_title']; ?>
                    </h3>
					<div class="card__description">
                        <?php echo $card['why_we_description']; ?>
                    </div>
					<a
                        href="<?php echo $card['why_we_link']; ?>"
                        class="card__btn-learn-more btn"
                    >
						<div class="btn__title">Узнать больше</div>
					</a>
				</div>
			</div>

            <?php
                }
            ?>

		</div>
	</div>
</section>