<?php

namespace App\Http\Controllers\Scouts;

use App\Http\Controllers\Controller;
use App\Repositories\PatrolRepository;
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

        return view('scouts.main')->with('scouts', $scouts)
            ->with('filter', 0);
    }

    public function showScout(Request $request, $id)
    {
        $scout = $this->scoutRepository->get($id);
        $parents = $this->scoutRepository->getParents($id);

        return view('scouts.show')->with('scout', $scout)
            ->with('parents', $parents);
    }

    public function filterList(Request $request, $nb)
    {
        $scoutsFiltered = $this->scoutRepository->filter($nb);

        return view('scouts.main')->with('scouts', $scoutsFiltered)
            ->with('filter', $nb);
    }
}