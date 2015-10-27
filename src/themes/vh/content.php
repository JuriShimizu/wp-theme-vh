<section class="hero">
    <div class="typography">
        <div class="container">
            <h2>大切な動物たちを<br>元気にしてあげたい</h2>
        </div>
    </div>
</section>

<div class="divider-lg"></div>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <?php $page = get_post(get_page_by_path('information')); ?>
                <article class="information">
                    <h3><?php echo $page->post_title; ?></h3>
                    <div class="divider-lg"></div>
                    <div class="pre"><?php echo $page->post_content; ?></div>
                </article>
                <div class="divider"></div>
            </div>

            <div class="col-sm-6">

                <section class="post">
                    <h3>院長ブログ</h3>

                    <?php while ( have_posts() ) : the_post(); ?>

                    <a href="<?php echo esc_url(get_permalink()) ?>" class="block">
                        <article>
                            <h4><?php the_title(); ?> <small><?php the_date(); ?></small></h4>
                            <?php the_content(sprintf(the_title('', '', false ))); ?>
                        </article>
                    </a>

                    <?php endwhile; ?>

                </section>

            </div>

        </div>
    </div>
</section>
