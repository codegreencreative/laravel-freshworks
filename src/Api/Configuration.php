<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;
use Illuminate\Support\Str;

class Configuration extends Client
{
    /**
     * Get Selector configuration
     *
     * @see https://developers.freshworks.com/crm/api/#admin_configuration
     *
     * @param string $name Selector name
     */
    public function selector(string $name): object
    {
        return $this->go('GET', 'selector/' . Str::snake($name));
    }
}
