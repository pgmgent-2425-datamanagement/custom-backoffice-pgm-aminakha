<?php

namespace App\Controllers;
use App\Models\Exercise;
use App\Models\Exercise_type;

class EditPageController extends BaseController {

   
    public static function edit($id) {
        $foundExercise = Exercise::find($id);
        self::loadView('edit-page', [
            'title' => 'Edit page',
            'foundExercise' => $foundExercise
        ]);
       
      
    } 
}