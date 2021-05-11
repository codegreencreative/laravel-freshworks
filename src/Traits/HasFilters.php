<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait HasFilters
{
    public function filters(): Object
    {
        return $this->go('GET', "{$this->resource}/filters");
    }
}
