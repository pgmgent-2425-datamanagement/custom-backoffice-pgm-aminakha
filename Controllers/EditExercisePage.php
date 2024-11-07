<?php

namespace App\Controllers;
use App\Models\Exercise;
use App\Models\Exercise_type;

class EditPageController extends BaseController {

   
    public static function edit($id) {
        $foundExercise = Exercise::find($id);
        $types = Exercise_type::all();

        self::loadView('/exercise/changeExercise/edit-page-exercise', [
            'title' => 'Edit Exercise',
            'foundExercise' => $foundExercise,
            'types' => $types
        ]);
       
      
    } 
}