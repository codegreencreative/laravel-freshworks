<?php

namespace CodeGreenCreative\Freshworks\Traits;

use Psr\Http\Message\ResponseInterface;

trait HasFilters
{
    public function all($view_id = '', array $query = []): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}/view/' . $view_id, ['query' => $query]);
    }

    public function filter(): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}/filters');
    }
}
