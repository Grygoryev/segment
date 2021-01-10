<?php
	get_header();
	while (have_posts()) {
		the_post();
?>
	<section class="worker box">
		<div class="worker__container box__container">
			<div class="worker__header">
				<div class="worker__photo">
					<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
				</div>
				<div class="worker__info">
					<div class="worker__fio">
						<?php the_title(); ?>
					</div>
					<table>
						<tr>
							<td class="bold">Должность:</td>
							<td>
								<?php the_field('worker_position');?>
							</td>
						</tr>
						<tr>
							<td class="bold">E-mail:</td>
							<td><a href="mailto:segment@mail.ru">segment@mail.ru</a></td>
						</tr>
						<tr>
							<td class="bold">Телефон:</td>
							<td><a href="tel:+37527890">+37527890</a></td>
						</tr>
					</table>
<!--					<div class="worker__btn btn">-->
<!--						<div class="btn__title">Задать вопрос</div>-->
<!--					</div>-->
				</div>
			</div>
			<div class="worker__body">
				<div class="worker-about">
					<div class="worker-about__title">О себе</div>
						<?php the_content(); ?>
					</div>
				<div class="worker-about">
					<div class="worker-about__title">Видео</div>
					<div class="worker-about__videos">
						<iframe src="https://www.youtube.com/embed/tgg-CH7Dk-M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<iframe src="https://www.youtube.com/embed/tgg-CH7Dk-M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	}
	get_footer();
?>