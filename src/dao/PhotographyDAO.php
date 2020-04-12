<?php

require_once( __DIR__ . '/DAO.php');

class PhotographyDAO extends DAO {

  public function selectImages(){
    $sql = "SELECT * FROM `images`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


}
