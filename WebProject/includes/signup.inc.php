<?php


if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"]; 
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  //XSS Protection
  $name = htmlspecialchars($name);
  $pwd = htmlspecialchars($pwd);
  //Authentication

 
  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  
  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	// Username must match the prerequisites otherwise use will get error: =invaliduid
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }
  // Email must match the prerequisite of having a valid email: 123@gmail.com otherwise error: invalidemail 
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
		exit();
  }
  // Passwords must match  the prerequisite; otherwise the user gets error: passworddontmatch?
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  // Username must match the prerequisites; username gets checked through my database to see i fthe username already exists. Otherwise use will get error: =invaliduid
  if (uidExists($conn, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }

  // 

  // Data will be inserted into the database if there are no errors
  createUser($conn, $name, $email, $username, $pwd);

} else {
	header("location: ../signup.php");
    exit();
}
