<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;
use CodeGreenCreative\Freshworks\Traits\CanPaginate;
use CodeGreenCreative\Freshworks\Traits\PerformsCrudOperations;

class SalesActivities extends Client
{
    use PerformsCrudOperations;
    use CanPaginate;

    private $resource = 'sales_activities';
}
