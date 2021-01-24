<section class="services box" id="services">
  <div class="box__container">
    <div class="title-box">
      <div class="title-box__back">услуги</div>
      <h2 class="title-box__title">Услуги издательства:</h2>
    </div>
    <div class="services-container">
        <?php
            $services = new WP_Query([
	            'posts_per_page' => -1,
	            'post_type' => 'service',
            ]);

	        while($services->have_posts()) {
	            $services-> the_post();


        ?>
            <a
                class="service"
                href="<?php the_permalink(); ?>"
            >
                <div
                    class="service__body"
                    style="background-image: url(<?php
	                    echo get_the_post_thumbnail_url();
                    ?>);"
                >
                    <div class="service__btn-learn-more btn">
                        <div class="btn__title">Узнать больше</div>
                    </div>
                </div>
                <footer class="service__footer">
                    <div class="service__title">
                        <?php the_title(); ?>
                    </div>
                    <div class="service__description">Юбилейные, корпоративные и имиджевые издания.</div>
                </footer>
            </a>

        <?php
	        wp_reset_postdata();
	        } ?>

    </div>
  </div>
</section>