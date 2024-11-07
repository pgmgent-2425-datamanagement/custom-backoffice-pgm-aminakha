<?php

namespace App\Controllers;

use App\Models\Exercise;

class HomeController extends BaseController {

    public static function index () {
        $difficultyData = Exercise::select('difficulty',DB::raw('count(*) as exercise_count'))
        ->groupBy('difficulty')
        ->orderByRaw("FIELD(difficulty, 'Hard', 'Medium', 'Easy') DESC")
        ->get();

        self::loadView('/home', [
            'title' => 'Homepage',
            'difficultyData' => $difficultyData
        ]);
    }

}