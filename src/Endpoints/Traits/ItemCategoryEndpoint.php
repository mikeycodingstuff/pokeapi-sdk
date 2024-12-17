<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait ItemCategoryEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ITEM_CATEGORY;
    }
}
