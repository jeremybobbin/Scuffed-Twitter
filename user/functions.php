<?php
require '../config/Database.php';
require '../models/User.php';
$db = connect();

//Get user by ID or username
function getUserByParam($param) {
  $query = "SELECT * FROM users WHERE ";
  $type = gettype($param);

  if ($type === 'integer') {
    $query .= "id = $param ";
  } elseif ($type === 'string') {
    $query .= "username = $param ";
  } else {
    throw new Error("The 'getUserByParam' function only takes either an integer or a string.");
  }
  $query .= "LIMIT 1;";

  $res = $mysqli->query($query)
  if ($res->num_rows > 0) {
    $user = $res->fetch_assoc();
    return new User($user['username'], $user['id'], $user['creation_date']);
  }
  return false;
}

function createUser($username) {
  $query = 'INSERT INTO users (username) VALUES ';
  $query .= "($username);";
  return $db->query($query);
}

function getNewestUsers($count = 20) {
  $query = 'SELECT username, creationDate '
            . 'FROM users ORDER BY creationDate DESC '
            . "LIMIT $count ;";

  $res = $db->query($query);
  $tweets = [];
  while($user = $res->fetch_assoc()) {
    $users[] = new User(
      $user['userId'],
      $user['creationDate']);
  }
  return tweets;
}

function follow($userParam, $userFollowingParam) {
  $user = getUserByParam($userParam);
  $uf = getUserByParam($userFollowingParam);
  $query = 'INSERT INTO follows (follower, following) VALUES '
         . '(' . $user->getId() ',' . $uf->getId() ');';
  return $db->query($query);
}

function unfollow($userParam, $userFollowingParam) {
  $user = getUserByParam($userParam);
  $uf = getUserByParam($userFollowingParam);
  $query = 'DELETE FROM follows WHERE'
         . 'follower = ' $user->getId() . ' '
         . 'AND following = ' . $uf->getId() . ';';
  return $db->query($query);
}

?>
