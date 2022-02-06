<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

 <?php
  $departments_id = $_GET['departments_id'];
  $get_single_departments_data = "SELECT * FROM departments WHERE id = $departments_id";
  $get_single_departments_data_result = mysqli_query($database_connection, $get_single_departments_data);
  $after_assoc_departments_data = mysqli_fetch_assoc($get_single_departments_data_result);
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
            <div class="card-header bg-primary">Edit Your Departments</div>
            <div class="card-body text-dark">
              <form action="editdepartments_post.php" method="post">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc_departments_data['id']; ?>">
                </div>
                <div class="form-group">
                  <label>Department Name</label>
                  <input type="text" class="form-control" name="dept_name" value="<?php echo $after_assoc_departments_data['dept_name']; ?>">
                </div>
                <div class="form-group">
                  <label>Department Icon</label>
                  <input type="text" class="form-control" name="dept_icon" value="<?php echo $after_assoc_departments_data['dept_icon']; ?>">
                  <a href="https://fontawesome.com/v4.7/icons/">To see a awesome icon list please click here</a>
                </div>
                <div class="form-group">
                  <label>Feature One</label>
                  <input type="text" class="form-control" name="feature_one" value="<?php echo $after_assoc_departments_data['feature_one']; ?>">
                </div>
                <div class="form-group">
                  <label>Feature Two</label>
                  <input type="text" class="form-control" name="feature_two" value="<?php echo $after_assoc_departments_data['feature_two']; ?>">
                </div>
                <div class="form-group">
                  <label>Feature Three</label>
                  <input type="text" class="form-control" name="feature_three" value="<?php echo $after_assoc_departments_data['feature_three']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit Departments</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
