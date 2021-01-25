<?php
	get_header();
?>
	<section class="achievments box">
		<div class="achievments__container box__container">
			<div class="title-box">
				<div class="title-box__back"><?php the_title(); ?>></div>
				<div class="title-box__title"><?php the_title(); ?></div>
			</div>
			<div class="common-description">
                <?php the_content(); ?>
            </div>
			<div class="achievments__list">
                <?php
                    $achievs = get_field('achievs');

                    foreach ($achievs as $achiev) {
                ?>
                        <div class="achievment">
                            <div class="achievment__title">
                                <?php echo $achiev['achiev_title']; ?>
                            </div>
                            <div class="achievment__img-box">
                                <img src="<?php echo $achiev['achiev_photo']; ?>" alt="<?php echo $achiev['achiev_title']; ?>">
                            </div>
                        </div>
                <?php
                    }
                ?>
		</div>
	</section>
<?php
	get_footer();
