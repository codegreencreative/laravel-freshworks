<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;

class Phone extends Client
{
    private $resource = 'phone_calls';

    /**
     * [lookup description]
     * @param  array  $query [description]
     * @return [type]        [description]
     */
    public function log(array $parameters = []): Object
    {
        return $this->go('POST', $this->resource, ['body' => json_encode($parameters)]);
    }
}
