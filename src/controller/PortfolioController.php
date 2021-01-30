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
    $this->set('description', "Bavo Vanderghote is a graphic designer, front end developer and the occasional motionographer minding his own business in his little internet corner.");
  }

  public function about() {
    $images = $this->photographyDAO->selectImages();

    $this->set('title', "Hi, I'm Bavo");
    $this->set('description', "Have a gander at some of my favourite photographs and take a peek into my personal life.");
    $this->set('images', $images);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($images);
      exit();
    }
  }

  public function contact() {
    $this->set('title', "Hello, how are you?");
    $this->set('description', "I don't know you yet, or maybe I do, come say hi!");
  }

  public function work() {
    $projects = $this->portfolioDAO->selectProjects();

    $this->set('title', "I made this");
    $this->set('description', "I make stuff. Mainly digital products and motion films, but there's more to come!");
    $this->set('projects', $projects);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($images);
      exit();
    }
  }

  public function detail() {
    if(empty($_GET['id']) || !$work = $this->portfolioDAO->selectById($_GET['id'])) {
      header('Location: index.php?bavo-says=i-made-this');
    }
    if(empty($_GET['id']) || !$tools = $this->portfolioDAO->selectToolsById($_GET['id'])) {
      header('Location: index.php?bavo-says=i-made-this');
    }

    // if(!empty($_GET['id']) || !$ratings = $this->ratingDAO->selectByTourId($_GET['id'])) {
    //   $this->_handleGetRating($_GET['id']);
    // }

    $this->set('title', $work['name']);
    $this->set('project', $work);
    $this->set('tools', $tools);

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
