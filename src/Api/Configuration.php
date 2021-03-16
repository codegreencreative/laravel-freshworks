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
    public function __call(string $name, array $arguments = [])
    {
        return $this->client->request('GET', 'selector/' . Str::snake($name));
    }
}
