<?php
	get_header();
	while (have_posts()) {
		the_post();
?>
        <?php
            if (get_field('top_slider')) {
			    get_template_part('template-parts/top-slide-template');
            }
        ?>
        <section class="box">
            <div class="box__container">
                <div class="title-box">
                    <div class="title-box__title"><?php the_title(); ?></div>
                </div>
            </div>
        </section>
        <section class="blog box">
            <div class="blog__container box__container">
                  <article class="article common-content">
                    <?php the_content(); ?>
                  </article>
          </div>
      </section>

			<?php
			$votes = get_post_meta($post->ID, "votes", true);
			$votes = ($votes == "") ? 0 : $votes;
			?>
        This post has <div id='vote_counter'><?php echo $votes ?></div> votes<br>

			<?php
			$nonce = wp_create_nonce("my_user_vote_nonce");
			$link = admin_url('admin-ajax.php?action=my_user_vote&post_id='.$post->ID.'&nonce='.$nonce);
			echo '<a class="user_vote" data-nonce="' . $nonce . '" data-post_id="' . $post->ID . '" href="' . $link . '">vote for this article</a>';
			?>

<?php
	}
	get_footer();
?>