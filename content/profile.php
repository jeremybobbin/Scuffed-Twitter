<?php
include '../tweet/functions.php';
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['username'])) {
  $tweets = getLatestTweetsByUserId($_GET['username']);
} else {
  header("Location:index.php");
}
?>
<div class="list-group">
  <?php foreach($tweets as $tweet) {
    $tweet->render;
  }?>
</div>
