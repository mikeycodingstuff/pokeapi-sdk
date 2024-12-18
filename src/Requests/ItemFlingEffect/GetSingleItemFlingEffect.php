<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ItemFlingEffect;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleItemFlingEffect extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM_FLING_EFFECT;
    }
}
