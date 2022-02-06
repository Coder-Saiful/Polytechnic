<?php

  session_start();
  require_once 'db.php';

  $user_email = $_POST['user_email'];
  $user_password = md5($_POST['user_password']);

  $checking_query = "SELECT COUNT(*) AS login, name, email, id FROM users WHERE email = '$user_email' AND password = '$user_password'";
  $result = mysqli_query($database_connection, $checking_query);
  $after_assoc = mysqli_fetch_assoc($result);

  if($after_assoc['login'] == 1){
    $_SESSION['logged_in_user_name'] = $after_assoc['name'];
    $_SESSION['logged_in_user_email'] = $after_assoc['email'];
    $_SESSION['logged_in_user_id'] = $after_assoc['id'];
    // redirecting
    header('location: dashboard.php');
  }else{
    $_SESSION['err_email_pass'] = "Your email or password is invalid";
    header('location: login.php');
  }

 ?>
