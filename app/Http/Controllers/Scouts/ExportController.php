<?php

namespace App\Http\Controllers\Scouts;

use App\Http\Controllers\Controller;
use Request;

class ExportController extends Controller
{
    public function __construct()
    {

    }

    public function exportScouts(Request $request)
    {
        return "Exporting scouts";
    }

    public function exportAddresses(Request $request)
    {
        return "Exporting addresses";
    }
}