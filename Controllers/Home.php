<?php

namespace App\Controllers;

use App\Models\Exercise;
use App\Models\User;

class HomeController extends BaseController {

    public static function index () {
      $difficultyData = Exercise::getDifficultyData();
      $genderData = User::getGenderData();
       self::loadView('/home', [
            'title' => 'Home page',
            'difficultyData' => $difficultyData,
            'genderData' => $genderData
                 ]);
    }

}