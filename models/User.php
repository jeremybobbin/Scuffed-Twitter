<?php

require 'DbObject.php';

class User extends DbObject {
  private $username;

  public function __construct($username, $creationDate = NULL, $id = NULL) {
    parent::__construct($id, $creationDate);
    $this->username = $username;
  }

  public function getUsername() {
    return $this->username;
  }

}
?>
