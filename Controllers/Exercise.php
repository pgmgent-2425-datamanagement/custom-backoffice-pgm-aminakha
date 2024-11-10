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
            return;
            
        }
        if(isset($_GET['order'])) {
            $order = $_GET['order'] === 'desc' ? 'desc' : 'asc'; // default to 'asc' if not 'desc'

            $exercises = Exercise::orderBy('name', $order);
            self::loadView('/exercise', [
                'title' => 'Exercises',
                'exercises' => $exercises
            ]);
return;
        }
        if(isset($_GET['filter'])) {
            $filter = $_GET['filter'];
            switch($filter) {
                case 'Easy':
                    $exercises = Exercise::where('difficulty', '=', $filter);
                    break;
                case 'Medium':
                    $exercises = Exercise::where('difficulty', '=', $filter);
                case 'Hard':
                    $exercises = Exercise::where('difficulty', '=', $filter);
                    break;
                default:
                    $exercises = Exercise::all();
            }
        }
            self::loadView('/exercise', [
                'title' => 'Exercises',
                'exercises' => $exercises
            ]);
        
    }

}