<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\ScoutRepository;
use Request;

class DashboardController extends Controller
{
    protected $scoutRepository;

    public function __construct(ScoutRepository $scoutRepository)
    {
        $this->scoutRepository = $scoutRepository;
    }

    public function showDashboard(Request $request)
    {
        $scoutsNumber = count($this->scoutRepository->all());

        return view('dashboard.main')->with('scoutsNumber', $scoutsNumber);
    }
}