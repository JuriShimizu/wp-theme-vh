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

        <div class="container-fluid">
            <header class="site-header">

                <nav>
                    <h1><a href="/" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php $page = get_post(get_page_by_path('access')); ?>
                    <p><?php echo get_bloginfo( 'description', 'display' ); ?> <a href="/<?php echo $page->post_name ?>"><?php echo $page->post_title; ?></a></p>
                </nav>

            </header>
        </div>

        <main class="site-body">
