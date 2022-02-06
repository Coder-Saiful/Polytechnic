<?php
   require_once 'db.php';
   $get_settings_data = "SELECT * FROM settings WHERE id = 1";
   $get_settings_data_result = mysqli_query($database_connection, $get_settings_data);
   $after_assoc_settings_data = mysqli_fetch_assoc($get_settings_data_result);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>polytechnic</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800,900|Oxygen:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="frontend_asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend_asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend_asset/css/slick.css">
    <link rel="stylesheet" href="frontend_asset/css/style.css">
    <link rel="stylesheet" href="frontend_asset/css/responsive.css">
</head>

<body>
    <div id="home">
        <!--  head part starts  -->

        <header id="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-7 col-12 logo">
                        <a href="index.php">
                          <h2><?php echo $after_assoc_settings_data['institute_name']; ?></h2>
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-5 col-12 text-right">
                        <div class="row ">
                            <div class="co col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li><a href="tel:<?php echo $after_assoc_settings_data['phone']; ?>"><i class="fa fa-phone"></i><?php echo $after_assoc_settings_data['phone']; ?></a></li>
                                    <li><a href="mailto:<?php echo $after_assoc_settings_data['email']; ?>"><i class="fa fa-envelope"></i><?php echo $after_assoc_settings_data['email']; ?></a></li>

                                </ul>
                            </div>

                            <div class="so col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li>
                                        <ul class="social">
                                            <li><a href="<?php echo $after_assoc_settings_data['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?php echo $after_assoc_settings_data['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $after_assoc_settings_data['g_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="<?php echo $after_assoc_settings_data['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-sign-in si"></i>sign in</a></li>
                                    <li><a href="#"><i class="fa fa-user-plus si"></i>register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--  head part ends  -->
        <!-- menu part start -->
        <section id="menu">
            <div class="container text-center">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"> Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_principal_read_more.php">Principal Message</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="departments.php">departments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.php">News And Updates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">gallary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- menu part end -->
        <!--    .phpque starts -->
        <section id="marq">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 pr-0">
                        <span>latest notice</span>
                    </div>
                    <div class="col-md-11 col-sm-10">
                        <marquee>
                          <?php

                            $get_all_notice_data = "SELECT * FROM notices ORDER BY id DESC";
                            $get_all_notice_data_result = mysqli_query($database_connection, $get_all_notice_data);
                            foreach ($get_all_notice_data_result as $all_notice_data) {
                              ?>
                              <?php echo $all_notice_data['notice_title']; ?> |
                              <?php
                            }

                           ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </section>
        <!--    marque ends -->
