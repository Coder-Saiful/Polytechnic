<?php

  session_start();
  require_once 'db.php';

  $p_message_id = $_GET['p_message_id'];
  $p_image_name = $_GET['p_image_name'];

  if($p_image_name == "default_p_photo.jpg"){
    $update_query = "DELETE FROM pmessage WHERE id = $p_message_id";
    mysqli_query($database_connection, $update_query);
    $_SESSION['delete_principal_message'] = "Your principal message deleted successfully";
    header('location: addpmessage.php');
  }else{
    $update_query = "DELETE FROM pmessage WHERE id = $p_message_id";
    mysqli_query($database_connection, $update_query);
    unlink('uploads/p_image/'.$p_image_name);
    $_SESSION['delete_principal_message'] = "Your principal message deleted successfully";
    header('location: addpmessage.php');
  }

 ?>
