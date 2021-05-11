<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;
use Illuminate\Support\Str;

class Configuration extends Client
{
    /**
     * [__call description]
     * @param  string $name      [description]
     * @param  array  $arguments [description]
     * @return [type]            [description]
     */
    public function __call(string $name, array $arguments = []): Object
    {
        return $this->go('GET', 'selector/' . Str::snake($name));
    }
}
