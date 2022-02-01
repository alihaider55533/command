<?php

namespace App\Services;
use App\New;
use App\Repositories\NewRepo;

class NewService extends BaseService
{
    private $_NewRepo;
    public function __construct()
        {
            parent::__construct(NewRepo::class);
            $this->_NewRepo = new NewRepo();
        }

    // Your methods for service
}
