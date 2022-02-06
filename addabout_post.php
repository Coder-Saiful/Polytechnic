<?php

  session_start();
  require_once 'db.php';

  $about_title = $_POST['about_title'];
  $about_details = $_POST['about_details'];

  $insert_about_query = "INSERT INTO about_us(about_title, about_details) VALUES ('$about_title', '$about_details')";
  mysqli_query($database_connection, $insert_about_query);
  $_SESSION['insert_about_message'] = "Your about added successfully";
  header('location: addabout.php');

 ?>
