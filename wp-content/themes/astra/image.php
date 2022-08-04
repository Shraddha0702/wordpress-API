<?php
/**
 * Template name: Image Template
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
    <div id="primary" class="content-area" style=" width: 850px;margin: -73px 215px 0px;" >


<h2>How to upload post featured image in wordpress from the Frontend</h2>
<form method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="title">Post Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>


  <div class="form-group">
    <label for="pwd">Post Description :</label>
    <textarea class="form-control"  name="description"></textarea>
  </div>

  <div class="form-group">
    <label for="title">Post Featured Image:</label>
    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
  </div>



  <BR>
  <button type="submit" class="btn btn-default">Submit</button>
</form>




</div>

	<?php
	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
