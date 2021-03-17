<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;
use CodeGreenCreative\Freshworks\Traits\PerformsCrudOperations;

class Notes extends Client
{
    use PerformsCrudOperations;

    private $resource = 'notes';
}
