

<article id="post-<?php the_ID(); ?>" <?php post_class(array('class' => 'col-md-6 col-lg-3 product-card')); ?>>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" class="product-inner">
            <div class="ratio ratio-4x3 img-fluid">
                <?php the_post_thumbnail('medium',array('class' => 'p-3')); ?>
            </div>
            <div class="product-info">
                <h3>
                    <?php the_title(); ?>
                </h3>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <p class="card-price">
                    <?php //echo esc_html($productPrice); ?>
                </p>
                <p class="fake-link">
                    <?php echo pll__('Läs mera'); ?> &raquo;
                </p>
            </div>
        </a>
</article>