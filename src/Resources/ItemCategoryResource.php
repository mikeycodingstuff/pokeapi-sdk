<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\ItemCategory\GetAllItemCategories;
use PokeApiSdk\Requests\ItemCategory\GetSingleItemCategory;

class ItemCategoryResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllItemCategories::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleItemCategory::class;
    }
}
