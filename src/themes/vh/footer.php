</main>

<div class="divider-lg"></div>

<footer class="site-footer">
    <div class="container-fluid">
        <hr>
    </div>

    <div class="hidden-xs container-fluid">
        <div class="links">
            <?php foreach (['medicalpolicy', 'medicaltreatment', 'about', 'staff','hotel'] as $el): ?>
            <?php $page = get_post(get_page_by_path($el)); ?>
            <a href="/<?php echo $page->post_name ?>"><?php echo $page->post_title ?></a>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="text-center copy">
        <span class="font-logo">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span>
    </div>

    <div class="wp-footer">
        <?php wp_footer(); ?>
    </div>

</footer>

<script src="/wp-content/themes/vh/vendor/jquery/1.11.3/jquery-1.11.3.min.js"></script>
<script src="/wp-content/themes/vh/vendor/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
