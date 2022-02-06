<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container mt-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addgallery.php">Add Gallery</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Gallery</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Your Gallery</div>
            <div class="card-body text-dark">
              <form action="editgallery_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_gallery_id" value="<?php echo $_GET['gallery_id']; ?>">
                </div>
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_gallery_image_nmae" value="<?php echo $_GET['gallery_image_name']; ?>">
                </div>
                <div class="form-group">
                  <label>Category Name</label>
                  <select class="form-control" name="category_name">
                    <option value="">--Select One--</option>
                    <option value="man">Man's</option>
                    <option value="woman">Woman's</option>
                    <option value="children">Children</option>
                    <option value="electronics">Electronics</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Gallery Image</label>
                  <input type="file" class="form-control" name="gallery_image">
                </div>
                <button type="submit" class="btn btn-primary">Edit Gallery</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
