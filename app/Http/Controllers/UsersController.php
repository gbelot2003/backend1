<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * create method
     */
    public function create()
    {
        return Inertia::render('Users/UserAdd');
    }

}
