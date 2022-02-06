<?php

  session_start();
  require_once 'db.php';

  $guest_name = $_POST['guest_name'];
  $guest_email = $_POST['guest_email'];
  $guest_subject = $_POST['guest_subject'];
  $guest_message = $_POST['guest_message'];

  $insert_contact_query = "INSERT INTO contacts(guest_name, guest_email, guest_subject, guest_message) VALUES ('$guest_name', '$guest_email', '$guest_subject', '$guest_message')";
  mysqli_query($database_connection, $insert_contact_query);
  $_SESSION['insert_contact_message'] = "Your message sent successfully";
  header('location: contact.php');

 ?>
