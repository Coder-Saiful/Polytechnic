<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

 <?php
    $get_settings_data = "SELECT * FROM settings WHERE id = 1";
    $get_settings_data_result = mysqli_query($database_connection, $get_settings_data);
    $after_assoc_settings_data = mysqli_fetch_assoc($get_settings_data_result);
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-5">

          <?php
            if(isset($_SESSION['update_settings_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_settings_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_settings_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Update General Settings</div>
            <div class="card-body text-dark">
              <form action="settings_post.php" method="post">
                <div class="form-group">
                  <label>Institute Name</label>
                  <input type="text" class="form-control" name="institute_name" value="<?php echo $after_assoc_settings_data['institute_name']; ?>">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" name="phone" value="<?php echo $after_assoc_settings_data['phone']; ?>">
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $after_assoc_settings_data['email']; ?>">
                </div>
                <div class="form-group">
                  <label>Facebook Link</label>
                  <input type="text" class="form-control" name="facebook" value="<?php echo $after_assoc_settings_data['facebook']; ?>">
                </div>
                <div class="form-group">
                  <label>Twitter Link</label>
                  <input type="text" class="form-control" name="twitter" value="<?php echo $after_assoc_settings_data['twitter']; ?>">
                </div>
                <div class="form-group">
                  <label>Google Plus Link</label>
                  <input type="text" class="form-control" name="g_plus" value="<?php echo $after_assoc_settings_data['g_plus']; ?>">
                </div>
                <div class="form-group">
                  <label>Instagram Link</label>
                  <input type="text" class="form-control" name="instagram" value="<?php echo $after_assoc_settings_data['instagram']; ?>">
                </div>
                <div class="form-group">
                  <label>Institute Short Description</label>
                  <textarea rows="5" class="form-control" name="institute_short_desc">
                    <?php echo $after_assoc_settings_data['institute_short_desc']; ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Institute Address</label>
                  <textarea rows="5" class="form-control" name="institute_address">
                    <?php echo $after_assoc_settings_data['institute_address']; ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Google Map</label>
                  <textarea rows="5" class="form-control" name="g_map">
                    <?php echo $after_assoc_settings_data['g_map']; ?>
                  </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Settings</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
