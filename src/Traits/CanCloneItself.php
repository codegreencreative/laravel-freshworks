<?php

namespace CodeGreenCreative\Freshworks\Traits;

use Psr\Http\Message\ResponseInterface;

trait CanCloneItself
{
    public function clone(int $id): ResponseInterface
    {
        return $this->client->request('POST', '{$this->resource}/{$id}/clone');
    }
}
