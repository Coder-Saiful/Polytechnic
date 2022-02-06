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
            if(isset($_SESSION['insert_slider_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_slider_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['insert_slider_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add New Slider</div>
            <div class="card-body text-dark">
              <form action="addslider_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Slider Title</label>
                  <input type="text" class="form-control" name="slider_title">
                </div>
                <div class="form-group">
                  <label>Slider Image</label>
                  <input type="file" class="form-control" name="slider_image">
                </div>
                <button type="submit" class="btn btn-primary">Add Slider</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_slider_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_slider_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_slider_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_slider_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_slider_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_slider_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View All Sliders</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>Slider Title</th>
                  <th>Slider Image</th>
                  <th>Slider Status</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_slider_data = "SELECT * FROM sliders";
                  $get_all_slider_data_result = mysqli_query($database_connection, $get_all_slider_data);
                  foreach ($get_all_slider_data_result as $all_slider_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_slider_data['slider_title']; ?></td>
                      <td>
                        <img src="uploads/slider_image/<?php echo $all_slider_data['slider_image']; ?>" alt="Slider Image" style="width:150px;">
                      </td>
                      <td>
                        <?php
                          if($all_slider_data['slider_status'] == 1){
                            ?>
                            <a href="deactiveslider.php?slider_id=<?php echo $all_slider_data['id']; ?>" class="btn btn-danger">Deactive</a>
                            <?php
                          }else{
                            ?>
                            <a href="activeslider.php?slider_id=<?php echo $all_slider_data['id']; ?>" class="btn btn-info">Active</a>
                            <?php
                          }
                         ?>
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editslider.php?slider_id=<?php echo $all_slider_data['id']; ?>&slider_image_name=<?php echo $all_slider_data['slider_image']; ?>" class="btn btn-info">Edit</a>
                          <a href="deleteslider.php?slider_id=<?php echo $all_slider_data['id']; ?>&slider_image_name=<?php echo $all_slider_data['slider_image']; ?>" class="btn btn-danger">Delete</a>
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
