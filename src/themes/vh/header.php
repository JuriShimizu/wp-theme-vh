<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo( 'name' ); ?> <?php echo get_bloginfo( 'description', 'display' ); ?></title>

        <link rel="stylesheet" href="/wp-content/themes/vh/vendor/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="/wp-content/themes/vh/style.css">
    </head>

    <body <?php body_class(); ?>>

        <header class="site-header">
            <div class="container-fluid">

                <nav>
                    <div class="row">

                        <div class="col-md-6">
                            <h1><a href="/" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
                        </div>

                        <div class="col-md-6">
                            <div class="links">
                                <div class="row row-condensed">
                                    <?php foreach (['introduction', 'about', 'examination', 'pricing', 'trimming', 'hotel'] as $el): ?>
                                    <div class="col-sm-2 col-xs-4">
                                        <?php $page = get_post(get_page_by_path($el)); ?>
                                        <a href="/<?php echo $page->post_name ?>" class="text-center block">
                                            <div class="link <?php echo $el; ?>">
                                                <div class="icon"></div>
                                                <div class="divider-sm"></div>
                                                <h3><?php echo $page->post_title; ?></h3>
                                            </div>
                                        </a>
                                        <div class="divider"></div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>

        </header>

        <main class="site-body">
