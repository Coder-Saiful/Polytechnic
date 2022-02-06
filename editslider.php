<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container mt-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addslider.php">Add Slider</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Your Slider</div>
            <div class="card-body text-dark">
              <form action="editslider_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_slider_id" value="<?php echo $_GET['slider_id']; ?>">
                </div>
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_slider_image_name" value="<?php echo $_GET['slider_image_name']; ?>">
                </div>
                <div class="form-group">
                  <label>Slider Image</label>
                  <input type="file" class="form-control" name="slider_image">
                </div>
                <button type="submit" class="btn btn-primary">Edit Slider</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
