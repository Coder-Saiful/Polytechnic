<?php
  require_once 'frontend_asset/frontend_header.php';
 ?>
        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>Our Gallery</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="#"> Our Gallery </a>
            </div>
        </section>
    </div>
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
