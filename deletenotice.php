<?php

  session_start();
  require_once 'db.php';

  $notice_id = $_GET['notice_id'];

  $delete_notice_query = "DELETE FROM notices WHERE id = $notice_id";
  mysqli_query($database_connection, $delete_notice_query);
  $_SESSION['delete_notice_message'] = "Your notice deleted successfully";
  header('location: addnotice.php');

 ?>
