<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;

class Search extends Client
{
    private $resource = 'lookup';

    /**
     * [lookup description]
     * @param  array  $query [description]
     * @return [type]        [description]
     */
    public function lookup(array $query = []): \CodeGreenCreative\Freshworks\Client
    {
        return $this->request('GET', $this->resource, ['query' => $query]);
    }
}
