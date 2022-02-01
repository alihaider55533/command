<?php

namespace App\Services;
use App\Repositories\UmarRepo;
use App\Umar;

class UmarService extends BaseService
{
    private $_UmarRepo;
    public function __construct()
        {
            parent::__construct(UmarRepo::class);
            $this->_UmarRepo = new UmarRepo();
        }

    // Your methods for service
}
