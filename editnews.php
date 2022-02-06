<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

 <?php
   $news_id = $_GET['news_id'];
   $get_single_news_data = "SELECT * FROM news WHERE id = $news_id";
   $get_single_news_data_result = mysqli_query($database_connection, $get_single_news_data);
   $after_assoc_news_data = mysqli_fetch_assoc($get_single_news_data_result);
  ?>

    <div class="container mt-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addnews.php">Add News</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit News</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Edit Your News</div>
            <div class="card-body text-dark">
              <form action="editnews_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_news_id" value="<?php echo $_GET['news_id']; ?>">
                </div>
                <div class="form-group mb-0">
                  <input type="hidden" class="form-control" name="old_news_image_name" value="<?php echo $_GET['news_image_name'] ?>">
                </div>
                <div class="form-group">
                  <label>News Title</label>
                  <input type="text" class="form-control" name="news_title" value="<?php echo $after_assoc_news_data['news_title']; ?>">
                </div>
                <div class="form-group">
                  <label>News Author</label>
                  <input type="text" class="form-control" name="news_author" value="<?php echo $after_assoc_news_data['news_author']; ?>">
                </div>
                <div class="form-group">
                  <label>News Date</label>
                  <input type="date" class="form-control" name="news_date" value="<?php echo $after_assoc_news_data['news_date']; ?>">
                </div>
                <div class="form-group">
                  <label>News Details</label>
                  <textarea rows="5" class="form-control" name="news_details">
                    <?php echo $after_assoc_news_data['news_details']; ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label>News Image</label>
                  <input type="file" class="form-control" name="news_image">
                </div>
                <button type="submit" class="btn btn-primary">Edit News</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
