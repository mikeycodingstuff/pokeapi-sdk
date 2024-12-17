<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\MoveCategory\GetAllMoveCategories;
use PokeApiSdk\Requests\MoveCategory\GetSingleMoveCategory;

class MoveCategoryResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllMoveCategories::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMoveCategory::class;
    }
}
