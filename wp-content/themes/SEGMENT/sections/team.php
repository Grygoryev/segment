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
        <div class="team-board__tab">Специалисты по факсимиле и роскошному переплету</div>
        <div class="team-board__tab">Мастера типографского дела</div>
        <div class="team-board__tab">Вспомогательная служба</div>
        <div class="team-board__tab" data-tag="business">Специалисты по созданию книг о предприятиях и книг о бизнес</div>
        <div class="team-board__tab" data-tag="science">Специалисты по работе с авторами и учеными</div>
        <div class="team-board__tab" data-tag="management">Руководство</div>
      </div>
      <div class="team-board__members">

	      <?php
          wp_reset_postdata();
		      $workers = new WP_Query(array(
			      'paged' => get_query_var('paged', 1),
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