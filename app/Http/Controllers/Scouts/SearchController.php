<?php

namespace App\Http\Controllers\Scouts;

use App\Http\Controllers\Controller;
use Request;

class SearchController extends Controller
{
    public function __construct()
    {

    }

    public function search(Request $request)
    {
        return "Searching scout";
    }

}