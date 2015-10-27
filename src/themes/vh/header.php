<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//mplus-fonts.sourceforge.jp/webfonts/mplus_webfonts.css" />
        <?php wp_head(); ?>
        <link rel="stylesheet" href="/wp-content/themes/vh/style.css">
    </head>

    <body <?php body_class(); ?>>

        <section class="hero">
            <div class="lay">

                <div class="container-fluid">
                    <header class="site-header">

                        <nav>
                            <div class="row">

                                <div class="col-sm-6">
                                    <h1><a href="/" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="text-right links">
                                        <?php $page = get_post(get_page_by_path('introduction')); ?>
                                        <a href="/<?php echo $page->post_name ?>"><?php echo $page->post_title ?></a>
                                        <?php $page = get_post(get_page_by_path('access')); ?>
                                        <a href="/<?php echo $page->post_name ?>"><?php echo $page->post_title ?></a>
                                    </div>
                                </div>

                            </div>
                        </nav>
                    </header>
                </div>

                <div class="typography">
                    <div class="container">
                        <?php if (is_single()): ?>
                        <?php the_title('<h2>', '</h2>'); ?>
                        <?php else: ?>
                        <h2>大切な動物たちを<br>元気にしてあげたい</h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="divider-lg"></div>


