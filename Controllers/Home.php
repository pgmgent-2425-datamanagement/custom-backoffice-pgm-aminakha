<?php

namespace App\Controllers;

use App\Models\Exercise;

class HomeController extends BaseController {

    public static function index () {
      $difficultyData = Exercise::getDifficultyData();
       self::loadView('/home', [
            'title' => 'Home page',
            'difficultyData' => $difficultyData
                 ]);
    }

}