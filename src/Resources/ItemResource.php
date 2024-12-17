<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Item\GetAllItems;
use PokeApiSdk\Requests\Item\GetSingleItem;

class ItemResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllItems::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleItem::class;
    }
}
