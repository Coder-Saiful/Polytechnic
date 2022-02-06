<?php

  session_start();
  require_once 'db.php';

  $about_id = $_POST['id'];
  $about_title = $_POST['about_title'];
  $about_details = $_POST['about_details'];

  $update_about_query = "UPDATE about_us SET about_title = '$about_title', about_details = '$about_details' WHERE id = $about_id";
  mysqli_query($database_connection, $update_about_query);
  $_SESSION['update_about_message'] = "Your aboutt updated successfully";
  header('location: addabout.php');

 ?>
