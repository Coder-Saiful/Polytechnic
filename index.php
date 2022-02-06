<?php
  require_once 'frontend_asset/frontend_header.php';
  require_once 'db.php';
 ?>

        <!--  banner starts  -->
        <section id="banner">
            <div class="slide">

              <?php

                $get_all_slider_data = "SELECT * FROM sliders WHERE slider_status
                 = 1";
                $get_all_slider_data_result = mysqli_query($database_connection, $get_all_slider_data);
                foreach ($get_all_slider_data_result as $all_slider_data) {
                  ?>
                  <div class="bim-1">
                      <img src="uploads/slider_image/<?php echo $all_slider_data['slider_image']; ?>" alt="" class="img-fluid">
                  </div>
                  <?php
                }

               ?>

            </div>
        </section>
        <!-- banner ends -->
    </div>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="row">

                      <?php

                        $get_all_about_data = "SELECT * FROM about_us ORDER BY id DESC LIMIT 1";
                        $get_all_about_data_result = mysqli_query($database_connection, $get_all_about_data);
                        foreach ($get_all_about_data_result as $all_about_data) {
                          ?>
                          <div class="welcome col-sm-12">
                              <h2><?php echo $all_about_data['about_title']; ?></h2>
                              <p style="height:146px;overflow:hidden;"><?php echo $all_about_data['about_details']; ?></p>
                              <a href="about_us.php">read more</a>
                          </div>
                          <?php
                        }

                       ?>

                        <!-- welcome ends -->
                    </div>
                    <div class="princi row">
                        <div class="col-md-12 col-sm-12 p-sm-0 col-12">
                            <h2>principal's message</h2>
                        </div>

                        <?php

                          $get_all_p_message_data = "SELECT * FROM pmessage ORDER BY id DESC LIMIT 1";
                          $get_all_p_message_data_result = mysqli_query($database_connection, $get_all_p_message_data);
                          foreach ($get_all_p_message_data_result as $all_p_message_data) {
                            ?>
                            <div class="col-md-2 col-sm-3 p-sm-0 col-12">
                                <img class="img-fluid" src="uploads/p_image/<?php echo $all_p_message_data['pimage']; ?>" alt="">
                            </div>
                            <div class="message col-md-10 col-sm-9 col-12">
                                <p style="height:146px;overflow:hidden;"><?php echo $all_p_message_data['pmessage']; ?></p>
                                <p style="margin-top:0;padding-bottom:15px;margin-bottom:0;"><a href="about_principal_read_more.php" class="p-0">Read More...</a></p>
                                <h4><?php echo $all_p_message_data['pname']; ?></h4>
                                <span><?php echo $all_p_message_data['pdesignation']; ?> <br><?php echo $all_p_message_data['pinstitute']; ?></span>
                            </div>
                            <?php
                          }

                         ?>

                    </div>
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
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="s-area">
                                <h3>Opportunity - advantage</h3>

                                <ul>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>admission</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>examination</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>results</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>class routine</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>syllabus</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic calander</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic programs</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>activity</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>scholarship</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>rover scout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="link">
                                <h3>useful links</h3>
                                <ul>
                                    <li><a href="#">ministry of education</a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">directorate of technical education board </a></li>
                                    <li><a href="#">skills &amp; Training enhancement project</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter part starts -->
    <section id="counter">
        <div class="count-overlay">
            <div class="container text-center">
                <div class="row">

                  <?php

                    $get_all_stat_data = "SELECT * FROM stats LIMIT 4";
                    $get_all_stat_data_result = mysqli_query($database_connection, $get_all_stat_data);
                    foreach ($get_all_stat_data_result as $all_stat_data) {
                      ?>
                      <div class="col-md-3 col-6 col-sm-3 county text-center">
                          <i class="fa <?php echo $all_stat_data['stat_icon']; ?>"></i>
                          <div class="count num"><?php echo $all_stat_data['stat_quantity']; ?></div>
                          <p><?php echo $all_stat_data['stat_name']; ?></p>
                      </div>
                      <?php
                    }

                   ?>

            </div>
        </div>
    </section>
    <!-- counter part ends -->
    <!-- blog start -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2>latest news</h2>
                </div>

                <?php

                  $get_all_news_data = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
                  $get_all_news_data_result = mysqli_query($database_connection, $get_all_news_data);
                  foreach ($get_all_news_data_result as $all_news_data) {
                    ?>
                    <div class="col-md-4 col-sm-4 col-6 blog-item">
                        <div>
                            <img src="uploads/news_image/<?php echo $all_news_data['news_image']; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="blog-d">
                            <h3> <?php echo $all_news_data['news_title']; ?></h3>
                            <ul class="d-flex justify-content-between">
                                <li class="pr-0"><i class="fa fa-user"></i> <?php echo $all_news_data['news_author']; ?></li>
                                <li class="pr-0"><i class="fa fa-calendar"></i><?php echo $all_news_data['news_date']; ?></li>
                            </ul>
                            <p style="height:146px;overflow:hidden;"><?php echo $all_news_data['news_details']; ?></p>
                            <a href="news_details.php?news_id=<?php echo $all_news_data['id']; ?>">continue reading <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php
                  }

                 ?>

            </div>
        </div>
    </section>
    <!-- blog end -->
    <!-- gallary part ends -->
    <section id="gallary">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <h2>our gallary</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-12">
                    <ul>
                        <li data-filter="all">all</li>
                        <li data-filter=".man">Man's</li>
                        <li data-filter=".woman">Woman's</li>
                        <li data-filter=".children">Children</li>
                        <li data-filter=".electronics">Electronics</li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-12 cont">
                    <div class="row">

                      <?php

                        $get_all_gallery_data = "SELECT * FROM galleries LIMIT 6";
                        $get_all_gallery_data_result = mysqli_query($database_connection, $get_all_gallery_data);
                        foreach ($get_all_gallery_data_result as $all_gallery_data) {
                          ?>
                          <div class="col-md-4 col-sm-4 col-6 mix <?php echo $all_gallery_data['category_name']; ?>">
                              <img src="uploads/gallery_image/<?php echo $all_gallery_data['gallery_image']; ?>" alt="">
                          </div>
                          <?php
                        }

                       ?>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-12 view">
                    <a href="gallery.php">view more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- gallary part ends -->

<?php
  require_once 'frontend_asset/frontend_footer.php';
 ?>
