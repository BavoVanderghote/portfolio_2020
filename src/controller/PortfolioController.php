<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PortfolioDAO.php';
require_once __DIR__ . '/../dao/PhotographyDAO.php';

class PortfolioController extends Controller {

  function __construct() {
    $this->portfolioDAO = new PortfolioDAO();
    $this->photographyDAO = new PhotographyDAO();
  }

  public function index() {
    $this->set('title', "Welcome!");
  }

  public function about() {
    $images = $this->photographyDAO->selectImages();

    $this->set('title', "Hi, I'm Bavo");
    $this->set('images', $images);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($images);
      exit();
    }
  }

  public function contact() {
    $this->set('title', "Hello, how are you?");
  }

  public function work() {
    $projects = $this->portfolioDAO->selectProjects();

    $this->set('title', "I made this");
    $this->set('projects', $projects);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($images);
      exit();
    }
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
