<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait ItemFlingEffectEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM_FLING_EFFECT;
    }
}
