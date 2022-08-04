// Quick Add Post AJAX
var quickAddBtn = document.querySelector('#quick-add-button');

if( quickAddBtn ) {
    quickAddBtn.addEventListener("click", function(){
        //alert('clicked');
        var ourPostData = {
            "title" : "my",
            "content" : document.querySelector('.admin-quick-add [name="content"]').value,
            "excerpt" : "My Excerpt",
            "categories" : "Cat",
            "status": "publish"
        }

        var createPost = new XMLHttpRequest();

        createPost.open("POST", additionalData.siteURL + "/wp-json/wp/v2/posts");
        createPost.setRequestHeader('X-WP-Nonce', additionalData.nonce);
        createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        createPost.send(JSON.stringify(ourPostData));
        createPost.onreadystatechange = function() {
            if(createPost.readyState == 4) {
                if( createPost.status == 201 ) {
                    document.querySelector('.admin-quick-add [name="title"]').value = '';
                    document.querySelector('.admin-quick-add [name="content"]').value = '';
                } else {
                    alert('Error - Try again.');
                }
            }
        }
    });
}