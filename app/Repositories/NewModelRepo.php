<?php

namespace App\Repositories;

use App\Models\Newmodel;

class NewmodelRepo extends BaseRepo
{
    /**
         * NewmodelRepo constructor.
         */
        public function __construct()
        {
            parent::__construct(Newmodel::class);
        }

    // Your methods for repository
}
