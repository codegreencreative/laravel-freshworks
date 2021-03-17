<?php

namespace CodeGreenCreative\Freshworks\Api;

use Psr\Http\Message\ResponseInterface;
use CodeGreenCreative\Freshworks\Client;

class Search extends Client
{
    private $resource = 'lookup';

    /**
     * [lookup description]
     * @param  array  $query [description]
     * @return [type]        [description]
     */
    public function lookup(array $query = []): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}', ['query' => $query]);
    }
}
