  <?php
  session_start();

  include_once "config.php";
  include_once "controllers/BaseController.php";
  include_once "models/Model.php";

  $controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
  $controllerClass = "{$controller}Controller";
  $controller = "controllers/client/{$controller}Controller.php";

  if (file_exists($controller)) {
    include_once $controller;
    new $controllerClass();
  } else {
    include_once "controllers/HomeController.php";
    new HomeController();
  }