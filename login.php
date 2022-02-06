<?php
  session_start();
  require_once 'includes/header.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-5">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Login Form</div>
            <div class="card-body text-dark">
              <form action="login_post.php" method="post">
                <div class="form-group">
                  <label>User Email</label>
                  <input type="text" class="form-control" placeholder="Enter your email" name="user_email">
                  <?php
                    if(isset($_SESSION['err_email_password'])){
                      ?>
                      <span style="color:red;"><?php echo $_SESSION['err_email_password']; ?></span>
                      <?php
                      unset($_SESSION['err_email_password']);
                    }
                   ?>
                </div>
                <div class="form-group">
                  <label>User Password</label>
                  <input type="password" class="form-control" placeholder="Enter your password" name="user_password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="register.php" class="btn btn-success">Registration Here</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
