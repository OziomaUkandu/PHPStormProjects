<?php

namespace Tudublin;

use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class SeasonRepository extends DatabaseTableRepository
{
    public function __construct()
    {
        parent::__construct(__NAMESPACE__, 'Season', 'season');
    }
}