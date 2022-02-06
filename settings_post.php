<?php

  session_start();
  require_once 'db.php';

  $institute_name = $_POST['institute_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];
  $g_plus = $_POST['g_plus'];
  $instagram = $_POST['instagram'];
  $institute_short_desc = $_POST['institute_short_desc'];
  $institute_address = $_POST['institute_address'];
  $g_map = $_POST['g_map'];

  $update_settings_query = "UPDATE settings SET institute_name = '$institute_name', phone = '$phone', email = '$email', facebook = '$facebook', twitter = '$twitter', g_plus = '$g_plus', instagram = '$instagram', institute_short_desc = '$institute_short_desc', institute_address = '$institute_address', g_map = '$g_map' WHERE id = 1";
  mysqli_query($database_connection, $update_settings_query);
  $_SESSION['update_settings_message'] = "Your general settings updated successfully";
  header('location: settings.php');

 ?>
