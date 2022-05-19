<?php

session_start();
session_unset();
session_destroy();

header("location: login.php");
exit();
?>


<?php
  include_once 'footer.php';
?>
