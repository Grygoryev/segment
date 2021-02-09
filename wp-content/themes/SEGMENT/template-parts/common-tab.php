<section class="author box">
	<div class="author__container box__container">
		<h2 class="author__title">
			<?php echo get_field('common_tabs_title'); ?>
		</h2>
		<div class="author__cards">

			<?php
				$tabs = get_field('common_tabs');

				foreach ($tabs as $tab) {
					?>
					<div class="author-card">
						<div class="author-card__section --img">
							<img
								src="<?php echo $tab['common_tab_img']; ?>"
								alt="<?php echo $tab['common_tab_title']; ?>"
							>
						</div>
						<div class="author-card__section --text">
							<h3 class="author-card__title">
								<?php echo $tab['common_tab_title']; ?>
							</h3>
							<div class="author-card__description">
								<?php echo $tab['common_tab_description']; ?>
							</div>
						</div>
					</div>
					<?php
				}
			?>
		</div>
</section>