<?php

  session_start();
  require_once 'db.php';

  $old_news_id = $_POST['old_news_id'];
  $old_news_image_name = $_POST['old_news_image_name'];
  $news_title = $_POST['news_title'];
  $news_author = $_POST['news_author'];
  $news_date = $_POST['news_date'];
  $news_details = $_POST['news_details'];
  $our_uploaded_image_file = $_FILES['news_image'];
  $our_uploaded_image_name = $our_uploaded_image_file['name'];

  $after_explode = explode(".", $our_uploaded_image_name);
  $our_uploaded_image_extension = end($after_explode);

  if($old_news_image_name != "default_news_photo.jpg"){
    unlink('uploads/news_image/'.$old_news_image_name);
  }

  $new_image_name = $old_news_id.".".$our_uploaded_image_extension;
  $our_uploaded_image_location = "uploads/news_image/".$new_image_name;
  $temporary_location = $our_uploaded_image_file['tmp_name'];
  move_uploaded_file($temporary_location, $our_uploaded_image_location);
  $update_query = "UPDATE news SET news_title = '$news_title', news_author = '$news_author', news_date = '$news_date', news_details = '$news_details', news_image = '$new_image_name' WHERE id = $old_news_id";
  mysqli_query($database_connection, $update_query);
  $_SESSION['update_news_message'] = "Your news updated successfully";
  header('location: addnews.php');


 ?>
