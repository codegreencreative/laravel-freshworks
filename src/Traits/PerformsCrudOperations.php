<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait PerformsCrudOperations
{
    public function create(array $payload): Object
    {
        return $this->go('POST', $this->resource, ['body' => json_encode($payload)]);
    }

    public function find(int $id, array $query = []): Object
    {
        return $this->go('GET', "{$this->resource}/{$id}", ['query' => $query]);
    }

    public function update(int $id, array $payload): Object
    {
        return $this->go('PUT', "{$this->resource}/{$id}", ['body' => json_encode($payload)]);
    }

    public function destroy(int $id): Object
    {
        return $this->go('DELETE', "{$this->resource}/{$id}");
    }
}
