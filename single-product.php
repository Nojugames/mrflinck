<?php get_header(); ?>
<?php
// the query
$currentProductId = get_the_ID();
 ?>


    <main id="content" role="main" class="container-xl">
        <div class="row my-5">
            <div class="col-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </main>

<?php $args = array(
    'post_type' => 'product',
    'orderby'        => 'rand',
    'posts_per_page' => 4,
    'post_not_in' => $currentProductId
);
$query = new WP_Query( $args ); ?>

    <div id="" class="container-fluid py-5" style="background-color:#f8f8f8;">
        <div class="container">
            <div class="text-center">
                <h2><?php echo pll__('Våra andra produkter'); ?></h2>
                <p><?php echo pll__('Vi säljer och installerar högklassiga Wilfa luftvärmepumpar – den enda tillverkaren på marknaden med 7 års garanti.'); ?></p>
            </div>
        </div>
    <?php if ($query->have_posts()) : ?>
    <div class="container">
        <div class="row">
        <?php while ($query->have_posts()) : $query->the_post();
                $productPrice = get_field('pris');
                ?>
            <div class="col-md-6 col-lg-3 product-card">
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
    </div>
    <?php endif; ?>
<?php get_footer(); ?>