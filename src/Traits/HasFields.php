<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait HasFields
{
    public function fields(): \CodeGreenCreative\Freshworks\Client
    {
        return $this->go('GET', "settings/{$this->resource}/fields");
    }
}
