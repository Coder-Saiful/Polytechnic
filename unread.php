<?php

  require_once 'db.php';

  $contact_id = $_GET['contact_id'];

  $update_query = "UPDATE contacts SET read_status = 2 WHERE id = $contact_id";
  mysqli_query($database_connection, $update_query);
  header('location: contactmessage.php');

 ?>
