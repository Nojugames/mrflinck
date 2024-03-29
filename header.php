<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <!--<script src="https://kit.fontawesome.com/c5ba4af5bc.js" crossorigin="anonymous"></script>-->
	<?php wp_head(); ?>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/photoswipe/photoswipe.esm.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/photoswipe/photoswipe-lightbox.esm.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/photoswipe/photoswipe.css">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/op-laskuri/op-calc-widget.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/op-laskuri/op-calc-widget.css">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">

        <?php require_once('elements/top-navbar.php'); ?>
        <?php require_once('elements/mrflinck-navbar.php'); ?>
    </header>
    <div id="container">