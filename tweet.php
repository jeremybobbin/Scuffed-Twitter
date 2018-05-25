<?php
function renderTweet($author, $text, $date, $likes, $id) {
  return "<div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h5 class='card-title'>$author</h5>
              <p class='card-text'>$text</p>
              <a href='profile.php?username=$author' class='card-link'>$author</a>
              <a href='like.php?tweetId=$id' class='card-link'>Like</a>
            </div>
          </div>";
}
?>
