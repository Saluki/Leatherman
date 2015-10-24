<?php

namespace App\Http\Controllers\Scouts;

use App\Exceptions\RepositoryException;
use App\Http\Controllers\Controller;
use App\Repositories\AddressRepository;
use App\Repositories\ParentRepository;
use App\Repositories\PatrolRepository;
use App\Repositories\RelationshipRepository;
use App\Repositories\ScoutRepository;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    public function showScoutForm(Request $request, PatrolRepository $patrolRepository)
    {
        $allPatrols = $patrolRepository->all();
        return view('scouts.register')->with('patrols', $allPatrols);
    }

    public function storeScout(Request $request, AddressRepository $addressRepository, ScoutRepository $scoutRepository)
    {
        $requestData = $request->all();

        try {
            $address = $addressRepository->store($requestData);
            $requestData['address_id'] = $address->address_id;

            $scout = $scoutRepository->store($requestData);
        }
        catch(RepositoryException $e) {
            return "Something went wrong: ".$e->getMessage();
        }

        return redirect('app/scouts/'.$scout->scout_id);
    }

    public function storeParents(Request $request, ParentRepository $parentRepository, RelationshipRepository $relationshipRepository)
    {
        $scoutId = $request->get('scout_id');

        try {
            $link = $parentRepository->store($request->all());
            $relationshipRepository->store(['scout_id'=>$scoutId, 'parent_id'=>$link->parent_id]);
        }
        catch(RepositoryException $e) {
            return "Something went wrong: ".$e->getMessage();
        }

        return redirect('app/scouts/'.$scoutId);
    }
}