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
                <section class="information">
                    <h3><?php echo $page->post_title; ?></h3>
                    <div class="divider"></div>
                    <div class="body">
                        <?php echo $page->post_content; ?>
                    </div>
                </section>
                <div class="visible-xs divider-lg"></div>
            </div>

            <div class="col-sm-6">

                <section class="post">
                    <h3>院長ブログ</h3>
                    <div class="divider"></div>

                    <?php for ($i = 0; (have_posts() && $i < 3); $i++) : the_post(); ?>
                    <article>
                        <a href="/archives/<?php echo get_the_ID(); ?>" class="block">
                            <h4><?php the_title(); ?> <small><?php the_date(); ?></small></h4>
                            <div><?php echo strip_tags(get_the_content()); ?></div>
                        </a>
                    </article>
                    <?php endfor; ?>
                </section>

                <div class="divider-lg"></div>

                <section class="map">
                    <?php $page = get_post(get_page_by_path('access')); ?>
                    <h3><?php echo $page->post_title; ?></h3>
                    <div class="divider"></div>

                    <?php echo $page->post_content; ?>
                </section>

            </div>

        </div>
    </div>
</section>
