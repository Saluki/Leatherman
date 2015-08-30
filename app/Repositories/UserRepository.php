<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Exception;

class UserRepository extends Repository
{
    function getModelName()
    {
        return 'App\Models\User';
    }

    public function store(array $data)
    {
        try {
            $this->model->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        }
        catch(Exception $e) {
            throw new RepositoryException($e);
        }
    }
}