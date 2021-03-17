# Laravel Freshworks CRM API Wrapper

This Laravel package will allow you to connect to Freshworks CRM API using a Laravel like syntax.

See [Freshworks CRM API](https://developers.freshworks.com/crm/api) documentation for details on what can be done with their API.

## Installation

```shell
composer require codegreencreative/laravel-freshworks
```

## Configuration

```shell
php artisan vendor:publish --tag="laravel-freshworks"
```

## Environment

Add your Freshworks API key and domain. Your domain will be the subdomain you chose when creating yoour account. `{subdomain}`.myfreshworks.com

```
FRESHWORKS_API_KEY=
FRESHWORKS_DOMAIN=
```

## Examples

When an object is returned back from Freshworks, you have two options when returning that object. `->toObject()` or `->toArray()`

```php
// Create a new contact=
\Freshworks::contacts()->create([
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@janedoe.com',
    'phone' => '555-555-5555'
]);

// Update an existing contact
\Freshworks::contacts()->update($contact_id, ['email' => 'jd@janedoe.com']);

// Get all views/filters for contacts
$views = \Freshworks::contacts()->filters()->toObject();

// List all contacts using a view
\Freshworks::contacts()->all($view_id)->toObject()
```

See [Freshworks CRM API](https://developers.freshworks.com/crm/api) documentation for details on what can be done with their API.