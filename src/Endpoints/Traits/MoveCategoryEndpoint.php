<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait MoveCategoryEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_CATEGORY;
    }
}
