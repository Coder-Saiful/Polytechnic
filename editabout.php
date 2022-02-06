<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

 <?php
   $about_id = $_GET['about_id'];
   $get_single_about_data = "SELECT * FROM about_us WHERE id = $about_id";
   $get_single_about_data_result = mysqli_query($database_connection, $get_single_about_data);
   $after_assoc_about_data = mysqli_fetch_assoc($get_single_about_data_result);
  ?>

    <div class="container mt-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addabout.php">Add About</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit About</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Aboout Us Content</div>
            <div class="card-body text-dark">
              <form action="editabout_post.php" method="post">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc_about_data['id']; ?>">
                </div>
                <div class="form-group">
                  <label>About Title</label>
                  <input type="text" class="form-control" name="about_title" value="<?php echo $after_assoc_about_data['about_title']; ?>">
                </div>
                <div class="form-group">
                  <label>About Details</label>
                  <textarea rows="5" class="form-control" name="about_details">
                    <?php echo $after_assoc_about_data['about_details']; ?>
                  </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit About</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
