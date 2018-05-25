<?php
include 'header.php';
?>
<a href="index.php" style="font-size: 5em;">Home</a>
<?php
if(isset($_COOKIE["username"]) && $_COOKIE["username"]) { ?>
  <a href="logout.php">Log Out</a>
  <form action="index.php" method="post">
    <label for="status">
      <textarea name="status" id="status"></textarea>
      <button type="submit">Submit</button>
    </label>
  </form>
<?php } else { ?>
  <a href="login.php">Log In</a>
  <a href="register.php">Register</a>
<?php }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_COOKIE["username"]) {
    include 'functions.php';
    $cookie = $_COOKIE["username"];
    postStatus($cookie, $_POST['status']);
}
?>
<a href="users.php">Users</a>
<a href="profile.php">Search a Guy.</a>
<?php
include 'footer.php';
?>
