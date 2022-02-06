<?php

  session_start();
  require_once 'db.php';

  $dept_name = $_POST['dept_name'];
  $dept_icon = $_POST['dept_icon'];
  $feature_one = $_POST['feature_one'];
  $feature_two = $_POST['feature_two'];
  $feature_three = $_POST['feature_three'];

  $insert_departments_query = "INSERT INTO departments(dept_name, dept_icon, feature_one, feature_two, feature_three) VALUES ('$dept_name', '$dept_icon', '$feature_one', '$feature_two', '$feature_three')";
  mysqli_query($database_connection, $insert_departments_query);
  $_SESSION['insert_departments_message'] = "Your departments added successfully";
  header('location: adddepartments.php');

 ?>
