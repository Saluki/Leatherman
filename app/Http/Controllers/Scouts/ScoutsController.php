<?php

namespace App\Http\Controllers\Scouts;

use App\Http\Controllers\Controller;
use App\Repositories\ScoutRepository;
use Request;

class ScoutsController extends Controller
{
    protected $scoutRepository;

    public function __construct(ScoutRepository $scoutRepository)
    {
        $this->scoutRepository = $scoutRepository;
    }

    public function showAll(Request $request)
    {
        $scouts = $this->scoutRepository->all();

        return view('scouts.main')->with('scouts', $scouts);
            //->with('annees', $this->countByYear($scouts) );
    }

    public function showScout(Request $request, $id)
    {
        return "Showing scout #$id";
    }

    private function countByYear($scouts) {

        $years = [0,0,0,0,0];

        foreach($scouts as $scout) {
            $years[$scout->annee]++;
        }

        return $years;
    }
}