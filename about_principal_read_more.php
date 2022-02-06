<?php
  require_once 'frontend_asset/frontend_header.php';
 ?>

        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>Principal Message</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="about_principal_read_more.php"> Principal Message </a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 pr-0">
                    <div class="admission">
                        <div class="col-md-12 col-sm-12 p-sm-0 col-12">
                            <h2>WELCOME TO PATHSHALA</h2>
                        </div>

                        <?php

                          $get_all_p_message_data = "SELECT * FROM pmessage ORDER BY id DESC LIMIT 1";
                          $get_all_p_message_data_result = mysqli_query($database_connection, $get_all_p_message_data);
                          foreach ($get_all_p_message_data_result as $all_p_message_data) {
                            ?>
                            <div class="col-md-4 col-sm-3 p-sm-0 col-12 offset-3">
                                <img class="img-fluid" src="uploads/p_image/<?php echo $all_p_message_data['pimage']; ?>" alt="">
                            </div>
                            <div class=" col-md-12 col-sm-9 col-12">
                                <p><?php echo $all_p_message_data['pmessage']; ?></p>
                                <h4><?php echo $all_p_message_data['pname']; ?></h4>
                                <span><?php echo $all_p_message_data['pdesignation']; ?><br><?php echo $all_p_message_data['pinstitute']; ?></span>
                            </div>
                            <?php
                          }

                         ?>

                    </div>
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
