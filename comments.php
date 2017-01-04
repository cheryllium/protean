<?php if(is_page()) { } else { ?>

<div class="blog-post comments">
<h3 class="comments-list-title">Comments</h3>
<?php
if(have_comments()) {
    wp_list_comments();
?>
<div class="comments-pagination">
    <?php paginate_comments_links(); ?>
</div>
<?php
} else {
?>
<p class="comment-padding">No comments yet!</p>
<?php
}
?>
</div>

<?php } ?>
