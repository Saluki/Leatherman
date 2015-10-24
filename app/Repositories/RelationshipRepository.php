<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Exception;

class RelationshipRepository extends Repository
{
    function getModelName()
    {
        return 'App\Models\Relationship';
    }

    public function store(array $data)
    {
        try {
            $relationship = $this->model->create([
                'scout_id' => $data['scout_id'],
                'parent_id' => $data['parent_id']
            ]);
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error:'.$e->getMessage());
        }

        return $relationship;
    }
}