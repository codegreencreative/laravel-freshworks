<?php

namespace CodeGreenCreative\Freshworks\Traits;

use Psr\Http\Message\ResponseInterface;

trait PerformsCrudOperations
{
    public function create(array $payload): ResponseInterface
    {
        return $this->client->request('POST', $this->resource, ['body' => json_encode($payload)]);
    }

    public function read(int $id, array $query = []): ResponseInterface
    {
        return $this->client->request('GET', '{$this->resource}/{$id}', ['query' => $query]);
    }

    public function update(int $id, array $payload): ResponseInterface
    {
        return $this->client->request('PUT', '{$this->resource}/{$id}', ['body' => json_encode($payload)]);
    }

    public function delete(int $id): ResponseInterface
    {
        return $this->client->request('DELETE', '{$this->resource}/{$id}');
    }
}
