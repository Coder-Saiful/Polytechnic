<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

<?php
 $p_message_id = $_GET['p_message_id'];
 $get_single_p_message_data = "SELECT * FROM pmessage WHERE id = $p_message_id";
 $get_single_p_message_data_result = mysqli_query($database_connection, $get_single_p_message_data);
 $after_assoc_p_message_data = mysqli_fetch_assoc($get_single_p_message_data_result);
?>

    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addpmessage.php">Add P. Message</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit P. Message</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Principal Message Content</div>
            <div class="card-body text-dark">
              <form action="editpmessage_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_p_message_id" value="<?php echo $_GET['p_message_id']; ?>">
                </div>
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_p_image_name" value="<?php echo $_GET['p_image_name']; ?>">
                </div>
                <div class="form-group">
                  <label>Principal Name</label>
                  <input type="text" class="form-control" name="pname" value="<?php echo $after_assoc_p_message_data['pname']; ?>">
                </div>
                <div class="form-group">
                  <label>Principal Designation</label>
                  <input type="text" class="form-control" name="pdesignation" value="<?php echo $after_assoc_p_message_data['pdesignation']; ?>">
                </div>
                <div class="form-group">
                  <label>Principal Institute</label>
                  <input type="text" class="form-control" name="pinstitute" value="<?php echo $after_assoc_p_message_data['pinstitute']; ?>">
                </div>
                <div class="form-group">
                  <label>Principal Message</label>
                  <textarea rows="5" class="form-control" name="pmessage">
                    <?php echo $after_assoc_p_message_data['pmessage']; ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Principal Image</label>
                  <input type="file" class="form-control" name="pimage">
                </div>
                <button type="submit" class="btn btn-primary">Edit P. Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
