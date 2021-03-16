<?php

namespace CodeGreenCreative\Freshworks;

use CodeGreenCreative\Freshworks\Exceptions\FreshworksException;
use Illuminate\Support\Str;

class Freshworks
{
    /**
     * [__call description]
     * @param  string $name      [description]
     * @param  array  $arguments [description]
     * @return [type]            [description]
     */
    public function __call(string $name, array $arguments = [])
    {
        try {
            $name = '\\CodeGreenCreative\\Freshworks\\Api\\' . Str::studly($name);
            if (class_exists($name)) {
                return new $name;
            }
        } catch (\Exception $e) {
            throw new FreshworksException($e->getMessage(), 1);
        }
    }
}
