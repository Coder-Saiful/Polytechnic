<?php

  session_start();
  require_once 'db.php';

  $departments_id = $_GET['departments_id'];

  $delete_departments_query = "DELETE FROM departments WHERE id = $departments_id";
  mysqli_query($database_connection, $delete_departments_query);
  $_SESSION['delete_departments_message'] = "Your departments deleted successfully";
  header('location: adddepartments.php');

 ?>
