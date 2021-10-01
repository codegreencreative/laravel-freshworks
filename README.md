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

Add your Freshworks API key and domain. 
Your domain will be the subdomain you chose when creating your account. `{subdomain}`.myfreshworks.com
You can gey your app token by going to Admin Settings -> CRM Code Library -> PHP and copying the `app_token` value.

```
FRESHWORKS_API_KEY=
FRESHWORKS_APP_TOKEN=
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

// Tracking
// Create a new contact
\Freshworks::track()->identify([
   'identifier' => 'john.doe@example.com', //Replace with unique identifier
   'First name' => 'Johnny', //Replace with first name of the user
   'Last name' => 'Doe', //Replace with last name of the user
   'Email' => 'john.doe@example.com', //Replace with email of the user
   'Alternate contact number' => '98765432', //Replace with custom field
   'company' => array(
      'Name' => 'Example.com', //Replace with company name
      'Website' => 'www.example.com' //Replace with website of company
   )
]));

// Track an event
\Freshworks::track()->event([
    'identifier' => 'john.doe@example.com',
    'name' => 'Test Event',
    'role' => 'admin'
]));

// Track a page view
\Freshworks::track()->pageview([
   'identifier' => 'john.doe@example.com',
   'url' => 'http://example.com/pricing'
]));
```

See [Freshworks CRM API](https://developers.freshworks.com/crm/api) documentation for details on what can be done with their API.

## API endpoints added

- [Contacts](https://developers.freshworks.com/crm/api/#contacts)
- [Accounts](https://developers.freshworks.com/crm/api/#accounts)
- [Deals](https://developers.freshworks.com/crm/api/#deals)
- [Notes](https://developers.freshworks.com/crm/api/#notes)
- [Tasks](https://developers.freshworks.com/crm/api/#tasks)
- [Appointments](https://developers.freshworks.com/crm/api/#appointments)
- [Sales Activities](https://developers.freshworks.com/crm/api/#sales-activities)
- [Search](https://developers.freshworks.com/crm/api/#search)
- [Phone](https://developers.freshworks.com/crm/api/#phone)
- [Track](https://teamamplitude.myfreshworks.com/crm/sales/settings/integrations/freshsales-web/3)
