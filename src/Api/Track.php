<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;

class Track extends Client
{
    private $resource = 'track';

    public function __construct()
    {
        parent::__construct('track');
    }

    public function identify(array $parameters): Object
    {
        $parameters['application_token'] = config('freshworks.token');
        return $this->go('POST', 'visitors', ['body' => json_encode($parameters)]);
    }

    public function event(array $parameters): Object
    {
        $parameters['application_token'] = config('freshworks.token');
        $parameters['event'] = [
            'name' => $parameters['name'],
            'role' => $parameters['role']
        ];
        unset($parameters['name'], $parameters['role']);
        return $this->go('POST', 'events', ['body' => json_encode($parameters)]);
    }

    public function pageview(array $parameters): Object
    {
        $parameters['page_view']['url'] = $parameters['url'];
        $parameters['application_token'] = config('freshworks.token');
        unset($parameters['url']);
        return $this->go('POST', 'page_views', ['body' => json_encode($parameters)]);
    }
}
