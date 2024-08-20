<?php 
 
class Database
{
  private $dbserver = "localhost";
  private $dbuser = "imon";
  private $dbpassword = "p@ssw0rd";
  private $dbname = "php_crud_2024";
  protected $conn;

  // constructor 
  public function __construct(){
    try {

      $dsn = "mysql:host={$this->dbserver}; dbnama={$this->dbname}; charset=utf8";
      $options = array(PDO::ATTR_PERSISTENT);
      $this->conn = new PDO($dsn, $this->dbuser, $this->dbpassword, $options);
      // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // return $this->conn;
    } catch (PDOException $e) {
      echo "Could not connect to database" . $e->getMessage();
    }
  }
}
 
/*
class Database {
  // DB Params
  private $host = 'localhost';
  private $db_name = 'php_crud_2024sdf';
  private $username = 'imon';
  private $password = 'p@ssw0rd';
  private $conn;

  // DB Connect
  public function connect() {
    $this->conn = null;

    try {
      $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'Connection Error: ' . $e->getMessage();
    }

    return $this->conn;
  }
}
*/