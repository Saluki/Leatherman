<?php

namespace App\Http\Controllers\Patrols;

use App\Http\Controllers\Controller;
use App\Repositories\PatrolRepository;
use Request;

class PatrolController extends Controller {

    protected $patrolRepository;

    public function __construct(PatrolRepository $patrolRepository)
    {
        $this->patrolRepository = $patrolRepository;
    }

    public function showAll(Request $request)
    {
        $patrols = $this->patrolRepository->all();

        return view('patrols.main')->with('patrols', $patrols);
    }

}