<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait HasFilters
{
    public function filters(): \CodeGreenCreative\Freshworks\Client
    {
        return $this->go('GET', "{$this->resource}/filters");
    }
}
