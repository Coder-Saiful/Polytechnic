<?php

  session_start();
  require_once 'db.php';

  $slider_id = $_GET['slider_id'];
  $slider_image_name = $_GET['slider_image_name'];

  if($slider_image_name == "default_slider_photo.jpg"){
    $update_query = "DELETE FROM sliders WHERE id = $slider_id";
    mysqli_query($database_connection, $update_query);
    $_SESSION['delete_slider_message'] = "Your slider image deleted successfully";
    header('location: addslider.php');
  }else{
    $update_query = "DELETE FROM sliders WHERE id = $slider_id";
    mysqli_query($database_connection, $update_query);
    unlink('uploads/slider_image/'.$slider_image_name);
    $_SESSION['delete_slider_message'] = "Your slider image deleted successfully";
    header('location: addslider.php');
  }

 ?>
