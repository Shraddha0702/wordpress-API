<?php
/**
 * Template name: API Template
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	?>
	<style>
		.admin-quick-add {
	background-color: #DDD;
	padding: 15px;
	margin-bottom: 15px;
}

.admin-quick-add input,
.admin-quick-add textarea {
	width: 100%;
	border: none;
	padding: 10px;
	margin: 0 0 10px 0;
	box-sizing: border-box;
}
	</style>
	<div class="admin-quick-add">
  <h3>Quick Add Post</h3>
  <input type="text" name="title" placeholder="Title">
  <textarea name="content" placeholder="Content"></textarea>
  <button id="quick-add-button">Create Post</button>
	</div>

	<?php	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
