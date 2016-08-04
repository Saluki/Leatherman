<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Models\Scout;

class MapController extends Controller
{
    public function showMap()
    {
        $scouts = \DB::select('SELECT s.firstname, s.lastname, a.street, a.number, a.box, a.locality, a.zip_code'
                    .' FROM scouts s'
                    .' LEFT JOIN addresses a ON s.address_id = a.address_id');

        return view('map.map')->with('scouts', $scouts);
    }
}