<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-5">

          <?php
            if(isset($_SESSION['new_confirm_pass_not_match'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['new_confirm_pass_not_match']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['new_confirm_pass_not_match']);
            }
           ?>

          <?php
            if(isset($_SESSION['wrong_old_password'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['wrong_old_password']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['wrong_old_password']);
            }
           ?>

          <?php
            if(isset($_SESSION['update_password_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_password_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_password_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Change Your Password</div>
            <div class="card-body text-dark">
              <form action="changepass_post.php" method="post">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['logged_in_user_id']; ?>">
                </div>
                <div class="form-group">
                  <label>Old Password</label>
                  <input type="password" class="form-control" name="old_password">
                </div>
                <div class="form-group">
                  <label>New Password</label>
                  <input type="password" class="form-control" name="new_password">
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
