<?php?>

<h1>Home</h1>
<?php if($_COOKIE["username"]) { ?>
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
    postStatus($_COOKIE["username"], $_POST['status']);
}
?>
<a href="users.php">Users</a>
