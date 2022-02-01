<?php

namespace App\Services;
use App\NewModel;
use App\Repositories\NewModelRepo;

class NewModelService extends BaseService
{
    private $_NewModelRepo;
    public function __construct()
        {
            parent::__construct(NewModelRepo::class);
            $this->_NewModelRepo = new NewModelRepo();
        }

    // Your methods for service
}
