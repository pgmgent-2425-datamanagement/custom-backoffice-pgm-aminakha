<?php

namespace App\Controllers;

use App\Models\User;

class UserPageController extends BaseController {

    public static function index () {
        $users = User::all();
        self::loadView('/userPage', [
            'title' => 'Users',
            'users' => $users
        ]);
    }

}