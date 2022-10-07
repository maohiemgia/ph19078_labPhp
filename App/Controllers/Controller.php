<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Controller extends BaseController
{
     public function homePage()
     {
          $viewName = 'homepage.index';
          $data = [];

          return $this->render($viewName, $data);
     }
}
