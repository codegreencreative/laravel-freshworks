<?php

namespace CodeGreenCreative\Freshworks\Traits;

use Psr\Http\Message\ResponseInterface;

trait CanBeForgotten
{
    public function forget(int $id): ResponseInterface
    {
        return $this->client->request('DELETE', '{$this->resource}/{$id}/forget');
    }
}
