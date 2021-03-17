<?php

namespace CodeGreenCreative\Freshworks\Api;

use Psr\Http\Message\ResponseInterface;
use CodeGreenCreative\Freshworks\Client;
use CodeGreenCreative\Freshworks\Traits\PerformsCrudOperations;

class SalesActivities extends Client
{
    use PerformsCrudOperations;

    private $resource = 'sales_activities';

    public function all(array $query = []): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}', ['query' => $query]);
    }
}
