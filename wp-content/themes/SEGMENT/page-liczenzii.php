<?php
	get_header();
?>
	<section class="licenses box">
		<div class="licenses__container box__container">
			<div class="title-box">
				<div class="title-box__back"><?php the_title(); ?></div>
				<div class="title-box__title"><?php the_title(); ?></div>
			</div>
			<div class="licenses-text">
				<div class="licenses-text__description">
                    <?php the_content(); ?>
                </div>
			    <?php

                    $textblocks = get_field('licenses_texts');

                    foreach ($textblocks as $textblock) {
                ?>
                        <div class="licenses-text__title">
                            <?php echo $textblock['licenses_text_title']; ?>
                        </div>
                        <div class="licenses-text__description">
	                        <?php echo $textblock['licenses_text_description']; ?>
                        </div>

                <?php
                    }
                ?>

            </div>
			<div class="licenses__list">
				<div class="licenses__slider-controllers">
					<div class="licenses__next-btn"></div>
					<div class="licenses__prev-btn"></div>
					<div class="licenses__close-btn"><span></span><span></span></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic1.jpg" alt="" title=""></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic2.jpg" alt="" title=""></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic3.jpg" alt="" title=""></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic4.jpg" alt="" title=""></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic5.jpg" alt="" title=""></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic6.jpg" alt="" title=""></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic7.jpg" alt="" title=""></div>
				</div>
				<div class="license-box">
					<svg class="search-icon">
						<use xlink:href="#icon-search" href="#icon-search"></use>
					</svg>
					<div class="license"><img class="license__img" src="img/licenses/pic8.jpg" alt="" title=""></div>
				</div>
			</div>
		</div>
	</section>
<?php
	get_footer();
