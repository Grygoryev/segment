<div class="inmedia-item">
    <div class="inmedia-item__section --content">
        <a href="<?php the_permalink(); ?>" class="inmedia-item__title">
            <?php the_title(); ?>
        </a>
        <div class="inmedia-item__description">
            <?php echo get_field('smi_short_description'); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="inmedia-item__btn-learn-more btn">
            <div class="btn__title">Узнать больше</div>
        </a>
    </div>
    <div class="inmedia-item__section --img">
        <?php the_post_thumbnail(); ?>
    </div>
</div>