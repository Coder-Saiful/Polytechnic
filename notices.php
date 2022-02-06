<?php
  require_once 'frontend_asset/frontend_header.php';
 ?>

        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>Our Notices</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="#">Recent posts</a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="row">
                      <?php
                        require_once 'db.php';
                        $notice_id = $_GET['notice_id'];
                        $get_single_notice_data = "SELECT * FROM notices WHERE id = $notice_id";
                        $get_single_notice_data_result = mysqli_query($database_connection, $get_single_notice_data);
                        $after_assoc_notice_data = mysqli_fetch_assoc($get_single_notice_data_result);
                       ?>
                        <div class="welcome col-sm-12">
                            <h2><?php echo $after_assoc_notice_data['notice_title']; ?></h2>
                            <p><i class="fa fa-calendar"><?php echo $after_assoc_notice_data['notice_date']; ?></i></p>
                            <p><?php echo $after_assoc_notice_data['notice_details']; ?></p>
                        </div>
                        <!-- welcome ends -->
                    </div>


                </div>
                <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">
                        <div class="col-md-12 col-12 col-sm-4">
                          <div class="notice">
                              <h3>notice board</h3>
                              <div class="note-slick">

                                <?php

                                  $get_all_notice_data = "SELECT * FROM notices ORDER BY id DESC";
                                  $get_all_notice_data_result = mysqli_query($database_connection, $get_all_notice_data);
                                  foreach ($get_all_notice_data_result as $all_notice_data) {
                                    ?>
                                    <div class="note col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-md-1 col-12 col-sm-1 p-0">
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="col-md-11 col-sm-11 p-0 n">
                                                <a href="notices.php?notice_id=<?php echo $all_notice_data['id']; ?>">
                                                  <h6 style="display: inline-block"> <?php echo $all_notice_data['notice_title']; ?><h6>
                                                </a>
                                                <a href="notices.php?notice_id=<?php echo $all_notice_data['id']; ?>">
                                                  <p><i class="fa fa-calendar"></i> <?php echo $all_notice_data['notice_date']; ?></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                  }

                                 ?>

                              </div>
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
