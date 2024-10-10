<?php

namespace App\Controllers;

use App\Models\Exercise;

class HomeController extends BaseController {

    public static function index () {
        $exercises = Exercise::all();
      
      

        self::loadView('/home', [
            'title' => 'Homepage',
            'exercises' => $exercises
        ]);
    }

    public static function edit($id) {

        $exercise = Exercise::find($id);
        print_r($exercise);
    } 
}