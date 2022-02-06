<?php

  session_start();
  require_once 'db.php';

  if(empty($_POST['user_name'])){
    $_SESSION['errname'] = "Your name field is required";
    header('location: register.php');
  }elseif(empty($_POST['user_email'])){
    $_SESSION['erremail'] = "Your email field is required";
    header('location: register.php');
  }elseif(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
    $_SESSION['invalid_email'] = "Please enter your valid email address";
    header('location: register.php');
  }elseif(empty($_POST['user_password'])){
    $_SESSION['errpass'] = "Your password field is required";
    header('location: register.php');
  }else{

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = md5($_POST['user_password']);

    $checking_email_query = "SELECT COUNT(*) AS email_address_amount FROM users WHERE email = '$user_email'";
    $result_from_db = mysqli_query($database_connection, $checking_email_query);
    $after_assoc_result = mysqli_fetch_assoc($result_from_db);

    if($after_assoc_result['email_address_amount'] == 1){
      $_SESSION['exist_email'] = "Your email address has been already taken";
      header('location: register.php');
    }else{
      $insert_query = "INSERT INTO users(name, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
      mysqli_query($database_connection, $insert_query);
      $_SESSION['user_register_message'] = "Your registration has been successfully";
      header('location: register.php');
    }

  }

 ?>
