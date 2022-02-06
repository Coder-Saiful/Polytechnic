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
            if(isset($_SESSION['insert_principal_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_principal_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['insert_principal_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add Principal Message Content</div>
            <div class="card-body text-dark">
              <form action="addpmessage_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Principal Name</label>
                  <input type="text" class="form-control" name="pname">
                </div>
                <div class="form-group">
                  <label>Principal Designation</label>
                  <input type="text" class="form-control" name="pdesignation">
                </div>
                <div class="form-group">
                  <label>Principal Institute</label>
                  <input type="text" class="form-control" name="pinstitute">
                </div>
                <div class="form-group">
                  <label>Principal Message</label>
                  <textarea rows="5" class="form-control" name="pmessage"></textarea>
                </div>
                <div class="form-group">
                  <label>Principal Image</label>
                  <input type="file" class="form-control" name="pimage">
                </div>
                <button type="submit" class="btn btn-primary">Add P. Message</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_principal_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_principal_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_principal_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_principal_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_principal_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_principal_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View Principal Message Content</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>P. Name</th>
                  <th>P. Designation</th>
                  <th>P. Institute</th>
                  <th>P. Message</th>
                  <th>P. Image</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_p_message_data = "SELECT * FROM pmessage ORDER BY id DESC";
                  $get_all_p_message_data_result = mysqli_query($database_connection, $get_all_p_message_data);
                  foreach ($get_all_p_message_data_result as $all_p_message_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_p_message_data['pname']; ?></td>
                      <td><?php echo $all_p_message_data['pdesignation']; ?></td>
                      <td><?php echo $all_p_message_data['pinstitute']; ?></td>
                      <td>
                        <p style="width:120px;height:120px;overflow:auto;margin-bottom:0;"><?php echo $all_p_message_data['pmessage']; ?></p>
                      </td>
                      <td>
                        <img src="uploads/p_image/<?php echo $all_p_message_data['pimage']; ?>" alt="" style="width:100px;">
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editpmessage.php?p_message_id=<?php echo $all_p_message_data['id']; ?>&p_image_name=<?php echo $all_p_message_data['pimage']; ?>" class="btn btn-info">Edit</a>
                          <a href="deletepmessage.php?p_message_id=<?php echo $all_p_message_data['id']; ?>&p_image_name=<?php echo $all_p_message_data['pimage']; ?>" class="btn btn-danger">Delete</a>
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
