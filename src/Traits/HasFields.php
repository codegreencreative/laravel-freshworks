<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait HasFields
{
    public function fields(): Object
    {
        return $this->go('GET', "settings/{$this->resource}/fields");
    }
}
