<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $news = [];
        return view('admin.dashboard.index', compact(['news']));
    }
}
