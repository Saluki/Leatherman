<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\MailingRepository;
use App\Repositories\PatrolRepository;
use App\Repositories\ScoutRepository;
use Request;

class DashboardController extends Controller
{
    protected $scoutRepository;
    protected $patrolRepository;
    protected $mailingRepository;

    public function __construct(ScoutRepository $scoutRepository, PatrolRepository $patrolRepository, MailingRepository $mailingRepository)
    {
        $this->scoutRepository = $scoutRepository;
        $this->patrolRepository = $patrolRepository;
        $this->mailingRepository = $mailingRepository;
    }

    public function showDashboard(Request $request)
    {
        $scoutCount = count($this->scoutRepository->all());
        $patrolCount = count($this->patrolRepository->all());
        $mailingCount = count($this->mailingRepository->getCompleteMailing());

        return view('dashboard.main')
            ->with('scoutCount', $scoutCount)
            ->with('patrolCount', $patrolCount)
            ->with('mailingCount', $mailingCount);
    }
}