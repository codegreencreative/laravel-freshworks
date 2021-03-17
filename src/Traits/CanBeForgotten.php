<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait CanBeForgotten
{
    public function forget(int $id): \CodeGreenCreative\Freshworks\Client
    {
        return $this->go('DELETE', "{$this->resource}/{$id}/forget");
    }
}
