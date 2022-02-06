<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

<?php
 $notice_id = $_GET['notice_id'];
 $get_single_notice_data = "SELECT * FROM notices WHERE id = $notice_id";
 $get_single_notice_data_result = mysqli_query($database_connection, $get_single_notice_data);
 $after_assoc_notice_data = mysqli_fetch_assoc($get_single_notice_data_result);
?>

    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addnotice.php">Add Notice</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Notice</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Your Notice</div>
            <div class="card-body text-dark">
              <form action="editnotice_post.php" method="post">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc_notice_data['id']; ?>">
                </div>
                <div class="form-group">
                  <label>Notice Title</label>
                  <input type="text" class="form-control" name="notice_title" value="<?php echo $after_assoc_notice_data['notice_title']; ?>">
                </div>
                <div class="form-group">
                  <label>Notice Date</label>
                  <input type="date" class="form-control" name="notice_date" value="<?php echo $after_assoc_notice_data['notice_date']; ?>">
                </div>
                <div class="form-group">
                  <label>Notice Details</label>
                  <textarea rows="5" class="form-control" name="notice_details">
                    <?php echo $after_assoc_notice_data['notice_details']; ?>
                  </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Notice</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
