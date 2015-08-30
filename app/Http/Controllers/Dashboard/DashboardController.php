<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Request;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function showDashboard(Request $request)
    {
        return "Hello World";
    }
}