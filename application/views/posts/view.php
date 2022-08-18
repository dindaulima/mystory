<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['idpost']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>


<!--
View ini untu menampilkan halaman atau  per article
Pada dasarnya digunakan untuk mengedit atau menghapus post

***
Langkah2 membuat:
1. Buat tombol di view.php
2. Buat fungsi di Post(Controller).php
3. Buat file (untuk input bla bla bla) di view/posts beri nama sesuai kebutuhan misal edit.php 
-Untuk fungsi delete tidak perlu membuat file karena tidak membutuhkan input
4. Buat fungsi di Post sesuai dengan yang dicantumkan di file yang baru dibuat di bagian 'form_open' (untuk input detelah submit button)
5. Buat new route
6. Buat fungsi di post_model.php

-->