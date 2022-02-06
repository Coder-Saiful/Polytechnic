<?php

  session_start();
  require_once 'db.php';

  $old_gallery_id = $_POST['old_gallery_id'];
  $old_gallery_image_nmae = $_POST['old_gallery_image_nmae'];
  $category_name = $_POST['category_name'];
  $our_uploaded_image_file = $_FILES['gallery_image'];
  $our_uploaded_image_name = $our_uploaded_image_file['name'];

  $after_explode = explode(".", $our_uploaded_image_name);
  $our_uploaded_image_extension = end($after_explode);

  if($old_gallery_image_nmae != "default_gallery_photo.jpg"){
    unlink('uploads/gallery_image/'.$old_gallery_image_nmae);
  }

  $new_image_name = $old_gallery_id.".".$our_uploaded_image_extension;
  $our_uploaded_image_location = "uploads/gallery_image/".$new_image_name;
  $temporary_location = $our_uploaded_image_file['tmp_name'];
  move_uploaded_file($temporary_location, $our_uploaded_image_location);
  $update_query = "UPDATE galleries SET category_name = '$category_name', gallery_image = '$new_image_name' WHERE id = $old_gallery_id";
  mysqli_query($database_connection, $update_query);
  $_SESSION['update_gallery_message'] = "Your gallery image updated successfully";
  header('location: addgallery.php');


 ?>
