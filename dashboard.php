<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';

 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto mt-5">
          <div class="card text-white mb-3">
            <div class="card-header bg-primary">Your Dashboard</div>
            <div class="card-body text-dark">
              <h2>Hellow <?php echo $_SESSION['logged_in_user_name']; ?></h2>
              <h3>Your email is <?php echo $_SESSION['logged_in_user_email']; ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once 'includes/footer.php';
 ?>
