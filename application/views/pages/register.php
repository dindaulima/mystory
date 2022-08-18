<h>Welcome to My Story</h>
<!-- <h2><?= $title; ?></h2> -->

<?php echo validation_errors(); ?>
<div class="form-group">
  <p>Sudah punya akun? 
    <b>
      <a href="<?php echo base_url(); ?>posts/login">Login</a>
    </b>
  </p>
</div>
<?php echo form_open('posts/register'); ?>
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Name">
  </div>
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Add Username">
  </div>
    <div class="form-group">
    <label>Email Address</label>
    <input type="text" class="form-control" name="email" placeholder="Add Email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Add Password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="repassword" placeholder="Confirm Password">
  </div>
  <button type="submit" class="btn btn-info">Register</button>
</form>