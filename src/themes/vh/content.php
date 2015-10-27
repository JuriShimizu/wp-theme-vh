<section class="hero">
    <div class="lay">
        <div class="container font-logo">
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
                <article>
                    <h3 class="title"><?php echo $page->post_title; ?></h3>
                    <div class="divider"></div>
                    <div class="pre"><?php echo $page->post_content; ?></div>
                </article>
            </div>
        </div>
    </div>
</section>
