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

$choice = get_field('lift_type');


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid py-5"
     style="background-color:#f8f8f8;">
    <div class="container">
        <div class="text-center">
            <h2><?php the_field('title'); ?></h2>
            <p><?php the_field('text'); ?></p>
        </div>

        <?php if ($choice = 'custom_links' && have_rows('custom_links')): ?>
            <div class="row">
                <?php while (have_rows('custom_links')) : the_row(); ?>
                    <div class="col-md-6 col-lg-4 product-card">
                        <a href="<?php the_sub_field('link'); ?>" class="product-inner"
                           title="<?php the_sub_field('product_name'); ?>">
                            <div class="ratio ratio-4x3 img-fluid">
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
                                    <?php echo pll__('Läs mera'); ?> &raquo;
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if ($choice = 'products' && have_rows('custom_links')): ?>
        <?php endif; ?>
        <?php if ($choice = 'auto' && have_rows('custom_links')): ?>
            <?php $args = array(
                'post_type' => 'product',
                'status'        => 'published',
                'posts_per_page' => 6,
            );
            $query = new WP_Query( $args ); ?>
            <?php if ($query->have_posts()) : ?>

                    <div class="row">
                        <?php while ($query->have_posts()) : $query->the_post();
                            $productPrice = get_field('pris');
                            ?>
                            <div class="col-md-6 col-lg-4 product-card">
                                <a href="<?php echo get_the_permalink(); ?>" class="product-inner"
                                   title="<?php the_title(); ?>">
                                    <div class="ratio ratio-4x3 img-fluid">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                    <div class="product-info">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <p class="card-price">
                                            <?php echo esc_html($productPrice); ?>
                                        </p>
                                        <p class="fake-link">
                                            <?php echo pll__('Läs mera'); ?> &raquo;
                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>

            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
