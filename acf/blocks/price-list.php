<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'block-price-list-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-price-list';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$image = get_field('image');
$size = 'large'; // (thumbnail, medium, large, full or custom size)
$button = get_field('button');
if ($button) {
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container">
    <div class="text-center">
        <?php if(get_field('title')): ?>
            <h2 class="mb-4"><?php the_field('title');?></h2>
            <p class="mb-5" class="text-black"><?php the_field('text');?></p>
        <?php endif; ?>
    </div>
    <div class="row">
        <?php if( have_rows('price_list') ): while( have_rows('price_list') ) : the_row(); ?>
        <div class="col-lg-6 px-md-5 price-list-container">
                <ul>
                    <?php if( have_rows('prices') ): while( have_rows('prices') ) : the_row();
                        $price = get_sub_field('price');
                        $product = get_sub_field('name');
                        ?>
                        <li class="d-flex justify-content-between"><span class="product-name"><?php echo esc_html($product); ?></span><span class="product-price"><?php echo esc_html($price); ?></span></li>

                    <?php endwhile; endif; ?>
                </ul>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>