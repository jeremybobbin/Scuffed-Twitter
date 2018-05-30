<?php

class DbObject {
  private $id;
  private $creationDate;

  public function __construct($id, $creationDate) {
    $this->id = $id;
    $this->creationDate = $creationDate;
  }

  public function getId() {
    return $this->id;
  }

  public function getCreationDate() {
    return $this->creationDate;
  }
}
?>
