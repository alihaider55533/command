<?php

namespace App\Services;
use App\Repositorie\UserRepo;
class UserService extends BaseService
{
    private $_userRepo;
    public function __construct()
    {
        parent::__construct(UserRepo::class);
        $this->_userRepo = new UserRepo();
    }

    public function users()
    {
        return $this->_userRepo->users();
    }
}
