<?php
	get_header();
	include get_theme_file_path('./sections/intro.php');
//	get_template_part('template-parts/top-slide-template');
	include get_theme_file_path('./sections/about.php');
	include get_theme_file_path('./sections/services.php');
	include get_theme_file_path('./sections/advantages.php');
	include get_theme_file_path('./components/quiz-form.php');
	include get_theme_file_path('./sections/clients.php');
	get_footer();