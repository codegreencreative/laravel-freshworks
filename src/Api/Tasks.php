<?php

namespace CodeGreenCreative\Freshworks\Api;

use Psr\Http\Message\ResponseInterface;
use CodeGreenCreative\Freshworks\Client;
use CodeGreenCreative\Freshworks\Traits\PerformsCrudOperations;

class Tasks extends Client
{
    use PerformsCrudOperations;

    private $resource = 'tasks';

    public function all(array $query = []): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}', ['query' => $query]);
    }
}
