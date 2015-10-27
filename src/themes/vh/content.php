<section>
    <div class="container">
        <div class="row row-condensed">

            <div class="col-sm-6">
                <?php $page = get_post(get_page_by_path('information')); ?>
                <article class="information">
                    <h3><?php echo $page->post_title; ?></h3>
                    <div class="divider"></div>
                    <div class="pre"><?php echo $page->post_content; ?></div>
                </article>
                <div class="divider"></div>
            </div>

            <div class="col-sm-6">
                <div class="row row-condensed">

                    <?php foreach (['about', 'introduction', 'examination', 'pricing', 'trimming', 'hotel'] as $el): ?>
                    <div class="col-xs-6">
                        <?php $page = get_post(get_page_by_path($el)); ?>
                        <a href="/<?php echo $page->post_name ?>" class="text-center block">
                            <article class="sm <?php echo $el; ?>">
                                <h3><?php echo $page->post_title; ?></h3>
                            </article>
                        </a>
                        <div class="divider"></div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</section>
