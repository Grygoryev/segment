<section class="intro intro--author box --no-padding-top" id="intro">
    <div class="intro__container box__container">
        <div class="intro__slider-container swiper-intro-container common-slider">
            <div class="intro__swipper-wrapper">

<?php
	$slider = get_field('top_slider');
	$count = 1;

	foreach ($slider as $slide) {
		?>

		<div class="intro__slide --visible">
			<img
				class="intro__img"
				src="<?php echo $slide['top_slide_img']; ?>"
				alt="<?php echo $slide['top_slide_alt']; ?>"
                loading="lazy"
            />
			<div class="intro__text-info">
				<div class="intro__back">
					<?php echo $slide['top_slide_title_back']; ?>
				</div>
                <?php if ($count == 1) { ?>
                    <h1 class="intro__title">
                        <?php echo $slide['top_slide_title']; ?>
                    </h1>
                <?php } else { ?>
                    <h2 class="intro__title">
			                <?php echo $slide['top_slide_title']; ?>
                    </h2>
                <?php }
                    $count++;
                ?>
				<p class="intro__description">
					<?php echo $slide['top_slide_description']; ?>
				</p>
				<div class="intro__buttons">

					<?php

						if ($slide['top_slide_main_btn']['title']) {
							?>
							<a
                                <?php
                                    if ($slide['top_slide_main_btn']['link']) {
                                        ?>
                                        href="<?php echo $slide['top_slide_main_btn']['link']['url']; ?>"
                                        <?php
                                    } else {
                                        echo '';
                                    }
                                ?>

								class="intro__btn-box --calculate link"
								data-go-to="quiz"
							>
								<div class="btn">
									<div class="btn__title">
										<?php echo $slide['top_slide_main_btn']['title']; ?>
									</div>
								</div>
							</a>
							<?php
						}
					?>
					<?php

						if ($slide['top_slide_extra_btn']['title']) {
					?>
							<a

                                <?php
                                    if ($slide['top_slide_extra_btn']['link']) {
                                        ?>
                                    href="<?php echo $slide['top_slide_extra_btn']['link']['url']; ?>"
                                        <?php
                                    }
                                ?>
								class="intro__btn-box"
							>
								<div
                                        class="intro__btn-learn-more btn link"
                                        <?php
                                            if (!$slide['top_slide_extra_btn']['link']) {
                                                echo 'data-go-to="intro-manufacture"';
                                            }
                                        ?>
                                >
									<div class="btn__title">
										<?php echo $slide['top_slide_extra_btn']['title']; ?>
									</div>
								</div>
							</a>
						<?php }
					?>

				</div>
				<?php
					if ($slide['top_slider_buttons_signature']) {
						?>
						<p class="intro__btn-signtature">
							<?php echo $slide['top_slider_buttons_signature']; ?>
						</p>
						<?php
					}
				?>
			</div>
		</div>
		<?php
	}
?>
            </div>
        </div>
    </div>
</section>
