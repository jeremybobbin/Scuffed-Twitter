<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  include 'functions.php';
  $posts = getPostsByName($_GET['username']);
  foreach($posts as $post) {
    echo '<p>' . $post['text'] . '</p>';
  }
} else {
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Search Users.</h1>
    <p class="lead">Use the search bar at the top right to find your friends!</p>
  </div>
</div>

<?php } ?>
