<?php

namespace CodeGreenCreative\Freshworks\Traits;

use Psr\Http\Message\ResponseInterface;

trait CanBulkDestroy
{
    public function bulkDelete(array $ids, array $payload): ResponseInterface
    {
        return $this->client->request('DELETE', '{$this->resource}/bulk_destroy', ['body' => json_encode($payload)]);
    }
}
