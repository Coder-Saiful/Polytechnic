<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

 <?php
  $stat_id = $_GET['stat_id'];
  $get_single_stat_data = "SELECT * FROM stats WHERE id = $stat_id";
  $get_single_stat_data_result = mysqli_query($database_connection, $get_single_stat_data);
  $after_assoc_stat_data = mysqli_fetch_assoc($get_single_stat_data_result);
 ?>

    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addstat.php">Add Statistics</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Statistics</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Your Statistics</div>
            <div class="card-body text-dark">
              <form action="editstat_post.php" method="post">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc_stat_data['id']; ?>">
                </div>
                <div class="form-group">
                  <label>Stat Name</label>
                  <input type="text" class="form-control" name="stat_name" value="<?php echo $after_assoc_stat_data['stat_name']; ?>">
                </div>
                <div class="form-group">
                  <label>Stat Icon</label>
                  <input type="text" class="form-control" name="stat_icon" value="<?php echo $after_assoc_stat_data['stat_icon']; ?>">
                  <a href="https://fontawesome.com/v4.7/icons/">To see a awesome icon list please click here</a>
                </div>
                <div class="form-group">
                  <label>Stat Quantity</label>
                  <input type="number" class="form-control" name="stat_quantity" value="<?php echo $after_assoc_stat_data['stat_quantity']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit Statistics</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
