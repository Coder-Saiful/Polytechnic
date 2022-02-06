<?php

  session_start();
  require_once 'db.php';

  $stat_name = $_POST['stat_name'];
  $stat_icon = $_POST['stat_icon'];
  $stat_quantity = $_POST['stat_quantity'];

  $insert_stat_query = "INSERT INTO stats(stat_name, stat_icon, stat_quantity) VALUES ('$stat_name', '$stat_icon', '$stat_quantity')";
  mysqli_query($database_connection, $insert_stat_query);
  $_SESSION['insert_stat_message'] = "Your statistics added successfully";
  header('location: addstat.php');

 ?>
