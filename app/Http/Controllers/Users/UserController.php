<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }
}
