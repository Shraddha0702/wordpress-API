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
	<form method="post" enctype="multipart/form-data">
	<div class="admin-quick-add">
		<form action=""></form>
  <h3>Quick Add Post</h3>
  <input type="text" name="title" placeholder="Title" id="title">
  <textarea name="content" placeholder="Add HTML Content"></textarea>
  <br>
  <input type="text" name="excerpt" placeholder="Excerpt" id="title">
  
  <br>
  <div class="form-group">
    <label for="title">Post Featured Image:</label>
    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
  </div>
  <br>
  <br>
  <select name="category_list" id="category_list"> 
 <option value="">Please Select</option> 
 <?php 
 
  $categories = get_categories(); 
  foreach ($categories as $category) {
	
    $option = '<option value="'.get_cat_ID($category->name).'">';
    $option .= $category->cat_name;
    $option .= '</option>';
    echo $option;
  }
 ?>
</select>
  
  <button id="quick-add-button">Create Post</button>
	</div>
	</form>
<?php
add_filter('rest_prepare_attachment', 'attach_media_to_post',10,3); 
function attach_media_to_post($response, $post, $request) {
    if($request->get_method()!='POST'){
        return $response;
    }       
    $parameters = $request->get_params();       
    if(isset($parameters['thumbnail'])){
        set_post_thumbnail($parameters['thumbnail'],$post->ID);
    }
    return $response;
}
	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
