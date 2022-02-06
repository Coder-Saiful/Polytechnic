<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-5">

          <?php
            if(isset($_SESSION['insert_about_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_about_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php

              unset($_SESSION['insert_about_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add Aboout Us Content</div>
            <div class="card-body text-dark">
              <form action="addabout_post.php" method="post">
                <div class="form-group">
                  <label>About Title</label>
                  <input type="text" class="form-control" name="about_title">
                </div>
                <div class="form-group">
                  <label>About Details</label>
                  <textarea rows="5" class="form-control" name="about_details"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add About</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_about_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_about_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_about_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_about_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_about_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_about_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View About Us Content</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>About Title</th>
                  <th>About Details</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_about_data = "SELECT * FROM about_us ORDER BY id DESC";
                  $get_all_about_data_result = mysqli_query($database_connection, $get_all_about_data);
                  foreach ($get_all_about_data_result as $all_about_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_about_data['about_title']; ?></td>
                      <td>
                        <textarea rows="5" class="form-control">
                          <?php echo $all_about_data['about_details']; ?>
                        </textarea>
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editabout.php?about_id=<?php echo $all_about_data['id']; ?>" class="btn btn-info">Edit</a>
                          <a href="deleteabout.php?about_id=<?php echo $all_about_data['id']; ?>" class="btn btn-danger">Delete</a>
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
