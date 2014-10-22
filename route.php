<?php
use Controllers as Controllers;

class Route {
  public function __construct() {}

  public static function page404() {
    $controller = new Controllers\Controller;
    $controller->action404();
    die();
  }

  public static function route() {
    $arr = explode("/", $_SERVER["REQUEST_URI"]);
    $uri = array();
    foreach ($arr as $str) if (!empty($str)) $uri[] = $str; 
    if (count($uri) != 2)
      self::page404();
    foreach ($uri as &$str) $str = ucfirst($str);
    $uri[0] = "Controllers\\" . $uri[0] . "Controller";
    $uri[1] = "action" . $uri[1];
    if (class_exists($uri[0])) {
      $controller = new $uri[0];
      if (method_exists($controller, $uri[1]))
        $controller->$uri[1]();
      else
        self::page404();
    }
    else
      self::page404();
  }

}
