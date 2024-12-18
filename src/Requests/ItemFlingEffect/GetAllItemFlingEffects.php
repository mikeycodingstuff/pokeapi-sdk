<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemFlingEffect;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllItemFlingEffects extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM_FLING_EFFECT;
    }
}
