<?php

  session_start();
  require_once 'db.php';

  $news_id = $_GET['news_id'];
  $news_image_name = $_GET['news_image_name'];

  if($news_image_name == "default_news_photo.jpg"){
    $update_query = "DELETE FROM news WHERE id = $news_id";
    mysqli_query($database_connection, $update_query);
    $_SESSION['delete_news_message'] = "Your news deleted successfully";
    header('location: addnews.php');
  }else{
    $update_query = "DELETE FROM news WHERE id = $news_id";
    mysqli_query($database_connection, $update_query);
    unlink('uploads/news_image/'.$news_image_name);
    $_SESSION['delete_news_message'] = "Your news deleted successfully";
    header('location: addnews.php');
  }

 ?>
