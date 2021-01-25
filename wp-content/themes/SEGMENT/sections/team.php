<section class="team box">
  <div class="team__container box__container">
        <div class="team__header">
            <div class="title-box">
                <div class="title-box__title"><?php the_title(); ?></div>
                <div class="title-box__back"><?php the_title(); ?></div>
            </div>
			    <?php
				    if (get_field('team_custom_header')) {
					    ?>
                <div class="team__subtitle">
							    <?php the_field('team_custom_header'); ?>
                </div>
				    <?php } ?>

            <p class="team__description --main">
              <?php echo get_the_content(); ?>
            </p>
            <p class="team__description --boldy">
                <?php the_field('description_signature'); ?>
            </p>
        </div>

    <div class="team-board">

      <div class="team-board__tabs">
        <div class="team-board__tab --all --active">Наша команда</div>
	      <?php
		      while(have_posts()){
			      the_post();
			      $tabs = get_field_object('team_departaments')['value'];

			      foreach ($tabs as $tab) {
          ?>
                      <div class="team-board__tab" data-tag="<?php echo $tab?>">
                        <?php echo $tab; ?>
                      </div>

         <?php
			      }
		      }
	      ?>
      </div>
      <div class="team-board__members">

	      <?php
          wp_reset_postdata();
		      $workers = new WP_Query(array(
                  'posts_per_page' => -1,
			      'post_type' => 'worker',
		      ));

		      while($workers->have_posts()) {
			      $workers-> the_post();
			      get_template_part('template-parts/team-member');
              ?>

		      <?php }
            wp_reset_postdata();
	      ?>

    </div>
  </div>
</section>