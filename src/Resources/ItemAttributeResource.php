<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\ItemAttribute\GetAllItemAttributes;
use PokeApiSdk\Requests\ItemAttribute\GetSingleItemAttribute;

class ItemAttributeResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllItemAttributes::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleItemAttribute::class;
    }
}
