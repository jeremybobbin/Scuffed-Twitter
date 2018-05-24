<form method="post" action="login.php">
  <label for="username">Your Username:
    <input type="text" name="username" id="username">
  </label>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include 'functions.php';
  $username = htmlspecialchars($_POST["username"]);
  if(userExists($username)) {
    setcookie("username", $username);
    header("Location:index.php");
  } else {
    echo "That username does not exist.";
  }
}
?>
