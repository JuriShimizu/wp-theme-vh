<?php get_header(); ?>

<main class="site-body">

<?php
if (have_posts()) {
    if (is_front_page()) {
        get_template_part( 'content', get_post_format() );
    } else {
        the_post();
        get_template_part( 'content_single', get_post_format() );
    }
} else {
    get_template_part( 'content', 'none' );
}
?>

</main>

<div class="divider-lg"></div>

<?php get_footer(); ?>
