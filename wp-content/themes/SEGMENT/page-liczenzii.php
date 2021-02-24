<?php
	get_header();
?>
	<section class="licenses box">
		<div class="licenses__container box__container">
			<div class="title-box">
				<div class="title-box__back"><?php the_title(); ?></div>
				<h1 class="title-box__title"><?php the_title(); ?></h1>
			</div>
			<div class="licenses-text">
				<div class="licenses-text__description">
                    <?php the_content(); ?>
                </div>
			    <?php

                    $textblocks = get_field('licenses_texts');

                    foreach ($textblocks as $textblock) {
                ?>
                        <h3 class="licenses-text__title">
                            <?php echo $textblock['licenses_text_title']; ?>
                        </h3>
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
                <?php
                    $licenses = get_field('licenses_photos');

                    foreach ($licenses as $license) {
                ?>
                    <div class="license-box">
                        <svg class="search-icon">
                            <use xlink:href="#icon-search" href="#icon-search"></use>
                        </svg>
                        <div class="license">
                            <img class="license__img"
                                 loading="lazy"
                                 src="<?php echo $license['license_photo']; ?>"
                                 alt="<?php echo $license['license_photo_alt']; ?>"
                            />
                        </div>
                    </div>
                <?php
                    }
                ?>
			</div>
		</div>
	</section>
    <section class="box video-box">
        <div class="box__container video-box__container">
            <div class="common-iframe">
                <iframe
                        src="<?php echo get_field('info_page_video_link'); ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="">
                </iframe>
            </div>
        </div>
    </section>
<?php
	get_footer();
