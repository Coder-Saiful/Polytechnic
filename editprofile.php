<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-5">

          <?php
            if(isset($_SESSION['update_profile_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_profile_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_profile_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Your Profile</div>
            <div class="card-body text-dark">
              <form action="editprofile_post.php" method="post">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" value="<?php echo $_SESSION['logged_in_user_id']; ?>" name="id">
                </div>
                <div class="form-group">
                  <label>Change Name</label>
                  <input type="text" class="form-control" value="<?php echo $_SESSION['logged_in_user_name']; ?>" name="name">
                </div>
                <div class="form-group">
                  <label>Change Email</label>
                  <input type="text" class="form-control" value="<?php echo $_SESSION['logged_in_user_email']; ?>" name="email">
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
