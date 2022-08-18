
<h>Welcome to My Story</h>

<!-- <h2>LOGIN</h2> -->
<br>

<?php echo validation_errors(); ?>
<div class="form-group">
  <p>Belum punya akun? 
    <b>
      <a href="<?php echo base_url(); ?>posts/register">Register</a>
    </b>
  </p>
</div>
<?php echo form_open('posts/login'); ?>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Add Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Add Password">
  </div>
  <button type="submit" class="btn btn-info">Login</button>
</form>