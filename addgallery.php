<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-5">

          <?php
            if(isset($_SESSION['invalid_image_format'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['invalid_image_format']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['invalid_image_format']);
            }
           ?>

          <?php
            if(isset($_SESSION['large_image_file'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['large_image_file']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['large_image_file']);
            }
           ?>

          <?php
            if(isset($_SESSION['insert_gallery_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_gallery_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['insert_gallery_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add New Gallery</div>
            <div class="card-body text-dark">
              <form action="addgallery_post.php" method="post" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-primary">Add Gallery</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_gallery_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_gallery_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_gallery_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_gallery_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_gallery_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_gallery_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View All Gallery Content</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>Category Name</th>
                  <th>Gallery Image</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_gallery_data = "SELECT * FROM galleries";
                  $get_all_gallery_data_result = mysqli_query($database_connection, $get_all_gallery_data);
                  foreach ($get_all_gallery_data_result as $all_gallery_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_gallery_data['category_name']; ?></td>
                      <td>
                        <img src="uploads/gallery_image/<?php echo $all_gallery_data['gallery_image']; ?>" alt="Slider Image" style="width:150px;">
                      </td>
                      <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editgallery.php?gallery_id=<?php echo $all_gallery_data['id']; ?>&gallery_image_name=<?php echo $all_gallery_data['gallery_image']; ?>" class="btn btn-info">Edit</a>
                          <a href="deletegallery.php?gallery_id=<?php echo $all_gallery_data['id']; ?>&gallery_image_name=<?php echo $all_gallery_data['gallery_image']; ?>" class="btn btn-danger">Delete</a>
                        </div>
                      </td>
                    </tr>
                    <?php
                  }

                 ?>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
