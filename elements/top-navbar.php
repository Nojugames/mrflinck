<nav class="top-navbar">
    <div class="container-xl">

        <div class="d-flex flex-row justify-content-between align-items-center pe-2">
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

            if ( has_custom_logo() ) {
                echo '<a  class="navbar-brand" href="' . esc_url( home_url( '/' ) ) . '"><img class="" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
            } else {
                echo '<span>' . get_bloginfo( 'name' ) . '</span>';
            }
            ?>
            <div class="d-flex align-items-center">
                <ul class="lang-select">

                    <?php
                    $pll_args = array(
                        'hide_current' => 1,
                    );
                    pll_the_languages($pll_args); ?>
                </ul>
                <p class="d-none d-md-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"></path></svg>
                    +358 40 834 8504
                </p>
            </div>
        </div>
    </div>
</nav>