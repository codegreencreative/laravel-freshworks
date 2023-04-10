<?php

namespace CodeGreenCreative\Freshworks\Exceptions;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

class FreshworksException extends \Exception
{
    /** @var ?Response */
    protected ?Response $response;

    public static function fromGuzzleException(RequestException $requestException): self
    {
        $response = $requestException->getResponse();

        if (!$response) {
            return new self($requestException->getMessage(), $requestException->getCode());
        }

        $exception = new self(trim(sprintf("%s\n\%s", $requestException->getMessage(), (string) $response->getBody())), $response->getStatusCode());
        $exception->response = $response;

        return $exception;
    }

    public function getResponse(): ?Response
    {
        return $this->response;
    }
}
