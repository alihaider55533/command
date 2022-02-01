<?php

namespace App\Repositories;

use App\Models\New;

class NewRepo extends BaseRepo
{
    /**
         * NewRepo constructor.
         */
        public function __construct()
        {
            parent::__construct(New::class);
        }

    // Your methods for repository
}
