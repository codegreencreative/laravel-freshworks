<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait CanCloneItself
{
    public function clone(int $id): \CodeGreenCreative\Freshworks\Client
    {
        return $this->go('POST', "{$this->resource}/{$id}/clone");
    }
}
