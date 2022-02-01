<?php

namespace App\Repositories;

use App\Models\User;

class UserRepo extends BaseRepo
{
    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function users(){
        return $this->model->all();
    }
}
