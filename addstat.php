<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-5">

          <?php
            if(isset($_SESSION['insert_stat_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_stat_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['insert_stat_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add Your Statistics</div>
            <div class="card-body text-dark">
              <form action="addstat_post.php" method="post">
                <div class="form-group">
                  <label>Stat Name</label>
                  <input type="text" class="form-control" name="stat_name">
                </div>
                <div class="form-group">
                  <label>Stat Icon</label>
                  <input type="text" class="form-control" name="stat_icon">
                  <a href="https://fontawesome.com/v4.7/icons/">To see a awesome icon list please click here</a>
                </div>
                <div class="form-group">
                  <label>Stat Quantity</label>
                  <input type="number" class="form-control" name="stat_quantity">
                </div>
                <button type="submit" class="btn btn-primary">Add Statistics</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_stat_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_stat_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_stat_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_stat_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_stat_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_stat_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View All Statistics</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>Stat Name</th>
                  <th>Stat Icon</th>
                  <th>Stat Quantity</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_stat_data = "SELECT * FROM stats";
                  $get_all_stat_data_result = mysqli_query($database_connection, $get_all_stat_data);
                  foreach ($get_all_stat_data_result as $all_stat_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_stat_data['stat_name']; ?></td>
                      <td>
                        <i class="fa <?php echo $all_stat_data['stat_icon']; ?>" style="font-size:30px;"></i>
                      </td>
                      <td><?php echo $all_stat_data['stat_quantity']; ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editstat.php?stat_id=<?php echo $all_stat_data['id']; ?>" class="btn btn-info">Edit</a>
                          <a href="deletestat.php?stat_id=<?php echo $all_stat_data['id']; ?>" class="btn btn-danger">Delete</a>
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
