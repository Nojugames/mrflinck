<?php get_header(); ?>

    <div class="block-hero-subpage container-fluid p-0">
        <div style="background-position:center; background-size:cover;background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID)) ?>')">
            <div class="d-flex justify-content-center align-items-center flex-column py-5 hero-info-container"
                 style="min-height: 400px; ">
                <?php
                //if ( function_exists('yoast_breadcrumb') ) {
                //    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                //}
                ?>
                <h1 class="text-white" style="font-size:60px;"><?php the_title(); ?></h1>

            </div>
        </div>
    </div>
    <main id="content" role="main" class="container-xl">
        <div class="row my-5">
            <div class="col-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>