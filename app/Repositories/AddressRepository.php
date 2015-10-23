<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Exception;

class AddressRepository extends Repository
{
    function getModelName()
    {
        return 'App\Models\Address';
    }

    public function store(array $data)
    {
        try {
            $address = $this->model->create([
                'street' => $data['street'],
                'number' => intval($data['number']),
                'box' => intval($data['box']),
                'locality' => $data['locality'],
                'zip_code' => $data['zip_code']
            ]);
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error:'.$e->getMessage());
        }

        return $address;
    }
}