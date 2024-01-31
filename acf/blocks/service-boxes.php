<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'service-boxes-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-service-boxes';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$button = get_field('button');
if( $button ) {
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}

$icons = array(
    'icon-water' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M556.2 400.2c-20.89-3.732-41.84-15.52-59-33.22c-9.031-9.312-25.38-9.312-34.41 0C442.6 387.9 413.8 399.8 384 399.8s-58.56-11.98-78.8-32.85c-9.031-9.312-25.38-9.312-34.41 0C250.6 387.9 221.8 399.8 192 399.8c-32.36 0-68.04-13.52-86.79-32.85c-9.031-9.312-25.38-9.312-34.41 0c-19.14 19.76-31.66 29.78-51 33.22c-13.05 2.32-21.75 14.83-19.42 27.92c2.312 13.08 14.66 21.83 27.83 19.49c26.19-4.672 44.73-16.76 61-31.44c28 19.74 66.05 31.81 102.8 31.81c34.89 0 68.76-11.54 95.95-32.19c54.31 41.25 137.4 41.31 191.8 .1582c20.61 16.37 44.16 27.41 68 31.65c1.422 .252 2.844 .377 4.234 .377c11.41 0 21.53-8.199 23.59-19.87C577.1 415 569.2 402.5 556.2 400.2zM556.2 256.2c-20.89-3.732-41.84-15.52-59-33.22c-9.031-9.312-25.38-9.312-34.41 0C442.6 243.9 413.8 255.8 384 255.8s-58.56-11.98-78.8-32.85c-9.031-9.312-25.38-9.312-34.41 0C250.6 243.9 221.8 255.8 192 255.8c-32.36 0-68.04-13.52-86.79-32.85c-9.031-9.312-25.38-9.312-34.41 0c-19.14 19.76-31.66 29.78-51 33.22c-13.05 2.32-21.75 14.83-19.42 27.92c2.312 13.08 14.66 21.83 27.83 19.49c26.19-4.672 44.73-16.76 61-31.44c28 19.74 66 31.69 102.8 31.69c34.89 0 68.81-11.42 95.99-32.07c54.31 41.25 137.4 41.31 191.8 .1582c20.61 16.37 44.16 27.41 68 31.65c1.422 .252 2.844 .377 4.234 .377c11.41 0 21.53-8.199 23.59-19.87C577.1 271 569.2 258.5 556.2 256.2zM28.21 159.6c26.19-4.672 44.73-16.76 61-31.44c28 19.74 66 31.69 102.8 31.69c34.89 0 68.81-11.42 95.99-32.07c54.31 41.25 137.4 41.31 191.8 .1582c20.61 16.37 44.16 27.41 68 31.65c1.422 .252 2.844 .377 4.234 .377c11.41 0 21.53-8.199 23.59-19.87c2.328-13.09-6.375-25.6-19.42-27.92c-20.89-3.732-41.84-15.52-59-33.22c-9.031-9.312-25.38-9.312-34.41 0c-20.23 20.87-48.88 32.94-78.72 32.94s-58.64-12.07-78.87-32.94c-9.031-9.312-25.38-9.312-34.41 0C250.6 99.85 221.9 111.9 192.1 111.9c-32.36 0-68.12-13.61-86.87-32.94c-9.031-9.312-25.38-9.312-34.41 0c-19.14 19.76-31.66 29.78-51 33.22c-13.05 2.32-21.75 14.83-19.42 27.92C2.689 153.2 15.03 161.1 28.21 159.6z"/></svg>',
    'icon-air-conditioner' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64v96c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM80 128H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zM256 256H192V416c0 17.7-14.3 32-32 32s-32-14.3-32-32c0-11.8 6.4-22.2 16-27.7c15.3-8.9 20.5-28.4 11.7-43.7s-28.4-20.5-43.7-11.7C83.4 349.4 64 380.4 64 416c0 53 43 96 96 96s96-43 96-96V256zm64 128c0 53 43 96 96 96s96-43 96-96c0-35.6-19.4-66.6-48-83.1c-15.3-8.8-34.9-3.6-43.7 11.7s-3.6 34.9 11.7 43.7c9.6 5.6 16 15.9 16 27.7c0 17.7-14.3 32-32 32s-32-14.3-32-32V256H320V384z"/></svg>',
    'icon-sun' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM352 256c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zm32 0c0-70.7-57.3-128-128-128s-128 57.3-128 128s57.3 128 128 128s128-57.3 128-128z"/></svg>',
    'icon-fan' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M258.6 0c-1.7 0-3.4 .1-5.1 .5C168 17 115.6 102.3 130.5 189.3c2.9 17 8.4 32.9 15.9 47.4L32 224H29.4C13.2 224 0 237.2 0 253.4c0 1.7 .1 3.4 .5 5.1C17 344 102.3 396.4 189.3 381.5c17-2.9 32.9-8.4 47.4-15.9L224 480v2.6c0 16.2 13.2 29.4 29.4 29.4c1.7 0 3.4-.1 5.1-.5C344 495 396.4 409.7 381.5 322.7c-2.9-17-8.4-32.9-15.9-47.4L480 288h2.6c16.2 0 29.4-13.2 29.4-29.4c0-1.7-.1-3.4-.5-5.1C495 168 409.7 115.6 322.7 130.5c-17 2.9-32.9 8.4-47.4 15.9L288 32V29.4C288 13.2 274.8 0 258.6 0zM256 288c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/></svg>',
    'icon-snowflake' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M484.4 294.4c1.715 6.402 .6758 12.89-2.395 18.21s-8.172 9.463-14.57 11.18l-31.46 8.43l32.96 19.03C480.4 357.8 484.4 372.5 477.8 384s-21.38 15.41-32.86 8.783l-32.96-19.03l8.43 31.46c3.432 12.81-4.162 25.96-16.97 29.39s-25.96-4.162-29.39-16.97l-20.85-77.82L280 297.6v84.49l56.97 56.97c9.375 9.375 9.375 24.56 0 33.94C332.3 477.7 326.1 480 320 480s-12.28-2.344-16.97-7.031L280 449.9V488c0 13.25-10.75 24-24 24s-24-10.75-24-24v-38.06l-23.03 23.03c-9.375 9.375-24.56 9.375-33.94 0s-9.375-24.56 0-33.94L232 382.1V297.6l-73.17 42.25l-20.85 77.82c-3.432 12.81-16.58 20.4-29.39 16.97s-20.4-16.58-16.97-29.39l8.43-31.46l-32.96 19.03C55.61 399.4 40.85 395.5 34.22 384s-2.615-26.16 8.859-32.79l32.96-19.03l-31.46-8.43c-12.81-3.432-20.4-16.58-16.97-29.39s16.58-20.4 29.39-16.97l77.82 20.85L208 255.1L134.8 213.8L57.01 234.6C44.2 238 31.05 230.4 27.62 217.6s4.162-25.96 16.97-29.39l31.46-8.432L43.08 160.8C31.61 154.2 27.6 139.5 34.22 128s21.38-15.41 32.86-8.785l32.96 19.03L91.62 106.8C88.18 93.98 95.78 80.83 108.6 77.39s25.96 4.162 29.39 16.97l20.85 77.82L232 214.4V129.9L175 72.97c-9.375-9.375-9.375-24.56 0-33.94s24.56-9.375 33.94 0L232 62.06V24C232 10.75 242.8 0 256 0s24 10.75 24 24v38.06l23.03-23.03c9.375-9.375 24.56-9.375 33.94 0s9.375 24.56 0 33.94L280 129.9v84.49l73.17-42.25l20.85-77.82c3.432-12.81 16.58-20.4 29.39-16.97c6.402 1.715 11.5 5.861 14.57 11.18s4.109 11.81 2.395 18.21l-8.43 31.46l32.96-19.03C456.4 112.6 471.2 116.5 477.8 128s2.615 26.16-8.859 32.78l-32.96 19.03l31.46 8.432c12.81 3.432 20.4 16.58 16.97 29.39s-16.58 20.4-29.39 16.97l-77.82-20.85L304 255.1l73.17 42.25l77.82-20.85C467.8 273.1 480.1 281.6 484.4 294.4z"/></svg>',
    'icon-warranty' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path d="M256 0c36.8 0 68.8 20.7 84.9 51.1C373.8 41 411 49 437 75s34 63.3 23.9 96.1C491.3 187.2 512 219.2 512 256s-20.7 68.8-51.1 84.9C471 373.8 463 411 437 437s-63.3 34-96.1 23.9C324.8 491.3 292.8 512 256 512s-68.8-20.7-84.9-51.1C138.2 471 101 463 75 437s-34-63.3-23.9-96.1C20.7 324.8 0 292.8 0 256s20.7-68.8 51.1-84.9C41 138.2 49 101 75 75s63.3-34 96.1-23.9C187.2 20.7 219.2 0 256 0zM369 209l17-17L352 158.1l-17 17-111 111-47-47-17-17L126.1 256l17 17 64 64 17 17 17-17L369 209z"/></svg>',
    'icon-installation' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path d="M64 24l0 8H48C21.5 32 0 53.5 0 80V368c0 26.5 21.5 48 48 48H64l0 72c0 13.3 10.7 24 24 24s24-10.7 24-24l0-72H384c-10.8-14.3-19.2-30.5-24.7-48H48L48 80H528v80.8c16.9 1.7 33.1 6 48 12.5V80c0-26.5-21.5-48-48-48H512l0-8c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 8H112l0-8c0-13.3-10.7-24-24-24S64 10.7 64 24zM640 320c0-47.4-25.7-88.8-64-110.9c-7.4-4.3-16 1.5-16 10V304c0 26.5-21.5 48-48 48s-48-21.5-48-48V219.1c0-8.5-8.6-14.3-16-10c-38.3 22.1-64 63.5-64 110.9c0 40.4 18.7 76.5 48 99.9V476c0 19.9 16.1 36 36 36h88c19.9 0 36-16.1 36-36V419.9c29.3-23.5 48-59.5 48-99.9zM512.3 192l-.3 0-.3 0h.7z"/></svg>',
    'icon-bills' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path d="M96 96V320c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM288 208a80 80 0 1 1 160 0 80 80 0 1 1 -160 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V360c0 66.3 53.7 120 120 120H520c13.3 0 24-10.7 24-24s-10.7-24-24-24H120c-39.8 0-72-32.2-72-72V120z"/></svg>',
    'icon-energy' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path d="M16 288L320 0 260.7 197.6 432 224 128 512l59.3-197.6L16 288z"/></svg>',

);
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container-fluid bg-grey">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6 offset-md-3 py-5 text-center">
                    <h2><?php the_field('heading'); ?></h2>
                    <p><?php the_field('text'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-4 mb-5 pb-5 d-none">

                <?php $image = get_field( 'image' );
                $size        = 'large'; // (thumbnail, medium, large, full or custom size)
                if ( $image ) {
                    echo wp_get_attachment_image( $image, $size, false, array( 'class' => 'mw-100 h-auto' ) );
                }

                ?>
            </div>

            <div class="col-lg-12">
                <div class="row mt-5">
                    <?php if (have_rows('service_boxes')):while (have_rows('service_boxes')) : the_row();
                        $chosenIcon = get_sub_field('choose_icon');
                        ?>
                        <div class="col-md-6 col-lg-3">

                            <div class="content d-flex flex-column service-box align-items-center text-center">
                                <div class="icon-container mb-3">
                                    <?php echo $icons[$chosenIcon]; ?>
                                </div>
                                <h3><?php the_sub_field('heading'); ?></h3>
                                <p><?php the_sub_field('text'); ?></p>
                                <?php if(get_sub_field('link')): ?>
                                <a href="#">Läs mer &raquo;</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>

                </div>
                <?php if( $button ): ?>
                    <a class="d-none btn btn-lg bg-blue text-white" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?> &raquo;</a>
                <?php endif; ?>
                <?php if( get_field('phone') ): ?>
                    <a href="tel:<?php the_field('phone'); ?>" class="d-none btn ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"/></svg>
                        <span class="ms-2"><?php the_field('phone'); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
