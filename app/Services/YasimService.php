<?php

namespace App\Services;
use App\Repositories\YasimRepo;
use App\Yasim;

class YasimService extends BaseService
{
    private $_YasimRepo;
    public function __construct()
        {
            parent::__construct(YasimRepo::class);
            $this->_YasimRepo = new YasimRepo();
        }

    // Your methods for service
}
