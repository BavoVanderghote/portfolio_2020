<?php

require_once( __DIR__ . '/DAO.php');

class PortfolioDAO extends DAO {

  public function selectProjects(){
    $sql = "SELECT * FROM `projects` ORDER BY rating DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // public function search($term){
  //   $sql = "SELECT * FROM `players` where Name like :term limit 25";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':term','%'.$term.'%');
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  // public function selectById($id){
  //   $sql = "SELECT * FROM `players` WHERE `Id` = :id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }

  // public function selectTopPlayers($max=10){
  //   $sql = "SELECT * FROM `players` order by Overall desc limit :max";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':max', $max);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }


}
