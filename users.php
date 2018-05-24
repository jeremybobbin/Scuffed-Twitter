<?php
include 'functions.php';
$results = getAllUsers();
foreach ($results as $username) {
  echo "<h1>$username</h1>";
}
?>
