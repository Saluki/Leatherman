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
}