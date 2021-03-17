<?php

namespace CodeGreenCreative\Freshworks\Traits;

use Psr\Http\Message\ResponseInterface;

trait HasFields
{
    public function fields(): ResponseInterface
    {
        return $this->client->request('GET', 'settings/{$this->resource}/fields');
    }
}
