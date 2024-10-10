<?php

namespace App\Controllers;

use App\Models\Exercise;

class ExerciseController extends BaseController {

    
    public static function edit($id) {

        $exercise = Exercise::find($id);
        print_r($exercise);
    } 
}