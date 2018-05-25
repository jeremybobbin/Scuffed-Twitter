<?php
$config = [
  'servername' => "localhost",
  'username' => "twitter",
  'password' => "password",
  'dbname' => "twitter"
];
echo "<h1>Home Page</h1>";

try {
    $db = new PDO("mysql:host=" . $config['servername'] . ';' .
                  "dbname=" . $config['username'],
                  $config['username'],
                  $config['password']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}
?>
