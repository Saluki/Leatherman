<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Exception;

class PatrolRepository extends Repository
{
    function getModelName()
    {
        return 'App\Models\Patrol';
    }

    public function all()
    {
        try {
            $allPatrols = $this->model->orderBy('patrol_name')->get();
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error: '.$e->getMessage());
        }

        return $allPatrols;
    }
}