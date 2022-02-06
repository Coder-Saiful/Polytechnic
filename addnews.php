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
            if(isset($_SESSION['insert_news_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['insert_news_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['insert_news_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add New News</div>
            <div class="card-body text-dark">
              <form action="addnews_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>News Title</label>
                  <input type="text" class="form-control" name="news_title">
                </div>
                <div class="form-group">
                  <label>News Author</label>
                  <input type="text" class="form-control" name="news_author">
                </div>
                <div class="form-group">
                  <label>News Date</label>
                  <input type="date" class="form-control" name="news_date">
                </div>
                <div class="form-group">
                  <label>News Details</label>
                  <textarea rows="5" class="form-control" name="news_details"></textarea>
                </div>
                <div class="form-group">
                  <label>News Image</label>
                  <input type="file" class="form-control" name="news_image">
                </div>
                <button type="submit" class="btn btn-primary">Add News</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-5">

          <?php
            if(isset($_SESSION['update_news_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['update_news_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['update_news_message']);
            }
           ?>

          <?php
            if(isset($_SESSION['delete_news_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_news_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_news_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View All news</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>News Title</th>
                  <th>News Author</th>
                  <th>News Date</th>
                  <th>News Details</th>
                  <th>News Image</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_news_data = "SELECT * FROM news ORDER BY id DESC";
                  $get_all_news_data_result = mysqli_query($database_connection, $get_all_news_data);
                  foreach ($get_all_news_data_result as $all_news_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_news_data['news_title']; ?></td>
                      <td><?php echo $all_news_data['news_author']; ?></td>
                      <td><?php echo $all_news_data['news_date']; ?></td>
                      <td>
                        <p style="width:120px;height:120px;overflow:auto;margin-bottom:0;"><?php echo $all_news_data['news_details']; ?></p>
                      </td>
                      <td>
                        <img src="uploads/news_image/<?php echo $all_news_data['news_image']; ?>" alt="" style="width:100px;">
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="editnews.php?news_id=<?php echo $all_news_data['id']; ?>&news_image_name=<?php echo $all_news_data['news_image']; ?>" class="btn btn-info">Edit</a>
                          <a href="deletenews.php?news_id=<?php echo $all_news_data['id']; ?>&news_image_name=<?php echo $all_news_data['news_image']; ?>" class="btn btn-danger">Delete</a>
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
