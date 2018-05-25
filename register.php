<?php
include 'header.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include 'functions.php';
  $username = htmlspecialchars($_POST["username"]);
  if(createUser($username)) {
    setcookie("username", $username);
    header("Location:index.php");
  } else {
    echo "<h1>That name's taken.";
  }
}
?>

<form method="post" action="register.php">
  <label for=username>Username:
    <input type="text" name="username" id="username"/>
  </label>
</form>

<?php include 'footer.php' ?>
