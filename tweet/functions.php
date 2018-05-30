<?php
require '../config/Database.php';
require '../models/Tweet.php';
$db = connect();

function postTweet($userparam, $text) {
  $user = getUserByParam($userparam);
  $query = 'INSERT INTO tweets (userId, text) VALUES' . "($user->getId(), $text)";
  return $db->query($query);
}


function getTweetArrayFromSql($query) {
  $res = $db->query($query);
  $tweets = [];
  while($tweet = $res->fetch_assoc()) {
    $tweets[] = new Tweet(
      $tweet['username'],
      $tweet['text'],
      $tweet['likeCount'],
      $tweet['creationDate']);
  }
  return $tweets;
}

function getLatestTweetsByUserId($username, $count = 20, $offset = 0) {

  return getTweetArrayFromSql('SELECT username, text, likeCount, creationDate '
                            . 'FROM users JOIN tweets ON users.id = tweets.userID '
                            . 'WHERE username = '
                            . "$username"
                            . 'ORDER BY creationDate DESC'
                            . "LIMIT $count, $offset ; ");
}

function getLatestTweetsByUsersBeingFollowed($userId, $count = 20, $offset = 0) {

  return getTweetArrayFromSql('SELECT username, text, likeCount, creationDate '
                            . 'FROM users JOIN tweets ON users.Id = tweets.userId '
                            . 'WHERE userId IN '
                            . "(SELECT following FROM follows WHERE follower = $userId)"
                            . 'ORDER BY creationDate DESC '
                            . "LIMIT $count, $offset ; ");
}
