<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend_asset/css/font-awesome.min.css">

    <title>Registration Form</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">WTI-WEB-DEV</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
      <?php
        if(isset($_SESSION['logged_in_user_name'])){
          ?>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php" target="_blank">Visit-Website</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="editprofile.php">Edit-Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="changepass.php">Change-Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addnotice.php">Add Notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addabout.php">Add About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addslider.php">Add Slider</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactmessage.php">View Contact Message</a>
            </li>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Add Option
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="addpmessage.php">Add P. Message</a>
                <a class="dropdown-item" href="adddepartments.php">Add Departments</a>
                <a class="dropdown-item" href="addstat.php">Add Statistics</a>
                <a class="dropdown-item" href="addnews.php">Add News</a>
                <a class="dropdown-item" href="addgallery.php">Add Gallery</a>
                <a class="dropdown-item" href="settings.php">General Settings</a>
              </div>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
          <?php
        }
       ?>
     </div>
     </nav>
