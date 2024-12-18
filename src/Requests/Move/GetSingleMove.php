<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Move;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleMove extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE;
    }
}
