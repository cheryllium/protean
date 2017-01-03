<meta charset="<?php bloginfo('charset');?>" />
<meta name="viewport" content="width-device-width, initial-scale=1" />
<?php
if(!function_exists('_wp_render_title_tag')) {
    function theme_slug_render_title() {
?>
<title><?php wp_title('|', true, 'right'); ?></title>
<?php
    }
    add_action('wp_head', 'theme_slug_render_title');
}
?>
<?php wp_head(); ?>
