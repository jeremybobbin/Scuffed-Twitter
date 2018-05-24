<?php
if (isset($_COOKIE["username"])) {
  unset($_COOKIE["username"]);
  setcookie("username", 0);
}
header("Location:index.php");
?>
