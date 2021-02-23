<?php

namespace App\Http\Controllers;

use Cache;
use App\User;

/**
 * Show a basic welcome page, loading a list of users 
 * from either the cache or the database. 
 */
class WelcomeController extends Controller
{

    public function index()
    {
        $users = Cache::remember('all-users', 1, function () {
            return User::all();
        });
        
        return view('welcome', compact('users'));
    }
}
