<?php

  session_start();
  require_once 'db.php';

  $notice_title = $_POST['notice_title'];
  $notice_date = $_POST['notice_date'];
  $notice_details = $_POST['notice_details'];

  $insert_notice_query = "INSERT INTO notices(notice_title, notice_date, notice_details) VALUES ('$notice_title', '$notice_date', '$notice_details')";
  mysqli_query($database_connection, $insert_notice_query);
  $_SESSION['insert_notice_message'] = "Your notice added successfully";
  header('location: addnotice.php');

 ?>
