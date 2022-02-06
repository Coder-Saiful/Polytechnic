<?php

  session_start();
  require_once 'db.php';

  $gallery_id = $_GET['gallery_id'];
  $gallery_image_name = $_GET['gallery_image_name'];

  if($gallery_image_name == "default_gallery_photo.jpg"){
    $update_query = "DELETE FROM galleries WHERE id = $gallery_id";
    mysqli_query($database_connection, $update_query);
    $_SESSION['delete_gallery_message'] = "Your gallery image deleted successfully";
    header('location: addgallery.php');
  }else{
    $update_query = "DELETE FROM galleries WHERE id = $gallery_id";
    mysqli_query($database_connection, $update_query);
    unlink('uploads/gallery_image/'.$gallery_image_name);
    $_SESSION['delete_gallery_message'] = "Your gallery image deleted successfully";
    header('location: addgallery.php');
  }

 ?>
