
<?php
  include_once 'header.php';
?>

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php

if (!isset($_POST["token"]) || !isset($_SESSION["token"]) || !isset($_SESSION["token-expire"])) {
  exit("Token is not set!");
}
 

if ($_SESSION["token"]==$_POST["token"]) {
  if (time() >= $_SESSION["token-expire"]) {
    exit("Token expired. Please reload form.");
  }
  else {
    unset($_SESSION["token"]);
    unset($_SESSION["token-expire"]);
    echo "OK";
  }
}

else { exit("INVALID TOKEN"); }
?>
