<?php

namespace App\Http\Controllers\Scouts;

use App\Exceptions\RepositoryException;
use App\Http\Controllers\Controller;
use App\Repositories\PatrolRepository;
use App\Repositories\ScoutRepository;
use Illuminate\Http\Request;

// Daman was here

class EditController extends Controller
{
    protected $scoutRepository;

    public function __construct(ScoutRepository $scoutRepository)
    {
        $this->scoutRepository = $scoutRepository;
    }

    public function showEditForm($scoutId, PatrolRepository $patrolRepository)
    {
        $scout = $this->scoutRepository->get($scoutId);

        return view('scouts.edit')->with('scout', $scout)
            ->with('patrols', $patrolRepository->all());
    }

    public function updateScout($scoutId, Request $request)
    {
        try {
            $this->scoutRepository->update($scoutId, $request->all());
        }
        catch(RepositoryException $e) {
            return $e->getMessage();
        }

        return redirect('app/scouts/'.$scoutId);
    }
}
