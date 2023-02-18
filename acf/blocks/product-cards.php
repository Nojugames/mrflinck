<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-product-cards-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-product-cards';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid mt-5 py-5"
     style="background-color:#f8f8f8;">
    <div class="container">
        <div class="text-center">
            <h2><?php the_field('title'); ?></h2>
            <p><?php the_field('text'); ?></p>

        </div>

        <?php if (have_rows('products')): ?>
            <div class="row">
                <?php while (have_rows('products')) : the_row(); ?>
                    <div class="col-md-6 col-lg-3 product-card">
                        <a href="<?php the_sub_field('link'); ?>" class="product-inner"
                           title="<?php the_sub_field('product_name'); ?>">
                            <div class="ratio ratio-1x1 img-fluid">
                                <?php
                                $image = get_sub_field('image');
                                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                if ($image): ?>
                                    <?php echo wp_get_attachment_image($image, $size); ?>
                                <?php endif; ?>

                            </div>
                            <div class="product-info">
                                <h3>
                                    <?php the_sub_field('product_name'); ?>
                                </h3>
                                <p>
                                    <?php the_sub_field('minfo'); ?>
                                </p>
                                <p class="card-price">
                                    <?php the_sub_field('price'); ?>
                                </p>
                                <p class="fake-link">
                                    Läs mera &raquo;
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
