<?php
	get_header();
?>

    <?php
        get_template_part('template-parts/top-slide-template')
    ?>

    <section id="intro-manufacture" class="intro-manufacture box">
        <div class="into-manufacture box__container">
            <div class="title-box">
                <div class="title-box__back"><?php echo get_field('pechat_knig_title'); ?></div>
                <h1 class="title-box__title"><?php echo get_field('pechat_knig_title'); ?></h1>
            </div>
            <div class="intro-manufacture__content common-content">
                <div class="common-iframe intro-manufacture__video">
                    <iframe
                            src="<?php echo get_field('pechat_knig_video_link'); ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen="">
                    </iframe>
                </div>
                    <?php the_content(); ?>
            </div>
        </div>

    </section>


<?php
	include get_template_part('template-parts/common-tab');
	include get_template_part('template-parts/slider-common');
	include get_theme_file_path('/components/quiz-form.php');
	get_footer();