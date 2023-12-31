<?php

$categoryName = $obj->display_category();

if (isset($_POST['add_posts'])) {
    $msg = $obj->add_post($_POST);
}

?>


<h2>Add Post Page</h2>
<?php if (isset($msg)) {
    echo $msg;
} ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="mb-1" for="post_title">Post Title</label>
        <input name="post_title" class="form-control py-4" id="post_title" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="post_content" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_img">Upload Thumbnail</label><br>
        <input name="post_img" class=" py-4" id="post_img" type="file" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_category">Sclect Post Category</label>
        <select class="form-control" name="post_category" id="post_category">
            <?php while ($category = mysqli_fetch_assoc($categoryName)) { ?>
                <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['cat_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_summery">Post Summery</label>
        <input name="post_summery" class="form-control py-4" id="post_summery" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_tag">Post Tags</label>
        <input name="post_tag" class="form-control py-4" id="post_tag" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_status">Posts Status</label>
        <select class="form-control" name="post_status" id="post_status">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>

    <input name="add_posts" type="submit" value="Add Post" class="form-control btn btn-block btn-primary">
</form>