<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="idpost" value="<?php echo $post['idpost']; ?>"
	>
  <div class="form-group">
    <label>Title</label>
    <input type="textarea" class="form-control" name="title" placeholder= "Add Title" value="<?php echo $post['title']; ?>" >
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>