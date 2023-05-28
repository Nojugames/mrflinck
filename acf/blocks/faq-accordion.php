<?php

/**
 * Custom Raaseporin hoivakotiCommerce Product list block
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faq-accordion-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-faq-accordion';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid">
    <div class="container">
        <div class="row">
            <?php if(get_field('heading') || get_field('text')): ?>
                <div class="col-8 offset-2 mb-5 pb-5">
                    <?php if(get_field('heading')): ?>
                        <h2><?php the_field('heading'); ?></h2>
                    <?php endif; ?>
                    <?php if(get_field('text')): ?>
                        <p><?php the_field('text'); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="col-8 offset-2">
                <div class="row">
                    <div class="accordion" id="accordion-panels-<?php echo $id; ?>">
                    <?php
                    $currNumb = 0;
                    if (have_rows('questions')):
                        while (have_rows('questions')) : the_row(); ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panel-heading-<?php echo $currNumb;?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panel-collapse-<?php echo $currNumb;?>" aria-expanded="true" aria-controls="panel-collapse-<?php echo $currNumb;?>">
                                    <?php the_sub_field('question'); ?>
                                </button>
                            </h3>
                            <div id="panel-collapse-<?php echo $currNumb;?>" class="accordion-collapse collapse show" aria-labelledby="panel-heading-<?php echo $currNumb;?>">
                                <div class="accordion-body">
                                    <strong><?php the_sub_field('answer'); ?></strong>
                                </div>
                            </div>
                        </div>
                    <?php $currNumb++; endwhile; endif; ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
