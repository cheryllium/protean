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
	<?php the_date(); ?>
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
	<?php the_content(); ?>
    </div>
    <div class="blog-post-footer">
	<hr />
	<?php the_date(); ?>
    </div>
</div>
<?php endwhile; endif; endif; ?>
