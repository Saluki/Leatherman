<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Exception;

class ScoutRepository extends Repository
{
    function getModelName()
    {
        return 'App\Models\Scout';
    }

    public function all()
    {
        try {
            $allScouts = $this->model->orderBy('lastname')->get();
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error');
        }

        return $allScouts;
    }

    public function excelData()
    {
        try {
            $allScouts = $this->model->select('lastname as Nom', 'firstname as Prenom',
                'totem as Totem', 'quali as Quali',
                'scout_year as Annee', 'birthday as Naissance',
                'patrol_name as Patrouille',
                'email as Email', 'phone as Telephone')
                ->patrol()
                ->orderBy('lastname')
                ->get();
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error: '.$e->getMessage());
        }

        return $allScouts;
    }

    public function store(array $data)
    {
        try {
            $scout = $this->model->create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'birthday' => $data['birthday'],
                'address_id' => $data['address_id'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'totem' => $data['totem'],
                'quali' => $data['quali'],
                'scout_year' => intval($data['scout_year']),
                'patrol_id' => intval($data['patrol_id']),
                'did_promise' => isset($data['did_promise']) ? true : false
            ]);
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error:'. $e->getMessage());
        }

        return $scout;
    }

    public function update($id, array $data)
    {
        try {
            $this->model->where('scout_id', '=', $id)->update([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'birthday' => $data['birthday'],
                //'address_id' => $data['address_id'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'totem' => $data['totem'],
                'quali' => $data['quali'],
                'scout_year' => intval($data['scout_year']),
                'patrol_id' => intval($data['patrol_id']),
                'did_promise' => isset($data['did_promise']) ? true : false
            ]);
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error:'. $e->getMessage());
        }
    }

    public function filter($nb)
    {
        $this->validateID($nb);

        try {
            $scoutsFiltered = $this->model->where('scout_year', '=', $nb)->orderBy('lastname')->get();
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error');
        }

        return $scoutsFiltered;
    }

    public function get($id)
    {
        $this->validateID($id);

        try {
            $scouts = $this->model->address()->patrol()->findOrFail($id);
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error');
        }

        return $scouts;
    }

    public function getParents($id)
    {
        $this->validateID($id);

        try {
            $parents = $this->model->parents()->where('scouts.scout_id', '=', $id)->get();
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error');
        }

        return $parents;
    }
}