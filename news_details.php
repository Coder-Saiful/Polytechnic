<?php
  require_once 'frontend_asset/frontend_header.php';
 ?>

        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>News Details</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="#">News Details</a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 pr-0">
                    <div class="admission">
                        <h2>News details</h2>

                        <?php
                          $news_id = $_GET['news_id'];
                          $get_single_news_data = "SELECT * FROM news WHERE id = $news_id";
                          $get_single_news_data_result = mysqli_query($database_connection, $get_single_news_data);
                          $after_assoc_news_data = mysqli_fetch_assoc($get_single_news_data_result);
                         ?>

                        <img src="uploads/news_image/<?php echo $after_assoc_news_data['news_image']; ?>" width="1000" height='400' style="margin-bottom:10px">
                        <br>
                        <span><i class="fa fa-user" style="margin-right:5px"></i><?php echo $after_assoc_news_data['news_author']; ?></span>
                        <span style="margin-left:7px; margin-right:10px" ><i class="fa fa-calendar"><?php echo $after_assoc_news_data['news_date']; ?></i></span>
                        <p><?php echo $after_assoc_news_data['news_details']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content part ends -->

<?php
  require_once 'frontend_asset/frontend_footer.php';
 ?>
