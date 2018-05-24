<?php
$servername = "localhost";
$username = "twitter";
$password = "password";
$dbname = "twitter";
echo "<h1>Home Page</h1>";

try {
    $db = new PDO("mysql:host=$servername;dbname=twitter", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}
?>
