<?php

  session_start();
  require_once 'db.php';

  $stat_id = $_POST['id'];
  $stat_name = $_POST['stat_name'];
  $stat_icon = $_POST['stat_icon'];
  $stat_quantity = $_POST['stat_quantity'];

  $update_stat_query = "UPDATE stats SET stat_name = '$stat_name', stat_icon = '$stat_icon', stat_quantity = '$stat_quantity' WHERE id = $stat_id";
  mysqli_query($database_connection, $update_stat_query);
  $_SESSION['update_stat_message'] = "Your statistics updated successfully";
  header('location: addstat.php');

 ?>
