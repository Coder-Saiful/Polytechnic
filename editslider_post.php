<?php

  session_start();
  require_once 'db.php';

  $old_slider_id = $_POST['old_slider_id'];
  $old_slider_image_name = $_POST['old_slider_image_name'];
  $our_uploaded_image_file = $_FILES['slider_image'];
  $our_uploaded_image_name = $our_uploaded_image_file['name'];

  $after_explode = explode(".", $our_uploaded_image_name);
  $our_uploaded_image_extension = end($after_explode);

  if($old_slider_image_name != "default_slider_photo.jpg"){
    unlink('uploads/slider_image/'.$old_slider_image_name);
  }

  $new_image_name = $old_slider_id.".".$our_uploaded_image_extension;
  $our_uploaded_image_location = "uploads/slider_image/".$new_image_name;
  $temporary_location = $our_uploaded_image_file['tmp_name'];
  move_uploaded_file($temporary_location, $our_uploaded_image_location);
  $update_query = "UPDATE sliders SET slider_image = '$new_image_name' WHERE id = $old_slider_id";
  mysqli_query($database_connection, $update_query);
  $_SESSION['update_slider_message'] = "Your slider image updated successfully";
  header('location: addslider.php');


 ?>
