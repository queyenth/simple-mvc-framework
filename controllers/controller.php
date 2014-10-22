<?php
namespace Controllers;

class Controller {
  public function render($view, $data = NULL) {
    include_once('views/template.php');
  }

  public function action404() {
    $this->render("404", ["title" => "404 Page Not Found"]);
  }
}
