<?php
	get_header();

	$arr = get_the_category();
	$cat_data = get_categories(array('parent' => $arr[1]->cat_ID, 'hide_empty' => 0));

	echo '<pre>';
	print_r($arr[1]->cat_ID);
	echo '</pre>';
	?>

	<section>rfrfirf</section>


<?php
	get_footer();