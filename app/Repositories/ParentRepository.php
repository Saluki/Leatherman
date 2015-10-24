<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Exception;

class ParentRepository extends Repository
{
    function getModelName()
    {
        return 'App\Models\Parents';
    }

    public function store(array $data)
    {
        try {
            $link = $this->model->create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'mobile' => $data['mobile'],
                'address_id' => $data['address_id']
            ]);
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error:'.$e->getMessage());
        }

        return $link;
    }
}