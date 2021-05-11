<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;
use CodeGreenCreative\Freshworks\Traits\CanBeForgotten;
use CodeGreenCreative\Freshworks\Traits\CanBulkDestroy;
use CodeGreenCreative\Freshworks\Traits\CanCloneItself;
use CodeGreenCreative\Freshworks\Traits\CanPaginate;
use CodeGreenCreative\Freshworks\Traits\HasFields;
use CodeGreenCreative\Freshworks\Traits\HasFilters;
use CodeGreenCreative\Freshworks\Traits\PerformsCrudOperations;

class Contacts extends Client
{
    use PerformsCrudOperations;
    use CanCloneItself;
    use CanBulkDestroy;
    use CanPaginate;
    use HasFilters;
    use HasFields;
    use CanBeForgotten;

    private $resource = 'contacts';

    public function activities(int $id): Object
    {
        return $this->go('GET', "{$this->resource}/{$id}/activities");
    }

    /**
     * If you’d like to assign an owner to a list of contacts, use this API.
     * @param  array  $selected_ids
     * @param  int    $owner_id
     * @return Guzzle
     */
    public function bulkAssignOwner(array $selected_ids, int $owner_id): Object
    {
        return $this->go('POST', "{$this->resource}/bulk_assign_owner", ['body' => json_encode([
            'selected_ids' => $selected_ids,
            'owner_id' => $owner_id
        ])]);
    }
}
