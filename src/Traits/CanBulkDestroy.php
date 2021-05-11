<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait CanBulkDestroy
{
    public function bulkDelete(array $ids, array $payload): Object
    {
        return $this->go('DELETE', "{$this->resource}/bulk_destroy", ['body' => json_encode($payload)]);
    }
}
