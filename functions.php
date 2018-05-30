<?php

function isLoggedIn() {
  return (isset($_COOKIE['username']) && $_COOKIE['username']);
}

function renderLogButton() {
  if(isLoggedIn()) {
    $html = '"logout.php">Log Out';
  } else {
    $html = '"login.php">Log In';
  }
  return "<a class='nav-link' href=$html</a>";
}

function renderContent() {
  $page = isset( $_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'home';
  $path = '/content' . substr($page, strpos($page, '/', 1));


  if (file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
      include $path;
  } else {
      echo $page. "    !    ";
      echo $path;
  }
}

function run() {
  include 'template/template.php';
}
