<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view()
    {
        $users = User::all();
        return view('dashboard_contents/user', compact('users'));
    }
}
