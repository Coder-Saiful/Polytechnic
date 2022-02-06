<?php

  session_start();
  require_once 'db.php';

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  $update_profile_query = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
  mysqli_query($database_connection, $update_profile_query);
  $_SESSION['logged_in_user_name'] = $name;
  $_SESSION['logged_in_user_email'] = $email;
  $_SESSION['update_profile_message'] = "Your profile updated successfully";
  header('location: editprofile.php');

 ?>
