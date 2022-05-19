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
 
$_SESSION["token"] = bin2hex(random_bytes(32));
 
// Token Expiration
$_SESSION["token-expire"] = time() + 3600; // 1 hour token left
 
?>
<center>
<h2>This is an example of how CSRF tokens are  randomly generated.</h2> </p>
<form method="post" action="CSRFVerify.php">
  <input type="hidden" name="token" value="<?=$_SESSION["token"]?>"/>
  <input type="name" name="name" value=""/>
  <input type="submit" value="Submit!"/>
</form>


<?php
  include_once 'footer.php';
?>
