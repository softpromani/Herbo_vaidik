<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    function dashboard()
    {
        return view('Admin.dashboard');
    }
}
