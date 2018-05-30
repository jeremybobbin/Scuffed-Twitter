<?php

class Database {
  private $host = 'localhost';
  private $username = 'twitter';
  private $password = 'password';
  private $dbname = 'twitter';
  private $conn;

  protected function connect() {
    $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
    if($this->conn->connect_errno) {
      throw new Exception("Failed to connect to MySQL: ("
                          . $mysqli->connect_errno . ") "
                          . $mysqli->connect_error);
    } else {
      return $this->conn;
    }
  }
}
?>
