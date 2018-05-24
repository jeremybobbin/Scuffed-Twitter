<?php

//Returns array of users
function getAllUsers() {
  $sqlString = "SELECT username FROM users";
  include 'connection.php';
  try {
    $results = $db->query($sqlString);
    return ($results->fetchAll(PDO::FETCH_COLUMN, 0));
  } catch(Exception $e) {
    echo $e->getMessage();
  }
}

function createUser($username) {
  $sqlString = 'INSERT INTO users (username) VALUES ' . "('$username');";
  include 'connection.php';
  try {
    $db->query("$sqlString");
    return true;
  } catch(Exception $e) {
    echo $e->getMessage();
    return false;
  }
}

function userExists($username) {
  $sqlString = "SELECT 'id' FROM users WHERE username = '$username'";
  include 'connection.php';
  try {
    $results = $db->query("$sqlString");
    if ($results->fetch(PDO::FETCH_ASSOC)) {
      return true;
    }
    return false;
  } catch(Exception $e) {
    echo $e->getMessage() . $sqlString;
  }
}

function postStatus($username, $text) {
  $sqlString = "SELECT id FROM users WHERE username = $username";
}
?>
