<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view()
    {
        return view('dashboard_contents/user');
    }
}
