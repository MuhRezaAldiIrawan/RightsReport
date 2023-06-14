<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'RightsReports | Dashboard';

        return view('pages.dashboard', compact('title'));
    }
}
