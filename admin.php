<?php
session_start();

include_once "config.php";
include_once "controllers/BaseController.php";
include_once "models/Model.php";

$type = isset($_GET["type"]) ? $_GET["type"] : "";
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
$controllerClass = "{$controller}Controller";

if ($type == 'auth') {
  $controller = "controllers/auth/{$controller}Controller.php";
  include_once $controller;
  new $controllerClass();
} else {
  if (!isset($_SESSION["user"])) {
    include_once "controllers/auth/LoginController.php";
    new LoginController();
  } else {
    $controller = "controllers/admin/{$controller}Controller.php";
    if ($_SESSION['user']->permission == 1) {
      if (file_exists($controller)) {
        include_once $controller;
        new $controllerClass();
      } else {
        include_once "controllers/AdminController.php";
        new AdminController();
      }
    } else {
      include_once "controllers/HomeController.php";
      new HomeController();
    }
  }
}