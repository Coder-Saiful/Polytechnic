<?php

  session_start();
  require_once 'db.php';

  $notice_id = $_POST['id'];
  $notice_title = $_POST['notice_title'];
  $notice_date = $_POST['notice_date'];
  $notice_details = $_POST['notice_details'];

  $update_notice_query = "UPDATE notices SET notice_title = '$notice_title', notice_date = '$notice_date', notice_details = '$notice_details' WHERE id = $notice_id";
  mysqli_query($database_connection, $update_notice_query);
  $_SESSION['update_notice_message'] = "Your notice updated successfully";
  header('location: addnotice.php');

 ?>
