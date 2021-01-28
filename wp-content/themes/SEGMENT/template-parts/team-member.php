<div class="team-member" data-tag="<?php the_field('worker_departament'); ?>">
	<div
		class="team-member__body"
	>
		<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
	</div>
	<div class="team-member__footer">
		<div class="team-member__name">
			<?php the_title(); ?>
		</div>
		<div class="team-member__position">
			<?php the_field('worker_position'); ?>
		</div>

        <?php if (get_field('worker_phone')): ?>
            <div class="team-member__phone-box">
                <svg>
                    <use xlink:href="#icon-phone" href="#icon-phone"></use>
                </svg>
                <a class="team-member__phone" href="tel:<?php the_field('worker_phone'); ?>">
					        <?php the_field('worker_phone'); ?>
                </a>
            </div>
        <?php endif; ?>
        <?php if (get_field('worker_phone_2')): ?>
            <div class="team-member__phone-box">
                <svg>
                    <use xlink:href="#icon-phone" href="#icon-phone"></use>
                </svg>
                <a class="team-member__phone" href="tel:<?php the_field('worker_phone_2'); ?>">
					        <?php the_field('worker_phone_2'); ?>
                </a>
            </div>
        <?php endif; ?>
        <?php if (get_field('worker_mail')): ?>
          <div class="team-member__phone-box">
              <svg>
                  <use xlink:href="#icon-mail" href="#icon-mail"></use>
              </svg>
              <a class="team-member__phone" href="mailto:<?php the_field('worker_mail'); ?>">
								<?php the_field('worker_mail'); ?>
              </a>
          </div>
        <?php endif; ?>
	</div>
</div>