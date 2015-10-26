<?php get_header(); ?>

<section class="hero">
    <div class="lay">
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

        <?php if (is_single()): ?>
        <div class="container-fluid font-logo header">
            <?php the_title('<h2>', '</h2>'); ?>
        </div>
        <?php else: ?>
        <div class="container text-center font-logo header">
            <h2>大切な動物たちを<br>元気にしてあげたい</h2>
        </div>
        <?php endif; ?>
    </div>
</section>

<div class="divider-lg"></div>

<main class="site-body">
<?php if (have_posts()): ?>

<?php if (is_home() && ! is_front_page()): ?>
<header class="post-header">
    <h1><?php single_post_title(); ?></h1>
</header>
<?php endif; ?>

<?php
for ($i = 0; have_posts(); $i++) {
    the_post();
    if (is_single()) {
        get_template_part( 'content_single', get_post_format() );
    } else {
        get_template_part( 'content', get_post_format() );
    }
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
