<?php
	get_header();
?>

<section class="delivery author box">
	<div class="delivery__container author__container box__container">
		<div class="title-box">
			<h2 class="author__title title-box__title">
				<?php the_title(); ?>
			</h2>
			<div class="title-box__back">
				<?php the_title(); ?>
			</div>
		</div>

		<div class="author__cards">
			<?php
				$tabs = get_field('dostavka_tabs');

				foreach ($tabs as $tab) {
					?>
					<div class="author-card">
						<div class="author-card__section --img">
							<img
                                loading="lazy"
								src="<?php echo $tab['dostavka_tab_img']['url']; ?>"
								alt="<?php echo $tab['dostavka_tab_header']; ?>"
							>
						</div>
						<div class="author-card__section --text">
							<h3 class="author-card__title">
								<?php echo $tab['dostavka_tab_header']; ?>
							</h3>
							<div class="author-card__description">
								<?php echo $tab['dostavka_tab_description']; ?>
							</div>
						</div>
					</div>
					<?php
				}
			?>
		</div>
		<div class="delivery-payment team-board">
			<div class="delivery-payment__header team-board__tabs delivery-payment__tabs">
				<div id="pay-tab-belarus" class="delivery-payment__tab team-board__tab --active pay-belarus">Оплата для резидентов Республики Беларусь</div>
				<div id="pay-tab-foreign" class="delivery-payment__tab team-board__tab pay-foreign">Оплата для резидентов иностранных государств</div>
			</div>
			<div class="delivery-payment__body">
				<p class="delivery-payment__title">Наши банковские реквизиты:</p>

				<div class="pay-data --active" id="pay-belarus">
					<?php
						$fields = get_field('payment_belarus');

						foreach ($fields as $field) {
					?>
						<div class="pay-data__block">
							<div class="pay-data__currency">
								<?php echo $field['payment_currency']; ?>
							</div>
					<?php
							$blocks = $field['payment_blocks'];

							foreach ($blocks as $line) {
					?>
							<div class="pay-data__line">
								<div class="pay-data__line-title">
									<?php echo $line['payment_field_title']; ?>
								</div>
								<div class="pay-data__line-value">
									<?php echo $line['payment_field_value']; ?>
								</div>
							</div>
					<?php
							}
					?>
						</div>
					<?php
						}
					?>
				</div>
				<div class="pay-data" id="pay-foreign">
					<?php
						$fields = get_field('payment_foreign');

						foreach ($fields as $field) {
							?>
							<div class="pay-data__block">
								<div class="pay-data__currency">
									<?php echo $field['payment_currency']; ?>
								</div>
								<?php
									$blocks = $field['payment_blocks'];

									foreach ($blocks as $line) {
										?>
										<div class="pay-data__line">
											<div class="pay-data__line-title">
												<?php echo $line['payment_field_title']; ?>
											</div>
											<div class="pay-data__line-value">
												<?php echo $line['payment_field_value']; ?>
											</div>
										</div>
										<?php
									}
								?>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div>
</section>

<?php
	include get_theme_file_path('./components/quiz-form.php');
	get_footer();
