<?php

  session_start();
  require_once 'db.php';

  $id = $_POST['id'];
  $old_password = md5($_POST['old_password']);
  $new_password = md5($_POST['new_password']);
  $confirm_password = md5($_POST['confirm_password']);

  if($new_password == $confirm_password){

    $get_db_password = "SELECT password FROM users WHERE id = $id";
    $get_db_password_result = mysqli_query($database_connection, $get_db_password);
    $after_assoc_result = mysqli_fetch_assoc($get_db_password_result);

    if($old_password == $after_assoc_result['password']){

      $update_password_query = "UPDATE users SET password = '$new_password' WHERE id = $id";
      mysqli_query($database_connection, $update_password_query);
      $_SESSION['update_password_message'] = "Your password has been changed";
      header('location: changepass.php');

    }else{
      $_SESSION['wrong_old_password'] = "You provided wrong old password";
      header('location: changepass.php');
    }

  }else{
    $_SESSION['new_confirm_pass_not_match'] = "New password does not match with confirm password";
    header('location: changepass.php');
  }

 ?>
