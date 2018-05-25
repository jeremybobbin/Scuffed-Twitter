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
    $results = $db->query($sqlString);
    if ($results->fetch(PDO::FETCH_ASSOC)) {
      return true;
    }
    return false;
  } catch(Exception $e) {
    echo $e->getMessage() . $sqlString;
  }
}

function getUserIdByName($username) {
  var_dump($username);
  include 'connection.php';
  $sqlString = "SELECT id FROM users WHERE username = '$username'";
  try {
    $result = $db->query($sqlString);
    return $result->fetch(PDO::FETCH_ASSOC)['id'];
  } catch(Exception $e) {
    echo $e->getMessage();
  }
}

function postStatus($username, $text) {
  include 'connection.php';
  $userId = getUserIdByName($username);
  $sqlString = 'INSERT INTO tweets (userId, text) VALUES' .
     "('$userId', '$text')";
  try {
    $db->exec($sqlString);
  } catch(Exception $e) {
    echo $e->getMessage();
  }
}

function getPostsByName($username) {
  include 'connection.php';
  $sqlString = "SELECT username, text, likes, date
                FROM users JOIN tweets ON users.id = tweets.userID
                WHERE users.username = '$username'";
  try {
    $results = $db->query($sqlString);
    return $results->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
?>
