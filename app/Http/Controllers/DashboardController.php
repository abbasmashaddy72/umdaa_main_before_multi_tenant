<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Dashboard');
    }

    public function index()
    {
        return view('dashboard');
    }
}
