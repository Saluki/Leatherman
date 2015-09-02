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