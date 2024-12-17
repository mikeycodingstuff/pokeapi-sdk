<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\ItemPocket\GetAllItemPockets;
use PokeApiSdk\Requests\ItemPocket\GetSingleItemPocket;

class ItemPocketResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllItemPockets::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleItemPocket::class;
    }
}
