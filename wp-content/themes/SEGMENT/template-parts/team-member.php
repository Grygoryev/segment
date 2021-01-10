<div class="team-member" data-tag="<?php the_field('worker_departament'); ?>">
	<a
		class="team-member__body"
        href="<?php the_permalink(); ?>"
	>
		<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
	</a>
	<div class="team-member__footer">
		<a class="team-member__name" href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
		<div class="team-member__position">
			<?php the_field('worker_position'); ?>
		</div>
		<div class="team-member__phone-box">
			<svg>
				<use xlink:href="#icon-phone" href="#icon-phone"></use>
			</svg>
			<a class="team-member__phone" href="tel:<?php the_field('worker_phone'); ?>">
				<?php the_field('worker_phone'); ?>
			</a>
		</div>
	</div>
</div>