<?php

namespace CodeGreenCreative\Freshworks;

use Psr\Http\Message\ResponseInterface;

class Client extends \GuzzleHttp\Client
{
    private $response;

    /**
     * Set up Guzzle client
     */
    public function __construct()
    {
        parent::__construct([
            'base_uri' => sprintf('https://%s.myfreshworks.com/crm/sales/api/', config('freshworks.domain')),
            'headers' => [
                'Authorization' => "Token token=" . config('freshworks.api_key'),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    /**
     * Go perform the request
     * @param  string $method
     * @param  string $uri
     * @param  array  $options
     * @return \CodeGreenCreative\Freshworks\Client
     */
    public function go(string $method, $uri = '', array $options = []): Self
    {
        try {
            $this->response = parent::request($method, $uri, $options);
        } catch (\Exception $e) {
            throw new Exceptions\FreshworksException($e->getResponse()->getBody()->getContents(), 1);
        }

        return $this;
    }

    /**
     * Return the JSON response as an object
     * @return Object
     */
    public function toObject(): Object
    {
        return json_decode($this->response->getBody());
    }

    /**
     * Return the JSON response as an array
     * @return Array
     */
    public function toArray(): Array
    {
        return json_decode($this->response->getBody(), true);
    }
}
