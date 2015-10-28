<?php get_header(); ?>

<?php the_post(); ?>

<div class="divider-lg"></div>

<section>
    <div class="container container-sm">
        <article>
            <header>
                <h2>
                    <small><?php echo the_date(); ?></small>
                    <?php the_title(); ?>
                </h2>
            </header>

            <div class="divider-lg"></div>

            <div class="body">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>
