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

        <header class="site-header">
            <div class="container-fluid">

                <nav>
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="font-logo">
                                <a href="/" rel="home"><?php bloginfo( 'name' ); ?></a>
                            </h1>
                            <?php $description = get_bloginfo( 'description', 'display' ); if ( $description || is_customize_preview() ) : ?>
                            <p class="font-logo"><?php echo $description; ?></p>
                            <?php endif; ?>

                        </div>
                        <div class="col-sm-6">
                            <div class="text-right links font-lg">
                                <a href="/about">当院について</a>
                                <a href="/access">アクセス</a>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </header>
