<?php

namespace App\Http\Controllers\Scouts;

use App\Http\Controllers\Controller;
use Request;

class RegisterController extends Controller
{
    public function __construct()
    {

    }

    public function showScoutForm(Request $request)
    {
        return "Adding scout";
    }

    public function storeScout(Request $request)
    {
        return "Storing scout";
    }

    public function showParentsForm(Request $request)
    {
        return "Adding scout";
    }

    public function storeParents(Request $request)
    {
        return "Storing scout";
    }
}