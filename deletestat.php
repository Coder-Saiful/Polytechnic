<?php

  session_start();
  require_once 'db.php';

  $stat_id = $_GET['stat_id'];

  $delete_stat_query = "DELETE FROM stats WHERE id = $stat_id";
  mysqli_query($database_connection, $delete_stat_query);
  $_SESSION['delete_stat_message'] = "Your statistics deleted successfully";
  header('location: addstat.php');

 ?>
