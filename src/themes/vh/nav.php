<div class="container-fluid">
    <nav class="menu">
        <div class="row row-condensed">
            <div class="col-sm-2 col-xs-6">
                <a href="/" class="block top">
                    <span class="icon"></span>
                </a>
            </div>
            <?php foreach (['medicalpolicy', 'medicaltreatment', 'about', 'staff','hotel'] as $el): ?>
            <div class="col-sm-2 col-xs-6">
                <?php $page = get_post(get_page_by_path($el)); ?>
                <a href="/<?php echo $page->post_name ?>" class="block <?php echo $el; ?>">
                    <span class="icon"></span>
                    <h3><?php echo $page->post_title; ?></h3>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </nav>
</div>
