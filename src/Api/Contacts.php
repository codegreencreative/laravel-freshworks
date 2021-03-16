<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;
use Illuminate\Support\Str;

class Contacts extends Client
{
    public function create(array $payload)
    {
        return $this->client->request('POST', 'contacts', json_encode($payload));
    }

    public function read(int $id)
    {
        return $this->client->request('GET', 'contacts/{$id}');
    }

    public function update(int $id, array $payload)
    {
        return $this->client->request('PUT', 'contacts/{$id}', json_encode($payload));
    }

    public function delete(int $id)
    {
        return $this->client->request('DELETE', 'contacts/{$id}');
    }

    public function clone(int $id)
    {
        return $this->client->request('POST', 'contacts/{$id}/clone');
    }

    public function forget(int $id)
    {
        return $this->client->request('DELETE', 'contacts/{$id}/forget');
    }

    public function bulkDelete(array $ids, array $payload)
    {
        return $this->client->request('DELETE', 'contacts/bulk_destroy', json_encode($payload));
    }

    public function fields()
    {
        return $this->client->request('GET', 'settings/contacts/fields');
    }

    public function activities(int $id)
    {
        return $this->client->request('GET', 'contacts/{$id}/activities');
    }
}
