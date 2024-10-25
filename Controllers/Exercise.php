<?php

namespace App\Controllers;

use App\Models\Exercise;

class ExercisePageController extends BaseController {

    public static function index () {
        $exercises = Exercise::all();
        self::loadView('/exercise', [
            'title' => 'Exercises',
            'exercises' => $exercises
        ]);
    }

}