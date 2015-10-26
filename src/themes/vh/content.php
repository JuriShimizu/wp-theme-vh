<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <article id="post-<?php the_ID(); ?>">
                    <header class="article-header">
                        <?php the_title(sprintf('<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>'); ?>
                    </header>

                    <div class="divider"></div>

<?php
the_content(sprintf(the_title('', '', false )));

wp_link_pages([
    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
    'after'       => '</div>',
    'link_before' => '<span>',
    'link_after'  => '</span>',
    'pagelink'    => '<span>' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
    'separator'   => '<span>, </span>',
]);
?>

<footer class="article-footer">
    <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
</footer>
                </article>

            </div>
        </div>
    </div>
</section>
