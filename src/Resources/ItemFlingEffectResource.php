<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\ItemFlingEffect\GetAllItemFlingEffects;
use PokeApiSdk\Requests\ItemFlingEffect\GetSingleItemFlingEffect;

class ItemFlingEffectResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllItemFlingEffects::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleItemFlingEffect::class;
    }
}
