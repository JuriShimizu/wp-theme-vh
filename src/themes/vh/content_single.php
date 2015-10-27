
<div class="divider-lg"></div>

<section>
    <div class="container container-sm">
        <article>
            <header>
                <h2>
                    <?php if (is_single()): ?>
                    <small><?php echo the_date(); ?></small>
                    <?php endif; ?>
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
