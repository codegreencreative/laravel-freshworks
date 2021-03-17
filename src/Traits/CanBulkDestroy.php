<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait CanBulkDestroy
{
    public function bulkDelete(array $ids, array $payload): \CodeGreenCreative\Freshworks\Client
    {
        return $this->go('DELETE', "{$this->resource}/bulk_destroy", ['body' => json_encode($payload)]);
    }
}
