<?php

namespace App\Http\Controllers\Cms;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('cms.dashboard.index');
    }
}
