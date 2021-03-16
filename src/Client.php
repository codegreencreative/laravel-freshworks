<?php

namespace CodeGreenCreative\Freshworks;

class Client
{
    protected $client;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => sprintf('https://%s.myfreshworks.com/api/', config('freshworks.domain')),
            'headers' => [
                'Authorization' => "Token token=" . config('freshworks.api_key'),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }
}
