
<footer class="site-footer">

    <div class="container-fluid">
        <div class="links">
            <?php $page = get_post(get_page_by_path('introduction')); ?>
            <a href="/<?php echo get_permalink($page); ?>"><?php echo $page->post_title ?></a>
            <?php $page = get_post(get_page_by_path('about')); ?>
            <a href="/<?php echo get_permalink($page); ?>"><?php echo $page->post_title ?></a>
            <?php $page = get_post(get_page_by_path('access')); ?>
            <a href="/<?php echo get_permalink($page); ?>"><?php echo $page->post_title ?></a>
        </div>
    </div>

    <div class="text-center copy">
        <span class="font-logo">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span>
    </div>

    <div class="wp-footer">
        <?php wp_footer(); ?>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>
