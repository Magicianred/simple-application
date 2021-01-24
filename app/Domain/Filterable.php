<?php

namespace App\Domain;

use App\Domain\BaseFilters;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    /**
     * Filter a result set.
     *
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeFilter($query, BaseFilters $filters)
    {
        return $filters->apply($query);
    }
}
