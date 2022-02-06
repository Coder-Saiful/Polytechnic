<?php
  session_start();
  require_once 'frontend_asset/frontend_header.php';
 ?>
        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>contact-us</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="contact.php">contact-us</a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-12 col-sm-12 col-12 pr-md-0">
                    <div class="contact">
                        <div class="row m-0">
                            <div class="col-12 p-0" >
                                <h2 class="text-center" style="border-bottom: 3px solid #c1bebe;padding-bottom: 7px !important;margin-bottom: 50px;">contact-us</h2>
                            </div>

                            <div class="col-md-5 col-12 p-0">

                                <a href="tel:<?php echo $after_assoc_settings_data['phone']; ?>"><i class="fa fa-phone"></i><b>phone:</b> <?php echo $after_assoc_settings_data['phone']; ?></a>
                                <a href="mailto:<?php echo $after_assoc_settings_data['email']; ?>"><i class="fa fa-envelope"></i><b>e-mail: </b>  <?php echo $after_assoc_settings_data['email']; ?></a>
                                <a href="javascript:void()"><i class="fa fa-location-arrow"></i><b>address:</b> <?php echo $after_assoc_settings_data['institute_address']; ?></a>
                            </div>

                            <div class="col-md-6 col-12 offset-md-1 p-0">
                                <h5 style="color: #00BE89;margin-bottom: 25px;">গুগল মাপে আমাদের খুঁজে পেতে এখানে ক্লিক করুন</h5>
                                <iframe src="<?php echo $after_assoc_settings_data['g_map']; ?>" frameborder="0" style="border:0; width:450px; height:200px" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-12 p-0">
                                <h2 class="h">send us a message</h2>
                            </div>

                            <div class="col-md-12">

                              <?php
                                if(isset($_SESSION['insert_contact_message'])){
                                  ?>
                                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><?php echo $_SESSION['insert_contact_message']; ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <?php
                                  unset($_SESSION['insert_contact_message']);
                                }
                               ?>

                               <form action="contact_post.php" method="post">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your full name" name="guest_name">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your email" name="guest_email">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Subject</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your subject" name="guest_subject">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Message</label>
                                    <textarea class="form-control" rows="5" type="text" name="guest_message"></textarea>
                                  </div>

                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- content part ends -->

<?php
  require_once 'frontend_asset/frontend_footer.php';
 ?>
