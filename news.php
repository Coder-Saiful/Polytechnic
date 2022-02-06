<?php
  require_once 'frontend_asset/frontend_header.php';
 ?>

        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>News And Updates</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="#"> news and updates </a>
            </div>
        </section>
    </div>
    <!-- blog start -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2>latest news</h2>
                </div>

                <?php

                  $get_all_news_data = "SELECT * FROM news ORDER BY id DESC";
                  $get_all_news_data_result = mysqli_query($database_connection, $get_all_news_data);
                  foreach ($get_all_news_data_result as $all_news_data) {
                    ?>
                    <div class="col-md-4 col-sm-4 col-6 blog-item" style="margin-bottom:30px;">
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

<?php
  require_once 'frontend_asset/frontend_footer.php';
 ?>
