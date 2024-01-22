<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-hero-large-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-hero-large';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


$image = get_field('image');
$size = 'large'; // (thumbnail, medium, large, full or custom size)

$button = get_field('button');
if( $button ) {
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}

$button_2 = get_field('button_2');
if( $button_2 ) {
    $button_2_url = $button_2['url'];
    $button_2_title = $button_2['title'];
    $button_2_target = $button_2['target'] ? $button_2['target'] : '_self';
}
$image = get_field('image');
$size = 'large'; // (thumbnail, medium, large, full or custom size)

?>

<div id="<?php echo esc_attr($id); ?>" style="background-image: url('<?php echo esc_url(get_field('background_image')); ?>')" class="<?php echo esc_attr($className); ?> container-fluid">
    <div class="cover-hero">
    </div>
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-6 col-md-4 d-flex justify-content-center align-items-center" style="z-index:11">
                    <img class="hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Mister-Flinck-logo_mascot.png" alt="">
                </div>
                <div class="col-lg-6 col-md-8 content-container">
                    <?php if ($image): ?>
                        <?php echo wp_get_attachment_image($image, $size); ?>
                    <?php endif; ?>
                    <?php if(get_field('top_text')): ?>
                        <p class="hero-top-text"><?php the_field('top_text'); ?></p>
                    <?php endif; ?>
                    <?php if(get_field('heading')): ?>
                        <h1><?php the_field('heading'); ?></h1>
                    <?php else: ?>
                        <h1><?php the_title(); ?></h1>
                    <?php endif; ?>
                    <?php if(get_field('ingress')): ?>
                        <p class="hero-text"><?php the_field('ingress'); ?></p>
                    <?php endif; ?>
                    <div class="d-flex justify-content-start align-items-start flex-column flex-sm-row mt-4">
                        <?php if( $button ): ?>
                            <a class="btn btn-outline-white text-white btn-lg me-sm-5" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?> &raquo;</a>
                        <?php endif; ?>
                        <?php if( $button_2 ): ?>
                            <a class="btn mt-5 mt-sm-0 btn-primary btn-lg bg-green text-white" href="<?php echo esc_url( $button_2_url ); ?>" target="<?php echo esc_attr( $button_2_target ); ?>"><?php echo esc_html( $button_2_title ); ?> &raquo;</a>
                        <?php endif; ?>
                        <a href="tel:+358 40 834 8504" class="btn ms-5 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"></path></svg>
                            <span class="text-white ms-2">+358 40 834 8504</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>