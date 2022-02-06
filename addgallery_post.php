<?php

  session_start();
  require_once 'db.php';

  $category_name = $_POST['category_name'];
  $our_uploaded_image_file = $_FILES['gallery_image'];
  $our_uploaded_image_name = $our_uploaded_image_file['name'];

  $after_explode = explode(".", $our_uploaded_image_name);
  $our_uploaded_image_extension = end($after_explode);

  $our_uploaded_image_extension_list = array("jpg", "png", "jpeg");

  if($our_uploaded_image_file['name']){

    if(in_array($our_uploaded_image_extension, $our_uploaded_image_extension_list)){

      $our_uploaded_image_size = $our_uploaded_image_file['size'];

      if($our_uploaded_image_size <= 2000000){

        $insert_query = "INSERT INTO galleries(category_name) VALUES ('$category_name')";
        mysqli_query($database_connection, $insert_query);

        $get_inserted_id= mysqli_insert_id($database_connection);

        $new_image_name = $get_inserted_id.".".$our_uploaded_image_extension;

        $our_uploaded_image_location = "uploads/gallery_image/".$new_image_name;
        $temporary_location = $our_uploaded_image_file['tmp_name'];

        move_uploaded_file($temporary_location, $our_uploaded_image_location);

        $update_query = "UPDATE galleries SET gallery_image = '$new_image_name' WHERE id = $get_inserted_id";
        mysqli_query($database_connection, $update_query);
        $_SESSION['insert_gallery_message'] = "Your gallery image uploaded successfully";
        header('location: addgallery.php');

      }else{
        $_SESSION['large_image_file'] = "Sorry, your file is too big";
        header('location: addgallery.php');
      }

    }else{
      $_SESSION['invalid_image_format'] = "Invalid image format please select valid image format";
      header('location: addgallery.php');
    }

  }else{
    $insert_query = "INSERT INTO galleries(category_name) VALUES ('$category_name')";
    mysqli_query($database_connection, $insert_query);
    $_SESSION['insert_gallery_message'] = "Your gallery image uploaded successfully";
    header('location: addgallery.php');
  }

 ?>
