<?php

namespace App\Controllers;

use Framework\Controller;
use Framework\Viewer;

class Home extends Controller
{
  public function index()
  {
    $viewer = new Viewer;

    echo $this->viewer->render('shared/header.php', [
      'title' => 'Home'
    ]);

    echo $this->viewer->render('Home/index.php');
  }
}
