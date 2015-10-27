<?php get_header(); ?>

<main class="site-body">
<?php if (have_posts()): ?>

<?php if (is_home() && ! is_front_page()): ?>
<header class="post-header">
    <h1><?php single_post_title(); ?></h1>
</header>
<?php endif; ?>

<?php
if (is_single()) {
    get_template_part( 'content_single', get_post_format() );
} else {
    get_template_part( 'content', get_post_format() );
}

the_posts_pagination([
    'prev_text'          => __( 'Previous page', 'vh' ),
    'next_text'          => __( 'Next page', 'vh' ),
    'before_page_number' => __( 'Page', 'vh' ),
]);
?>

<?php
else:
get_template_part( 'content', 'none' );
endif;
?>
</main>

<?php get_footer(); ?>
