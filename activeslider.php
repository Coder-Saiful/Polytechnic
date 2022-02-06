<?php

  require_once 'db.php';

  $slider_id = $_GET['slider_id'];

  $update_query = "UPDATE sliders SET slider_status = 1 WHERE id = $slider_id";
  mysqli_query($database_connection, $update_query);
  header('location: addslider.php');

 ?>
