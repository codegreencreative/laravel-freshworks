<?php

namespace CodeGreenCreative\Freshworks\Api;

use Psr\Http\Message\ResponseInterface;
use CodeGreenCreative\Freshworks\Client;
use CodeGreenCreative\Freshworks\Traits\PerformsCrudOperations;

class Appointments extends Client
{
    use PerformsCrudOperations;

    private $resource = 'appointments';

    public function all(array $query = []): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}', ['query' => $query]);
    }
}
