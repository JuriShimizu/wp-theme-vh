
<div class="divider-lg"></div>

<section>
    <div class="container container-sm">
        <article>
            <header>
                <h2>
                    <?php the_title(); ?>
                    <?php if (is_single()): ?>
                    <small><?php echo the_date(); ?></small>
                    <?php endif; ?>
                </h2>
            </header>

            <div class="divider-lg"></div>

            <?php the_content(); ?>
        </article>
    </div>
</section>
