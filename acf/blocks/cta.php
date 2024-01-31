<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-cta-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-cta';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}
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

?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr($className); ?> container-xl">
        <div class="row">
            <div class="col-md-8 offset-md-2 d-md-flex justify-content-between align-items-center bg-blue p-5 my-5 wilfa-cta">
                <div class="d-flex flex-column text-center text-lg-start">
                    <h2><?php the_field( 'heading' ); ?></h2>
                    <p><?php the_field( 'ingress' ); ?></p>
                </div>
                <div class="d-flex flex-column align-items-center align-items-md-end">
                    <?php if( $button ): ?>
                        <a class="btn btn-mrflinck text-nowrap" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?> &raquo;</a>
                    <?php endif; ?>
                    <?php if( $button_2 ): ?>
                        <a class="text-white" href="<?php echo esc_url( $button_2_url ); ?>" target="<?php echo esc_attr( $button_2_target ); ?>"><?php echo esc_html( $button_2_title ); ?> &raquo;</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</div>