<navbar class="sidebar">
    <a href="<?php echo get_home_url(); ?>" class="logo">
	<img src="<?php echo get_template_directory_uri() ?>/imgs/logo_transparent.svg" alt="cheryllium" />
	<div class="title">cheryllium</div>
    </a>

    <?php wp_list_pages('title_li=0'); ?>
</navbar>
