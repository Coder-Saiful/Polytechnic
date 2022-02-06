<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-5">

          <?php
            if(isset($_SESSION['insert_departments_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_departments_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['insert_departments_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add Your Departments</div>
            <div class="card-body text-dark">
              <form action="adddepartments_post.php" method="post">
                <div class="form-group">
                  <label>Department Name</label>
                  <input type="text" class="form-control" name="dept_name">
                </div>
                <div class="form-group">
                  <label>Department Icon</label>
                  <input type="text" class="form-control" name="dept_icon">
                  <a href="https://fontawesome.com/v4.7/icons/">To see a awesome icon list please click here</a>
                </div>
                <div class="form-group">
                  <label>Feature One</label>
                  <input type="text" class="form-control" name="feature_one">
                </div>
                <div class="form-group">
                  <label>Feature Two</label>
                  <input type="text" class="form-control" name="feature_two">
                </div>
                <div class="form-group">
                  <label>Feature Three</label>
                  <input type="text" class="form-control" name="feature_three">
                </div>
                <button type="submit" class="btn btn-primary">Add Departments</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_departments_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_departments_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_departments_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_departments_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_departments_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_departments_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View All Departments</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>Dept. Name</th>
                  <th>Dept. Icon</th>
                  <th>Feature One</th>
                  <th>Feature Two</th>
                  <th>Feature Three</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_departments_data = "SELECT * FROM departments";
                  $get_all_departments_data_result = mysqli_query($database_connection, $get_all_departments_data);
                  foreach ($get_all_departments_data_result as $all_departments_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_departments_data['dept_name']; ?></td>
                      <td>
                        <i class="fa <?php echo $all_departments_data['dept_icon']; ?>" style="font-size:30px;"></i>
                      </td>
                      <td><?php echo $all_departments_data['feature_one']; ?></td>
                      <td><?php echo $all_departments_data['feature_two']; ?></td>
                      <td><?php echo $all_departments_data['feature_three']; ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editdepartments.php?departments_id=<?php echo $all_departments_data['id']; ?>" class="btn btn-info">Edit</a>
                          <a href="deletedepartments.php?departments_id=<?php echo $all_departments_data['id']; ?>" class="btn btn-danger">Delete</a>
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
