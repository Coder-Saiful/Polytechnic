<?php

  session_start();
  require_once 'db.php';

  $contact_id = $_GET['contact_id'];

  $delete_contact_query = "DELETE FROM contacts WHERE id = $contact_id";
  mysqli_query($database_connection, $delete_contact_query);
  $_SESSION['delete_contact_message'] = "Your message deleted successfully";
  header('location: contactmessage.php');

 ?>
