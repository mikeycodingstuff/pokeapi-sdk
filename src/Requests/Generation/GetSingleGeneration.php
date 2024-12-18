<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Generation;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleGeneration extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::GENERATION;
    }
}
