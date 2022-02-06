<?php
  session_start();
  require_once 'includes/header.php';
 ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto mt-5">

            <?php
              if(isset($_SESSION['user_register_message'])){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong><?php echo $_SESSION['user_register_message']; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                unset($_SESSION['user_register_message']);
              }
             ?>

            <div class="card text-white mb-3">
              <div class="card-header bg-primary">Registration Form</div>
              <div class="card-body text-dark">
                <form action="register_post.php" method="post">
                  <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="user_name">
                    <?php
                      if(isset($_SESSION['errname'])){
                        ?>
                        <span style="color:red;"><?php echo $_SESSION['errname']; ?></span>
                        <?php
                        unset($_SESSION['errname']);
                      }
                     ?>
                  </div>
                  <div class="form-group">
                    <label>User Email</label>
                    <input type="text" class="form-control" placeholder="Enter your email" name="user_email">
                    <?php
                      if(isset($_SESSION['erremail'])){
                        ?>
                        <span style="color:red;"><?php echo $_SESSION['erremail']; ?></span>
                        <?php
                        unset($_SESSION['erremail']);
                      }
                     ?>
                     <?php
                       if(isset($_SESSION['invalid_email'])){
                         ?>
                         <span style="color:red;"><?php echo $_SESSION['invalid_email']; ?></span>
                         <?php
                         unset($_SESSION['invalid_email']);
                       }
                      ?>
                     <?php
                       if(isset($_SESSION['exist_email'])){
                         ?>
                         <span style="color:red;"><?php echo $_SESSION['exist_email']; ?></span>
                         <?php
                         unset($_SESSION['exist_email']);
                       }
                      ?>
                  </div>
                  <div class="form-group">
                    <label>User Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="user_password">
                    <?php
                      if(isset($_SESSION['errpass'])){
                        ?>
                        <span style="color:red;"><?php echo $_SESSION['errpass']; ?></span>
                        <?php
                        unset($_SESSION['errpass']);
                      }
                     ?>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="login.php" class="btn btn-success">Login Here</a>
                </form>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>

<?php
  require_once 'includes/footer.php';
 ?>
