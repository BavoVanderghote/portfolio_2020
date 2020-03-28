<?php

require_once( __DIR__ . '/DAO.php');

class TestDAO extends DAO {

  public function selectTestItems(){
    $sql = "SELECT * FROM `test`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


}
