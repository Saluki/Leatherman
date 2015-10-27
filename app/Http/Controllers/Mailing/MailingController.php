<?php

namespace App\Http\Controllers\Mailing;

use App\Http\Controllers\Controller;
use App\Repositories\MailingRepository;

class MailingController extends Controller
{
    public function showDashboard(MailingRepository $mailingRepository)
    {
        $mailing = $mailingRepository->getCompleteMailing();
        return view('mailing.main')->with('mailing', $mailing);
    }
}