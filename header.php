<?php
  session_start(); 
  include_once 'includes/functions.inc.php';
?>
<!--The functions connection above will be imperitive for the signup/login page-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WebSite Project</title>

    <!--Link for font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Links to my css sheets - used for styles and to make the website more neat.-->
    <link rel="stylesheet" href="..\Test\css\reset.css">
    <link rel="stylesheet" href="..\Test\css\style.css">

  </head>
  <body>
    <!--The background image will be on all pages linked to this header - image quality is PNG (lossless) to keep the background visually appealing-->
  <style>
        body {
        background-image: url('websitebackground.png');
        }
    </style>

    <!--Navigation bar - appropriate names to make navigation easier-->
    <nav>
      <div class="wrapper">
        <a href="index.php"><img src="img/garfield.jpg" alt="Blogs logo"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="information.php">Information</a></li>
          <li><a href="contacts.php">Contacts</a></li>
          <li><a href="termsofservice.php">Terms Of Service</a></li>
          
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile Page</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>


<div class="wrapper">
