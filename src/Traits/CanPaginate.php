<?php

namespace CodeGreenCreative\Freshworks\Traits;

trait CanPaginate
{
    /**
     * Get all records for the resource
     *
     * @param  string $view_id
     * @param  array  $query
     * @return [type]          [description]
     */
    // public function all($view_id, array $query = []): \CodeGreenCreative\Freshworks\Client
    public function all(...$arguments): \CodeGreenCreative\Freshworks\Client
    {
        if (is_array($arguments[0])) {
            return $this->go('GET', $this->resource, ['query' => $arguments[0]]);
        }
        return $this->go('GET', "{$this->resource}/view/{$arguments[0]}", [
            'query' => isset($arguments[1]) ? $arguments[1] : []
        ]);
    }
}
