<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PortfolioDAO.php';
require_once __DIR__ . '/../dao/TestDAO.php';

class PortfolioController extends Controller {

  function __construct() {
    $this->portfolioDAO = new PortfolioDAO();
    $this->testDAO = new TestDAO();
  }

  public function index() {

  }

  public function about() {

  }

  public function contact() {

  }

  public function work() {

  }

  // public function test() {
  //   $testItems = $this->testDAO->selectTestITems();

  //   $this->set('title', "test");
  //   $this->set('testItems', $testItems);

  //   if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

  //     header('Content-Type: application/json');
  //     echo json_encode($players);
  //     exit();
  //   }
  // }
}
