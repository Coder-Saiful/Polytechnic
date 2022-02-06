<?php
  require_once 'session_check.php';
  require_once 'includes/header.php';
  require_once 'db.php';
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">

          <?php
            if(isset($_SESSION['delete_contact_message'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['delete_contact_message']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['delete_contact_message']);
            }
           ?>

          <div class="card text-white mb-3">
            <div class="card-header bg-primary">View All Contact Message</div>
            <div class="card-body text-dark">
              <table class="table table-bordered">
                <tr>
                  <th>Guest Name</th>
                  <th>Guest Email</th>
                  <th>Guest Subject</th>
                  <th>Guest Message</th>
                  <th>Read Status</th>
                  <th>Action</th>
                </tr>

                <?php

                  $get_all_contact_data = "SELECT * FROM contacts ORDER BY id DESC";
                  $get_all_contact_data_result = mysqli_query($database_connection, $get_all_contact_data);
                  foreach ($get_all_contact_data_result as $all_contact_data) {
                    ?>
                    <tr>
                      <td><?php echo $all_contact_data['guest_name']; ?></td>
                      <td><?php echo $all_contact_data['guest_email']; ?></td>
                      <td><?php echo $all_contact_data['guest_subject']; ?></td>
                      <td>
                        <textarea rows="5" class="form-control">
                          <?php echo $all_contact_data['guest_message']; ?>
                        </textarea>
                      </td>
                      <td>
                        <?php
                          if($all_contact_data['read_status'] == 1){
                            ?>
                            <a href="unread.php?contact_id=<?php echo $all_contact_data['id']; ?>" class="btn btn-info">Unread</a>
                            <?php
                          }
                         ?>
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="deletemessage.php?contact_id=<?php echo $all_contact_data['id']; ?>" class="btn btn-danger">Delete</a>
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
