<?php

namespace App\Controllers;

use App\Models\Exercise;

class ExercisePageController extends BaseController {

    public static function index () {
        $exercises = Exercise::all();
        
        if(isset($_GET['search'])) {
            $searchTerm = $_GET['search'] ?? "";
            $filteredExercise = Exercise::where('name', 'LIKE', '%' . $searchTerm . '%');

            self::loadView('/exercise', [
                'title' => 'Exercises',
                'exercises' => $filteredExercise
            ]);


            
        }
        

    }

}