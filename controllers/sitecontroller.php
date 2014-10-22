<?php
namespace Controllers;

use Controllers\Controller;

class SiteController extends Controller {
  public function actionIndex() {
    $this->render("index", ["title" => "Index", "something" => "something"]);
  }
}
