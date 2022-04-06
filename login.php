<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h1>Log In</h1>
  <div class="signup-form-form">
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="uid"  placeholder="Username or Email...">
      <input type="password" name="pwd" placeholder="Password...">
      <button type="submit" name="submit">Login!</button>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
