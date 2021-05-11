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
    public function lookup(array $query = []): Object
    {
        return $this->go('GET', $this->resource, ['query' => $query]);
    }
}
