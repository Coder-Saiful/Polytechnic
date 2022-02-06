<?php
  require_once 'frontend_asset/frontend_header.php';
 ?>

        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>Our Departments</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="#"> Our Departments </a>
            </div>
        </section>
    </div>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">

                  <div class="department row">
                      <div class="col-md-12 col-sm-12 col-12">
                          <h2>our departments</h2>
                      </div>

                      <?php

                        $get_all_departments_data = "SELECT * FROM departments LIMIT 6";
                        $get_all_departments_data_result = mysqli_query($database_connection, $get_all_departments_data);
                        foreach ($get_all_departments_data_result as $all_departments_data) {
                          ?>
                          <div class="col-md-4 col-sm-4 col-6  p-0 dep">
                              <i class="fa <?php echo $all_departments_data['dept_icon']; ?>"></i>
                              <h5><?php echo $all_departments_data['dept_name']; ?></h5>
                              <ul>
                                  <li><?php echo $all_departments_data['feature_one']; ?></li>
                                  <li><?php echo $all_departments_data['feature_two']; ?></li>
                                  <li><?php echo $all_departments_data['feature_three']; ?></li>
                              </ul>
                          </div>
                          <?php
                        }

                       ?>

                  </div>

                </div>
                <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">



                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
  require_once 'frontend_asset/frontend_footer.php';
 ?>
