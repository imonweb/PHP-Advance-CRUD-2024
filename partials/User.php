<?php 
require_once 'Database.php';

class User extends Database 
{
  protected $tableName = "usertable";

  // function to add user 
  public function add($data)
  {
    if(!empty($data)){
      $fields = $placeholder=[];
      foreach($data as $field => $value){
        $fields[] = $field;
        $placeholder[] = ":{field}";
      }
    }
    // $sql = "INSERT INTO {$this->tableName} (name,email,mobile) VALUES (:name, :email, :mobile)";
    $sql = "INSERT INTO {$this->tableName} (". implode(',', $fields). ") VALUES (". implode(',', $placeholder). ")";

    $stmt = $this->conn->prepare($sql);
    try {
      $this->conn->beginTransaction();
      $stmt->execute($data);
      $lastInsertId = $this->conn->lastInsertId();
      $this->conn->commit();
      return $lastInsertId;

    } catch(PDOException $e) {
      echo "Error: ".$e->getMessage();
      $this->conn->rollBack();
    }
  }


  // function to get rows
  public function getRows($start=0, $limit=4)
  {
    $sql = "SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start}, {$limit}";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
      $results = [];
    }
    return $results;
  }


  // function to get single row 


  // function count number of rows 


  // function to upload photo


  // function to update


  // function to delete


  // function for search
}