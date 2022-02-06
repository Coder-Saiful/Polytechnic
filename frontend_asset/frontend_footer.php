<?php
   require_once 'db.php';
   $get_settings_data = "SELECT * FROM settings WHERE id = 1";
   $get_settings_data_result = mysqli_query($database_connection, $get_settings_data);
   $after_assoc_settings_data = mysqli_fetch_assoc($get_settings_data_result);
 ?>

<!-- foot starts -->
<section id="foot">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-6">
                <a href="index.php">
                  <h4 class="text-white"><?php echo $after_assoc_settings_data['institute_name']; ?></h4>
                </a>
                <p><?php echo $after_assoc_settings_data['institute_short_desc']; ?></p>


                <a href="<?php echo $after_assoc_settings_data['facebook']; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a>
                <a href="<?php echo $after_assoc_settings_data['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="<?php echo $after_assoc_settings_data['g_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a href="<?php echo $after_assoc_settings_data['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>

            </div>
            <div class="col-md-1 offset-1 p-0 col-sm-5 col-5">
                <h5>quick links</h5>
                <ul>
                    <li><a href="#">admission</a></li>
                    <li><a href="#">results</a></li>
                    <li><a href="#">academics</a></li>
                    <li><a href="#">faculty</a></li>
                    <li><a href="#">news &amp; events</a></li>
                </ul>
            </div>
            <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                <h5>contact us</h5>
                <div class="row soc">
                    <div class="col-md-2 col-sm-2 col-1">

                        <ul>
                            <li><i class="fa fa-phone"></i></li>
                            <li><i class="fa fa-envelope"></i></li>
                            <li><i class="fa fa-location-arrow"></i></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-8 col-8">
                        <ul>
                            <li><a href="tel:<?php echo $after_assoc_settings_data['phone']; ?>"><?php echo $after_assoc_settings_data['phone']; ?></a></li>
                            <li><a href="mailto:<?php echo $after_assoc_settings_data['email']; ?>"><?php echo $after_assoc_settings_data['email']; ?></a></li>
                            <li><a href="javascript:void()">Dhanmondi, Dhaka, Bangladesh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-1 col-sm-5 col-5">
                <h5>find us</h5>
                <iframe src="<?php echo $after_assoc_settings_data['g_map']; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<footer id="copy">
    <div class="container text-center">
        <p>Copyright &copy; 2021 Pathshala Polytechnic Institute. Designed &amp; Developed by Web Training Institute</p>
    </div>
</footer>
<!-- foot ends -->
<!-- top to -->
<div>
    <i class="fa fa-angle-up" id="return-to-top"></i>
</div>


<script src="frontend_asset/js/jquery-1.12.4.min.js"></script>
<script src="frontend_asset/js/bootstrap.min.js"></script>
<script src="frontend_asset/js/mixitup.min.js"></script>
<script src="frontend_asset/js/slick.min.js"></script>
<script src="frontend_asset/js/custom.js"></script>
</body>

</html>
