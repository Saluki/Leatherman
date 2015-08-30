<?php

namespace App\Console\Commands;

use App\Repositories\UserRepository;
use Illuminate\Console\Command;
use App\Exceptions\RepositoryException;
use App;

class LeathermanRegister extends Command
{
    protected $signature = 'leatherman:register';
    protected $description = 'Register a new Leatherman user';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $userData = [];

        $userData['name'] = $this->ask('Name');
        $userData['email'] = $this->ask('Email');
        $userData['password'] = $this->secret('Password');

        $repository = new UserRepository(App::getInstance());

        try {
            $repository->store($userData);
            $this->info('User created.');
        }
        catch(RepositoryException $e) {

        }
    }
}
