<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap_ekspres.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style_blocks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="<?= get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/slick.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'exist'); ?></a>
        <header id="masthead" class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-right col-6 center">
                        <div class="site-branding">
                            <div class="logo">
                                <a href="<?= site_url(); ?>">
                                    <picture>
                                        <source srcset="<?= get_template_directory_uri() . "/images/logo.webp"; ?>"
                                            type="image/webp">
                                        <source srcset="<?= get_template_directory_uri() . "/images/logo.png"; ?>"
                                            type="image/png">
                                        <img class="" src="<?= get_template_directory_uri() . "/images/logo.png"; ?>"
                                            alt="icon">
                                    </picture>
                                </a>
                            </div>
                            <div class="stickyLogo">
                                <a href="<?= site_url(); ?>">
                                    <picture>
                                        <source
                                            srcset="<?= get_template_directory_uri() . "/images/stickyLogo.webp"; ?>"
                                            type="image/webp">
                                        <source srcset="<?= get_template_directory_uri() . "/images/stickyLogo.png"; ?>"
                                            type="image/png">
                                        <img class=""
                                            src="<?= get_template_directory_uri() . "/images/stickyLogo.png"; ?>"
                                            alt="icon">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <?php // require("partials/hamburger.php");
                        ?>
                    </div>
                    <div class="col-lg-4 col-6 center">
                        <?php require("partials/menu-standard.php"); ?>
                    </div>
                </div>
            </div>
        </header>
        <?php require("partials/menu-overlay.php"); ?>
        <div id="content" class="site-content">