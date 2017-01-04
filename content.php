<?php if(is_singular()):?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="blog-post single">
    <div class="blog-post-title">
	<a href="<?php echo get_permalink(); ?>">
	    <?php the_title(); ?>
	</a>
    </div>
    <div class="blog-post-content">
	<?php the_content(); ?>
    </div>
    <div class="blog-post-footer">
	<hr />
	<?php if(!is_page()) { ?>
	    <a href="<?php echo get_permalink(); ?>">
		<?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?>
	    </a>
	| <?php the_date(); ?>
	<?php } ?>
    </div>
</div>

    <?php if(comments_open() || get_comments_number()): ?>
<div class="blog-post comments">
	    <div class="blog-post-comment-form">
		<?php
		$comments_args = array(
		    'comment_notes_before' => '',
		    'comment_notes_after' => '',
		    'label_submit' => 'Submit Response',
		    'title_reply' => 'Leave a Comment',
		);

		comment_form($comments_args);

		?>
	    </div>
    <?php endif; ?>

</div>

<?php comments_template('', true); ?>

<?php endwhile; endif; ?>

<?php else: ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="blog-post">
    <div class="blog-post-title">
	<a href="<?php echo get_permalink(); ?>">
	    <?php the_title(); ?>
	</a>
    </div>
    <div class="blog-post-content">
	<?php the_content("(Keep Reading...)", FALSE); ?>
    </div>
    <div class="blog-post-footer">
	<hr />
	<?php if(!is_page()) { ?>
	    <a href="<?php echo get_permalink(); ?>">
		<?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?>
	    </a>
	| <?php the_date(); ?>
	<?php } ?>
    </div>
</div>
<?php endwhile; ?>

<?php
the_posts_pagination(array('mid_size' => 4,
			   'prev_text' => __('Page--', 'textdomain'),
			   'next_text' => __('Page++', 'textdomain'),
));
?>

<?php  endif; endif; ?>
