<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Exception;

class MailingRepository extends Repository
{
    function getModelName()
    {
        return 'App\Models\Scout';
    }

    public function getCompleteMailing()
    {
        try {

            $scoutsMailing = $this->model->select('email')->where('email', '!=', '');
            $parentsMailing = \DB::table('parents')->select('email')->where('email', '!=', '');

            $mailing = $scoutsMailing->union($parentsMailing)->get();
        }
        catch(Exception $e) {
            throw new RepositoryException('Database error: '.$e->getMessage());
        }

        return $mailing;
    }
}