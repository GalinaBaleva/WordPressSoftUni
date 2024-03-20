<div class="col-sm-4">
    <div class="porduct-box">
        <a href="<?php echo get_post_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-responsive']);?>
        <?php endif; ?>
        <h3 class="product-title"><?php the_title(); ?></h3>
        </a>
    </div>
</div>