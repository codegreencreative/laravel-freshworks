<?php

it('throws non guzzle exception as freshworks exception', function () {
    \CodeGreenCreative\Freshworks\FreshworksFacade::contacts()->all(1);
})->throws(\CodeGreenCreative\Freshworks\Exceptions\FreshworksException::class);

it('throws guzzle exception as freshworks exception with 404 response', function () {
    config()->set('freshworks.domain', 'testing');
    \CodeGreenCreative\Freshworks\FreshworksFacade::contacts()->all(1);
})->throws(\CodeGreenCreative\Freshworks\Exceptions\FreshworksException::class, 'Client error: `GET https://testing.myfreshworks.com/crm/sales/api/contacts/view/1` resulted in a `404 Not Found` response');

it('throws guzzle exception as freshworks exception with 401 response', function () {
    config()->set('freshworks.domain', 'edgility-au');
    \CodeGreenCreative\Freshworks\FreshworksFacade::contacts()->all(1);
})->throws(\CodeGreenCreative\Freshworks\Exceptions\FreshworksException::class, "Client error: `GET https://edgility-au.myfreshworks.com/crm/sales/api/contacts/view/1` resulted in a `401 Unauthorized` response:\n{\"login\":\"failed\",\"message\":null}");
