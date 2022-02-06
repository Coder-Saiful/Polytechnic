<?php

  session_start();
  require_once 'db.php';

  $about_id = $_GET['about_id'];

  $delete_about_query = "DELETE FROM about_us WHERE id = $about_id";
  mysqli_query($database_connection, $delete_about_query);
  $_SESSION['delete_about_message'] = "Your about deleted successfully";
  header('location: addabout.php');

 ?>
