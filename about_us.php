<?php
  require_once 'frontend_asset/frontend_header.php';
 ?>

        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>About Us</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="about_principal_read_more.php"> About Us </a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 pr-0">

                  <?php

                    $get_all_about_data = "SELECT * FROM about_us ORDER BY id DESC LIMIT 1";
                    $get_all_about_data_result = mysqli_query($database_connection, $get_all_about_data);
                    foreach ($get_all_about_data_result as $all_about_data) {
                      ?>
                      <div class="admission">
                          <div class="col-md-12 col-sm-12 p-sm-0 col-12">
                              <h2><?php echo $all_about_data['about_title']; ?></h2>
                          </div>
                          <div class=" col-md-12 col-sm-9 col-12">
                              <p><?php echo $all_about_data['about_details']; ?></p>
                          </div>

                      </div>
                      <?php
                    }

                   ?>

                </div>
                 <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">
                        <!-- about notice start-->


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content part ends -->

<?php
  require_once 'frontend_asset/frontend_footer.php';
 ?>
