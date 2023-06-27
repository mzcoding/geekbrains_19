<?php

declare(strict_types=1);

namespace App\Queries;

use App\Enums\NewsStatus;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsQueryBuilder extends QueryBuilder
{
    public function getModel(): Builder
    {
        return News::query();
    }

    public function getActiveNews(): Collection
    {
        return $this->getModel()->active()->get();
    }

    public function getAll(): LengthAwarePaginator
    {
        return $this->getModel()->with('categories')->paginate(10);
    }
}
