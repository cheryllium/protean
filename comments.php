<div class="blog-post comments">
<h3 class="comments-list-title">Comments</h3>
<?php
if(have_comments()) {
    wp_list_comments();
?>
    <div class="pagination">pagination goes here!</div>
<?php
} else {
?>
<p class="comment-body">No comments yet!</p>
<?php
}
?>
</div>
