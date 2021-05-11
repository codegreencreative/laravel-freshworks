<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait CanBeForgotten
{
    public function forget(int $id): Object
    {
        return $this->go('DELETE', "{$this->resource}/{$id}/forget");
    }
}
