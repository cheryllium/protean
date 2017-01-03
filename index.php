<!DOCTYPE html>
<html>
    <head>
	<?php get_header(); ?>
    </head>
    <body>
	<?php get_sidebar(); ?>

	<main class="main">
	    <?php get_template_part('content', get_post_format() ); ?>
	</main>

	<?php get_footer(); ?>
    </body>
</html>
