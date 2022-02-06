<?php

  session_start();
  require_once 'db.php';

  $old_p_message_id = $_POST['old_p_message_id'];
  $old_p_image_name = $_POST['old_p_image_name'];
  $pname = $_POST['pname'];
  $pdesignation = $_POST['pdesignation'];
  $pinstitute = $_POST['pinstitute'];
  $pmessage = $_POST['pmessage'];
  $our_uploaded_image_file = $_FILES['pimage'];
  $our_uploaded_image_name = $our_uploaded_image_file['name'];

  $after_explode = explode(".", $our_uploaded_image_name);
  $our_uploaded_image_extension = end($after_explode);

  if($old_p_image_name != "default_p_photo.jpg"){
    unlink('uploads/p_image/'.$old_p_image_name);
  }

  $new_image_name = $old_p_message_id.".".$our_uploaded_image_extension;
  $our_uploaded_image_location = "uploads/p_image/".$new_image_name;
  $temporary_location = $our_uploaded_image_file['tmp_name'];
  move_uploaded_file($temporary_location, $our_uploaded_image_location);
  $update_query = "UPDATE pmessage SET pname = '$pname', pdesignation = '$pdesignation', pinstitute = '$pinstitute', pmessage = '$pmessage', pimage = '$new_image_name' WHERE id = $old_p_message_id";
  mysqli_query($database_connection, $update_query);
  $_SESSION['update_principal_message'] = "Your principal message updated successfully";
  header('location: addpmessage.php');


 ?>
