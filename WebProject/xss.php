
<?php
  include_once 'header.php';
?>

<?php
function XSSProtection($string) {
    
  echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
  }
  
?>

<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
      <?php 
     
     echo('XSS Example: <script>alert("Javascript Alert");</script>');
     XSSProtection('XSS Example: <script>alert("Javascript Alert");</script>');
      ?>
  </body>
</html>

<?php
  include_once 'footer.php';
?>

