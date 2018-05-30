<?php

require 'DbObject.php';

class Tweet extends DbObject {
  private $author;
  private $text;
  private $likeCount;

  public function __construct($author, $text, $likeCount, $creationDate = NULL, $id = NULL) {
    parent::__construct($id, $creationDate);
    $this->author = $author;
    $this->text = $text;
    $this->likeCount = $likeCount;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getText() {
    return $this->text;
  }

  public function getLikeCount() {
    return $this->likeCount;
  }

  public function render() {
    echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>"
          . "<div class='d-flex w-100 justify-content-between'>"
            . "<h5 class='mb-1'>" . $this->author . "</h5>"
            . '<small>' . $this->getCreationDate() . '</small></div>'
          . "<p class='mb-1'>" . $this->text . "</p></a>";
  }
}

?>
