<?php

namespace App\Repositories;

use App\Models\Yasim;

class YasimRepo extends BaseRepo
{
    /**
         * YasimRepo constructor.
         */
        public function __construct()
        {
            parent::__construct(Yasim::class);
        }

    // Your methods for repository
}
