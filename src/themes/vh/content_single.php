<section>
    <div class="container single">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="article-header">
                <?php the_title('<h2>', '</h2>'); ?>
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
</section>
