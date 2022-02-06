<?php

  session_start();
  require_once 'db.php';

  $departments_id = $_POST['id'];
  $dept_name = $_POST['dept_name'];
  $dept_icon = $_POST['dept_icon'];
  $feature_one = $_POST['feature_one'];
  $feature_two = $_POST['feature_two'];
  $feature_three = $_POST['feature_three'];

  $update_departments_query = "UPDATE departments SET dept_name = '$dept_name', dept_icon = '$dept_icon', feature_one = '$feature_one', feature_two = '$feature_two', feature_three = '$feature_three' WHERE id = $departments_id";
  mysqli_query($database_connection, $update_departments_query);
  $_SESSION['update_departments_message'] = "Your departments updated successfully";
  header('location: adddepartments.php');

 ?>
