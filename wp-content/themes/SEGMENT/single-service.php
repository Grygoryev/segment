<?php
	get_header();
?>
<?php
	if (get_field('top_slider')) {
		get_template_part('template-parts/top-slide-template');
	}
?>
    <div class="box breadcrumbs">
        <div class="box__container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php if(function_exists('bcn_display'))
							{
								bcn_display();
							}?>
            </div>
        </div>
    </div>
    <section id="intro-manufacture" class="intro-manufacture box">
        <div class="into-manufacture box__container">
            <div class="title-box">
<!--                <h2 class="title-box__title">-->
<!--									--><?php //the_title(); ?>
<!--                </h2>-->
            </div>
            <div class="intro-manufacture__content common-content">
							<?php the_content(); ?>
            </div>
        </div>
    </section>

<?php
	include get_template_part('template-parts/common-tab');
	include get_template_part('template-parts/slider-common');
	include get_theme_file_path('/components/quiz-form.php');
	get_footer();
