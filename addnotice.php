<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-5">

          <?php
            if(isset($_SESSION['insert_notice_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_notice_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['insert_notice_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add New Notice</div>
            <div class="card-body text-dark">
              <form action="addnotice_post.php" method="post">
                <div class="form-group">
                  <label>Notice Title</label>
                  <input type="text" class="form-control" name="notice_title">
                </div>
                <div class="form-group">
                  <label>Notice Date</label>
                  <input type="date" class="form-control" name="notice_date">
                </div>
                <div class="form-group">
                  <label>Notice Details</label>
                  <textarea rows="5" class="form-control" name="notice_details"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Notice</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_notice_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_notice_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_notice_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_notice_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_notice_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_notice_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View All Notices</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>Notice Title</th>
                  <th>Notice Date</th>
                  <th>Notice Details</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_notice_data = "SELECT * FROM notices ORDER BY id DESC";
                  $get_all_notice_data_result = mysqli_query($database_connection, $get_all_notice_data);
                  foreach ($get_all_notice_data_result as $all_notice_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_notice_data['notice_title']; ?></td>
                      <td><?php echo $all_notice_data['notice_date']; ?></td>
                      <td>
                        <textarea rows="5" class="form-control">
                          <?php echo $all_notice_data['notice_details']; ?>
                        </textarea>
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editnotice.php?notice_id=<?php echo $all_notice_data['id']; ?>" class="btn btn-info">Edit</a>
                          <a href="deletenotice.php?notice_id=<?php echo $all_notice_data['id']; ?>" class="btn btn-danger">Delete</a>
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
